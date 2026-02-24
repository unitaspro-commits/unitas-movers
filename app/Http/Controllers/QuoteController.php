<?php

namespace App\Http\Controllers;

use App\Enums\MoveSize;
use App\Enums\ReferralSource;
use App\Jobs\CalculateQuoteDistance;
use App\Mail\NewQuoteAdmin;
use App\Mail\QuoteConfirmation;
use App\Models\Quote;
use App\Models\Service;
use App\Services\SchemaMarkupService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Enum;

class QuoteController extends Controller
{
    public function create(SchemaMarkupService $schema)
    {
        $services = Service::published()->ordered()->get();
        $moveSizes = MoveSize::cases();
        $referralSources = ReferralSource::cases();
        $schemas = $schema->forStaticPage('quote', 'Get a Free Quote', route('quote.create'));

        return view('pages.quote', compact('services', 'moveSizes', 'referralSources', 'schemas'));
    }

    public function store(Request $request)
    {
        // Honeypot: bots fill hidden "website" field, real users don't
        if ($request->filled('website')) {
            return redirect()->back()
                ->with('success', 'Thank you! Your quote request has been submitted. We\'ll contact you within 2 hours during business hours.');
        }

        $validated = $request->validate([
            'full_name' => ['required', 'string', 'min:2', 'max:150', 'regex:/^[^\r\n]*$/'],
            'phone' => ['required', 'string', 'max:20', 'regex:/(\d\D*){10}/'],
            'email' => 'required|email|max:255',
            'moving_from' => 'required|string|max:500',
            'moving_to' => 'required|string|max:500',
            'move_date' => 'required|date|after_or_equal:' . now('America/Edmonton')->format('Y-m-d') . '|before:' . now('America/Edmonton')->addYears(2)->format('Y-m-d'),
            'move_size' => ['required', new Enum(MoveSize::class)],
            'services_needed' => 'required|array|min:1',
            'services_needed.*' => 'string|in:moving,packing,unpacking,piano,furniture_assembly,junk_removal,other',
            'additional_notes' => 'nullable|string|max:5000',
            'referral_source' => ['nullable', new Enum(ReferralSource::class)],
            'origin_city' => 'nullable|string|max:100',
            'destination_city' => 'nullable|string|max:100',
            'source_page' => 'nullable|string|max:255',
            'utm_source' => 'nullable|string|max:100',
            'utm_medium' => 'nullable|string|max:100',
            'utm_campaign' => 'nullable|string|max:100',
        ]);
        $validated['status'] = 'new';
        // Fallback: use hidden input value, or truncate referrer URL to fit DB column
        if (empty($validated['source_page'])) {
            $validated['source_page'] = Str::limit(url()->previous(), 252, '...');
        }

        $quote = Quote::create($validated);

        CalculateQuoteDistance::dispatch($quote);

        // Send email notifications via queue so form responds instantly
        try {
            Mail::to(config('mail.admin_to'))->queue(new NewQuoteAdmin($quote));
            Mail::to($quote->email)->queue(new QuoteConfirmation($quote));

            $quote->activities()->create([
                'type' => 'email_sent',
                'summary' => 'Email notifications queued for delivery',
            ]);
        } catch (\Exception $e) {
            Log::error('Quote email notification failed', [
                'quote_id' => $quote->id,
                'error' => $e->getMessage(),
            ]);
        }

        return redirect()->back()
            ->with('success', 'Thank you! Your quote request has been submitted. We\'ll contact you within 2 hours during business hours.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Enums\MoveSize;
use App\Enums\ReferralSource;
use App\Mail\NewQuoteAdmin;
use App\Mail\QuoteConfirmation;
use App\Models\Quote;
use App\Models\Service;
use App\Services\SchemaMarkupService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller
{
    public function create(SchemaMarkupService $schema)
    {
        $services = Service::published()->ordered()->get();
        $moveSizes = MoveSize::cases();
        $referralSources = ReferralSource::cases();
        $schemas = $schema->forStaticPage('get-a-quote', 'Get a Free Quote', route('quote.create'));

        return view('pages.quote', compact('services', 'moveSizes', 'referralSources', 'schemas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:150',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'moving_from' => 'required|string|max:500',
            'moving_to' => 'required|string|max:500',
            'move_date' => 'required|date|after:today',
            'move_size' => 'required|string',
            'services_needed' => 'required|array|min:1',
            'services_needed.*' => 'string',
            'additional_notes' => 'nullable|string',
            'preferred_language' => 'nullable|in:en,fr',
            'referral_source' => 'nullable|string',
        ]);

        $validated['status'] = 'new';
        $validated['source_page'] = url()->previous();
        $validated['utm_source'] = $request->query('utm_source');
        $validated['utm_medium'] = $request->query('utm_medium');
        $validated['utm_campaign'] = $request->query('utm_campaign');

        $quote = Quote::create($validated);

        // Send email notifications
        try {
            Mail::to(config('mail.admin_to'))->send(new NewQuoteAdmin($quote));
            Mail::to($quote->email)->send(new QuoteConfirmation($quote));

            $quote->activities()->create([
                'type' => 'email_sent',
                'summary' => 'Auto-reply confirmation sent to customer',
            ]);
        } catch (\Exception $e) {
            Log::error('Quote email notification failed', [
                'quote_id' => $quote->id,
                'error' => $e->getMessage(),
            ]);
        }

        return redirect()->route('quote.create')
            ->with('success', 'Thank you! Your quote request has been submitted. We\'ll contact you within 2 hours during business hours.');
    }
}

<?php

namespace Tests\Feature;

use App\Enums\QuoteStatus;
use App\Models\Quote;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Traits\CreatesTestData;

class QuoteFormTest extends TestCase
{
    use RefreshDatabase, CreatesTestData;

    // ── Successful Submission ─────────────────────────────────

    public function test_valid_submission_creates_quote(): void
    {
        $this->withoutMiddleware(\Illuminate\Routing\Middleware\ThrottleRequests::class);

        $response = $this->post('/get-a-quote', $this->validQuoteData());

        $response->assertRedirect();
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('quotes', [
            'full_name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'status' => 'new',
        ]);
    }

    public function test_new_quote_has_status_new(): void
    {
        $this->withoutMiddleware(\Illuminate\Routing\Middleware\ThrottleRequests::class);

        $this->post('/get-a-quote', $this->validQuoteData());

        $quote = Quote::latest()->first();
        $this->assertEquals(QuoteStatus::New, $quote->status);
    }

    // ── Honeypot Protection ───────────────────────────────────

    public function test_honeypot_filled_returns_fake_success(): void
    {
        $this->withoutMiddleware(\Illuminate\Routing\Middleware\ThrottleRequests::class);

        $response = $this->post('/get-a-quote', array_merge($this->validQuoteData(), [
            'website' => 'http://spambot.com',
        ]));

        $response->assertRedirect();
        $response->assertSessionHas('success');
        $this->assertDatabaseCount('quotes', 0);
    }

    // ── Required Field Validation ─────────────────────────────

    public function test_full_name_is_required(): void
    {
        $this->withoutMiddleware(\Illuminate\Routing\Middleware\ThrottleRequests::class);

        $response = $this->from('/get-a-quote')
            ->post('/get-a-quote', $this->validQuoteData(['full_name' => '']));

        $response->assertSessionHasErrors('full_name');
        $this->assertDatabaseCount('quotes', 0);
    }

    public function test_phone_is_required(): void
    {
        $this->withoutMiddleware(\Illuminate\Routing\Middleware\ThrottleRequests::class);

        $this->from('/get-a-quote')
            ->post('/get-a-quote', $this->validQuoteData(['phone' => '']))
            ->assertSessionHasErrors('phone');
    }

    public function test_email_is_required(): void
    {
        $this->withoutMiddleware(\Illuminate\Routing\Middleware\ThrottleRequests::class);

        $this->from('/get-a-quote')
            ->post('/get-a-quote', $this->validQuoteData(['email' => '']))
            ->assertSessionHasErrors('email');
    }

    public function test_moving_from_is_required(): void
    {
        $this->withoutMiddleware(\Illuminate\Routing\Middleware\ThrottleRequests::class);

        $this->from('/get-a-quote')
            ->post('/get-a-quote', $this->validQuoteData(['moving_from' => '']))
            ->assertSessionHasErrors('moving_from');
    }

    public function test_moving_to_is_required(): void
    {
        $this->withoutMiddleware(\Illuminate\Routing\Middleware\ThrottleRequests::class);

        $this->from('/get-a-quote')
            ->post('/get-a-quote', $this->validQuoteData(['moving_to' => '']))
            ->assertSessionHasErrors('moving_to');
    }

    public function test_move_date_is_required(): void
    {
        $this->withoutMiddleware(\Illuminate\Routing\Middleware\ThrottleRequests::class);

        $this->from('/get-a-quote')
            ->post('/get-a-quote', $this->validQuoteData(['move_date' => '']))
            ->assertSessionHasErrors('move_date');
    }

    public function test_move_size_is_required(): void
    {
        $this->withoutMiddleware(\Illuminate\Routing\Middleware\ThrottleRequests::class);

        $this->from('/get-a-quote')
            ->post('/get-a-quote', $this->validQuoteData(['move_size' => '']))
            ->assertSessionHasErrors('move_size');
    }

    public function test_services_needed_is_required(): void
    {
        $this->withoutMiddleware(\Illuminate\Routing\Middleware\ThrottleRequests::class);

        $this->from('/get-a-quote')
            ->post('/get-a-quote', $this->validQuoteData(['services_needed' => []]))
            ->assertSessionHasErrors('services_needed');
    }

    // ── Field Format Validation ───────────────────────────────

    public function test_formatted_phone_accepted(): void
    {
        $this->withoutMiddleware(\Illuminate\Routing\Middleware\ThrottleRequests::class);

        $this->post('/get-a-quote', $this->validQuoteData(['phone' => '(403) 991-3206']))
            ->assertSessionDoesntHaveErrors('phone');
    }

    public function test_past_move_date_rejected(): void
    {
        $this->withoutMiddleware(\Illuminate\Routing\Middleware\ThrottleRequests::class);

        $this->from('/get-a-quote')
            ->post('/get-a-quote', $this->validQuoteData(['move_date' => '2020-01-01']))
            ->assertSessionHasErrors('move_date');
    }

    public function test_invalid_move_size_rejected(): void
    {
        $this->withoutMiddleware(\Illuminate\Routing\Middleware\ThrottleRequests::class);

        $this->from('/get-a-quote')
            ->post('/get-a-quote', $this->validQuoteData(['move_size' => 'mansion']))
            ->assertSessionHasErrors('move_size');
    }

    public function test_invalid_services_needed_value_rejected(): void
    {
        $this->withoutMiddleware(\Illuminate\Routing\Middleware\ThrottleRequests::class);

        $this->from('/get-a-quote')
            ->post('/get-a-quote', $this->validQuoteData(['services_needed' => ['teleportation']]))
            ->assertSessionHasErrors('services_needed.0');
    }
}

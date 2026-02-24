<?php

namespace Tests\Unit;

use App\Enums\QuoteStatus;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Traits\CreatesTestData;

class QuoteTransitionTest extends TestCase
{
    use RefreshDatabase, CreatesTestData;

    public function test_transition_changes_status(): void
    {
        $quote = $this->createQuote(['status' => QuoteStatus::New->value]);

        $quote->transitionTo(QuoteStatus::Contacted);

        $this->assertEquals(QuoteStatus::Contacted, $quote->fresh()->status);
    }

    public function test_transition_sets_contacted_timestamp(): void
    {
        $quote = $this->createQuote(['status' => QuoteStatus::New->value]);

        $quote->transitionTo(QuoteStatus::Contacted);

        $this->assertNotNull($quote->fresh()->contacted_at);
    }

    public function test_transition_creates_activity_log(): void
    {
        $quote = $this->createQuote(['status' => QuoteStatus::New->value]);

        $quote->transitionTo(QuoteStatus::Contacted, null, 'Called customer');

        $this->assertDatabaseHas('quote_activities', [
            'quote_id' => $quote->id,
            'type' => 'status_change',
        ]);
    }

    public function test_transition_to_same_status_is_noop(): void
    {
        $quote = $this->createQuote(['status' => QuoteStatus::New->value]);

        $quote->transitionTo(QuoteStatus::New);

        $this->assertDatabaseCount('quote_activities', 0);
    }

    public function test_transition_to_completed_sets_timestamp(): void
    {
        $quote = $this->createQuote(['status' => QuoteStatus::Booked->value]);

        $quote->transitionTo(QuoteStatus::Completed);

        $this->assertNotNull($quote->fresh()->completed_at);
    }
}

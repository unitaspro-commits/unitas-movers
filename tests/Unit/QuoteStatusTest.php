<?php

namespace Tests\Unit;

use App\Enums\QuoteStatus;
use PHPUnit\Framework\TestCase;

class QuoteStatusTest extends TestCase
{
    public function test_all_cases_have_labels(): void
    {
        foreach (QuoteStatus::cases() as $status) {
            $this->assertIsString($status->label());
            $this->assertNotEmpty($status->label());
        }
    }

    public function test_all_cases_have_colors(): void
    {
        foreach (QuoteStatus::cases() as $status) {
            $this->assertIsString($status->color());
            $this->assertNotEmpty($status->color());
        }
    }

    public function test_all_cases_have_icons(): void
    {
        foreach (QuoteStatus::cases() as $status) {
            $this->assertIsString($status->icon());
            $this->assertNotEmpty($status->icon());
        }
    }

    public function test_new_can_transition_to_contacted(): void
    {
        $this->assertContains(QuoteStatus::Contacted, QuoteStatus::New->allowedTransitions());
    }

    public function test_new_can_transition_to_cancelled(): void
    {
        $this->assertContains(QuoteStatus::Cancelled, QuoteStatus::New->allowedTransitions());
    }

    public function test_new_cannot_transition_to_completed(): void
    {
        $this->assertNotContains(QuoteStatus::Completed, QuoteStatus::New->allowedTransitions());
    }

    public function test_completed_is_terminal(): void
    {
        $this->assertEmpty(QuoteStatus::Completed->allowedTransitions());
    }

    public function test_cancelled_can_reopen_to_new(): void
    {
        $this->assertContains(QuoteStatus::New, QuoteStatus::Cancelled->allowedTransitions());
    }

    public function test_booked_can_transition_to_completed(): void
    {
        $this->assertContains(QuoteStatus::Completed, QuoteStatus::Booked->allowedTransitions());
    }

    public function test_no_response_can_transition_to_contacted(): void
    {
        $this->assertContains(QuoteStatus::Contacted, QuoteStatus::NoResponse->allowedTransitions());
    }
}

<?php

namespace App\Jobs;

use App\Models\Quote;
use App\Services\DistanceCalculationService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

class CalculateQuoteDistance implements ShouldQueue
{
    use Queueable;

    public int $tries = 2;

    public function __construct(
        public Quote $quote,
    ) {}

    public function handle(DistanceCalculationService $service): void
    {
        if (empty($this->quote->origin_city) || empty($this->quote->destination_city)) {
            return;
        }

        $distance = $service->calculate(
            $this->quote->origin_city,
            $this->quote->destination_city,
            $this->quote->moving_from,
            $this->quote->moving_to,
        );

        if ($distance !== null) {
            $this->quote->update(['estimated_distance_km' => $distance]);
        }
    }

    public function failed(\Throwable $exception): void
    {
        Log::warning('CalculateQuoteDistance job failed', [
            'quote_id' => $this->quote->id,
            'error' => $exception->getMessage(),
        ]);
    }
}

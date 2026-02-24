<?php

namespace App\Services;

use App\Models\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class DistanceCalculationService
{
    /**
     * Calculate distance between origin and destination.
     *
     * Tries the routes table first (free, instant), then falls back
     * to Google Distance Matrix API for unknown city pairs.
     */
    public function calculate(string $originCity, string $destCity, string $originAddress, string $destAddress): ?int
    {
        // 1. Try route table lookup (checks both directions)
        $distance = $this->lookupRoute($originCity, $destCity);

        if ($distance !== null) {
            return $distance;
        }

        // 2. Fallback to Google Distance Matrix API
        return $this->queryGoogleDistanceMatrix($originAddress, $destAddress);
    }

    protected function lookupRoute(string $originCity, string $destCity): ?int
    {
        $route = Route::query()
            ->where(function ($q) use ($originCity, $destCity) {
                $q->whereRaw('LOWER(origin_city) = ?', [strtolower($originCity)])
                  ->whereRaw('LOWER(dest_city) = ?', [strtolower($destCity)]);
            })
            ->orWhere(function ($q) use ($originCity, $destCity) {
                $q->whereRaw('LOWER(origin_city) = ?', [strtolower($destCity)])
                  ->whereRaw('LOWER(dest_city) = ?', [strtolower($originCity)]);
            })
            ->first();

        return $route?->distance_km ? (int) $route->distance_km : null;
    }

    protected function queryGoogleDistanceMatrix(string $originAddress, string $destAddress): ?int
    {
        $apiKey = config('services.google.maps_api_key');

        if (empty($apiKey)) {
            Log::warning('DistanceCalculation: Google Maps API key not configured');
            return null;
        }

        try {
            $response = Http::timeout(10)->get('https://maps.googleapis.com/maps/api/distancematrix/json', [
                'origins' => $originAddress,
                'destinations' => $destAddress,
                'units' => 'metric',
                'key' => $apiKey,
            ]);

            if (! $response->successful()) {
                Log::warning('DistanceCalculation: Google API HTTP error', [
                    'status' => $response->status(),
                ]);
                return null;
            }

            $data = $response->json();

            if (($data['status'] ?? '') !== 'OK') {
                Log::warning('DistanceCalculation: Google API error', [
                    'status' => $data['status'] ?? 'unknown',
                ]);
                return null;
            }

            $element = $data['rows'][0]['elements'][0] ?? null;

            if (! $element || ($element['status'] ?? '') !== 'OK') {
                Log::warning('DistanceCalculation: No route found', [
                    'element_status' => $element['status'] ?? 'missing',
                ]);
                return null;
            }

            // Distance value is in meters — convert to km
            return (int) round($element['distance']['value'] / 1000);
        } catch (\Exception $e) {
            Log::warning('DistanceCalculation: Exception', [
                'message' => $e->getMessage(),
            ]);
            return null;
        }
    }
}

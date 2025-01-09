<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CalenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $key = env('FMP_KEY'); 
        $url = "https://financialmodelingprep.com/api/v3/economic_calendar?from=2025-01-01&to=2025-01-30&apikey={$key}";
        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->json();

            foreach ($data as $event) {
                $countryCode = strtolower($event['country']);
                $flagUrl = "https://flagcdn.com/w320/{$countryCode}.png"; // Flag CDN URL

                $impact = in_array($event['impact'], ['Low', 'Medium', 'High']) ? $event['impact'] : 'Low';

                DB::table('calenders')->updateOrInsert(
                    ['id' => (string) \Illuminate\Support\Str::uuid()], // Unique ID
                    [
                        'country' => $event['country'],
                        'flag' => $flagUrl,
                        'event' => $event['event'],
                        'currency' => $event['currency'],
                        'actual' => $event['actual'] ?? null,
                        'previous' => $event['previous'] ?? null,
                        'estimate' => $event['estimate'] ?? null,
                        'change' => $event['change'] ?? 0,
                        'changePercentage' => $event['changePercentage'] ?? 0,
                        'unit' => $event['unit'] ?? null,
                        'impact' => $impact,
                        'date' => $event['date'] ?? null,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                );
            }
        }
    }
}

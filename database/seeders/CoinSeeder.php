<?php

namespace Database\Seeders;

use App\Models\Coin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CoinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::get('https://orionterminal.com/api/screener');

        if ($response->ok()) {
            $data = $response->json();

            foreach ($data as $symbol => $metrics) {
                $symbolCleaned = preg_replace(['/\/|-.*$/'], ['', ''], $symbol);

                Coin::updateOrCreate(
                    ['symbol' => $symbolCleaned],
                    [
                        'name' => $symbolCleaned . ' Name',
                        'slug' => $symbol,
                        'img' => 'https://orionterminal.com/static/img/coins/' . strtolower(preg_replace('/[^a-zA-Z0-9]/', '', explode('/', $symbol)[0])) . '.png',
                        'price' => $metrics[11] ?? null,
                        'change_15m' => $metrics[0] ?? null,
                        'change_1d' => $metrics[1] ?? null,
                        'change_1h' => $metrics[2] ?? null,
                        'change_5m' => $metrics[3] ?? null,
                        'change_8h' => $metrics[4] ?? null,
                        'funding_rate' => $metrics[5] ?? null,
                        'oi_change_5m' => $metrics[50][0] ?? null,
                        'oi_change_15m' => $metrics[6][0] ?? null,
                        'oi_change_1h' => $metrics[8][0] ?? null,
                        'oi_change_1d' => $metrics[9][0] ?? null,
                        'oi_change_8h' => $metrics[7][0] ?? null,
                        'open_interest' => $metrics[10][0] ?? null,
                        'volatility_15m' => $metrics[12] ?? null,
                        'volatility_1h' => $metrics[13] ?? null,
                        'volatility_5m' => $metrics[14] ?? null,
                        'ticks_15m' => $metrics[15] ?? null,
                        'ticks_1h' => $metrics[16] ?? null,
                        'ticks_5m' => $metrics[17] ?? null,
                        'vdelta_15m' => $metrics[18] ?? null,
                        'vdelta_1d' => $metrics[19] ?? null,
                        'vdelta_1h' => $metrics[20] ?? null,
                        'vdelta_5m' => $metrics[21] ?? null,
                        'vdelta_8h' => $metrics[22] ?? null,
                        'volume_15m' => $metrics[23] ?? null,
                        'volume_1d' => $metrics[24] ?? null,
                        'volume_1h' => $metrics[25] ?? null,
                        'volume_5m' => $metrics[26] ?? null,
                        'volume_8h' => $metrics[27] ?? null,
                        'marketcap' => $metrics[40] ?? 0,
                        'btc_correlation_1d' => $metrics[42] ?? null,
                        'eth_correlation_1d' => $metrics[43] ?? null,
                    ]
                );
            }

            $this->command->info('Coins data seeded successfully!');
        } else {
            Log::error('Failed to fetch data from Orion API: ' . $response->body());
            $this->command->error('Failed to fetch data from Orion API.');
        }
    }

}

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
                Coin::updateOrCreate(
                    ['symbol' => preg_replace(['/\/|-.*$/'], ['', ''], $symbol)],
                    [
                        'name' => preg_replace(['/\/|-.*$/'], ['', ''], $symbol) . ' Name',
                        'slug' => $symbol,
                        'img' => 'https://orionterminal.com/static/img/coins/' . strtolower(preg_replace('/[^a-zA-Z0-9]/', '', explode('/', $symbol)[0])) . '.png',
                        'price' => $metrics[11],
                        'change_15m' => $metrics[0],
                        'change_1d' => $metrics[1],
                        'change_1h' => $metrics[2],
                        'change_5m' => $metrics[3],
                        'change_8h' => $metrics[4],
                        'funding_rate' => $metrics[5],
                        'oi_change_15m' => $metrics[6][1] ?? 0,
                        'oi_change_1d' => $metrics[6][2] ?? 0,
                        'marketcap' => $metrics[40] ?? 0,
                        'btc_correlation_1d' => $metrics[42],
                        'eth_correlation_1d' => $metrics[43],
                        'open_interest' => null,
                    ]
                );
            }

            $this->command->info('Coins data seeded successfully!');
        } else {
            Log::error('Failed to fetch data from Orion API.');
            $this->command->error('Failed to fetch data from Orion API.');
        }
    }
}

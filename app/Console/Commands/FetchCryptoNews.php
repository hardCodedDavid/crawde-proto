<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Coin;
use App\Models\News; 
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class FetchCryptoNews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // The name and signature of the console command.
    protected $signature = 'fetch:news';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch cryptocurrency news and store them if not already existing.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // // Define the API endpoint and fetch the response
        // $url = 'https://financialmodelingprep.com/api/v4/crypto_news?limit=500&apikey=' . env('FMP_KEY');
        // $response = Http::get($url);

        // // Check if the request was successful
        // if ($response->successful()) {
        //     $newsData = $response->json();

        //     // Iterate over the fetched news and store them in the database
        //     foreach ($newsData as $newsItem) {
        //         $existingNews = News::where('title', $newsItem['title'])->first();

        //         // Skip if the news already exists in the database
        //         if ($existingNews) {
        //             continue;
        //         }

        //         // Store the news in the database
        //         News::create([
        //             'title' => $newsItem['title'],
        //             'description' => $newsItem['text'],
        //             'source' => $newsItem['site'],
        //             'symbol' => $newsItem['symbol'],
        //             'source_url' => $newsItem['url'],
        //             'published_at' => Carbon::parse($newsItem['publishedDate'])->format('Y-m-d H:i:s'),
        //             'img' => $newsItem['image'],
        //             'company' => 'FMP',
        //         ]);
        //     }

        //     $this->info('Crypto news fetched and stored successfully!');
        // } else {
        //     $this->error('Failed to fetch crypto news.');
        // }

        $apiBaseUrl = 'https://financialmodelingprep.com/api/v3/search';
        $apiKey = 'U16Gq0PRKGgnTbltSa5423seAWtQNV0T';

        // Fetch all coins from your database
        $coins = Coin::orderBy('marketcap', 'desc')->get();
        $this->info('checking...');

        foreach ($coins as $coin) {
            $cleanedSymbol = rtrim($coin->symbol, 'T');

            // Make an API request for the cleaned symbol
            $response = Http::get($apiBaseUrl, [
                'query' => $cleanedSymbol,
                'apikey' => $apiKey,
            ]);

            if ($response->ok()) {
                $apiData = $response->json();

                // Get the first match from the API response
                $match = collect($apiData)->first();

                if ($match) {
                    // Update the coin name with the first match from the API
                    $coin->update(['name' => str_replace('USD', '', $match['name'])]);
                    $this->info($cleanedSymbol . ' - ' . str_replace('USD', '', $match['name']));
                } else {
                    // If no match, set the name as the symbol itself
                    $coin->update(['name' => $coin->symbol]);
                    $this->info($cleanedSymbol . ' - Null');
                }
            } else {
                // Log the error if the API call fails
                Log::error('Failed to fetch data for symbol: ' . $cleanedSymbol);
                $this->error('Failed to fetch data for symbol: ' . $cleanedSymbol);
            }
        }

        $this->info('Coins data updated successfully!');
    }
}

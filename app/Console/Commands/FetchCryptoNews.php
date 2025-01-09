<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\News; 
use Carbon\Carbon;

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
        // Define the API endpoint and fetch the response
        $url = 'https://financialmodelingprep.com/api/v4/crypto_news?limit=500&apikey=' . env('FMP_KEY');
        $response = Http::get($url);

        // Check if the request was successful
        if ($response->successful()) {
            $newsData = $response->json();

            // Iterate over the fetched news and store them in the database
            foreach ($newsData as $newsItem) {
                $existingNews = News::where('title', $newsItem['title'])->first();

                // Skip if the news already exists in the database
                if ($existingNews) {
                    continue;
                }

                // Store the news in the database
                News::create([
                    'title' => $newsItem['title'],
                    'description' => $newsItem['text'],
                    'source' => $newsItem['site'],
                    'symbol' => $newsItem['symbol'],
                    'source_url' => $newsItem['url'],
                    'published_at' => Carbon::parse($newsItem['publishedDate'])->format('Y-m-d H:i:s'),
                    'img' => $newsItem['image'],
                    'company' => 'FMP',
                ]);
            }

            $this->info('Crypto news fetched and stored successfully!');
        } else {
            $this->error('Failed to fetch crypto news.');
        }
    }
}

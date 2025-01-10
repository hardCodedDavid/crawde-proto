<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use App\Models\News;
use App\Models\Crypto;
use App\Models\Setting;
use App\Models\Calender;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(Request $request): View
    {
        $crypto = Coin::where('symbol', 'like', '%T') // Filter symbols ending with 'T'
        ->orderBy('marketcap', 'desc')
        ->take(50) // or ->limit(50)
        ->get();

        return view('user.dashboard', [
            'user' => $request->user(),
            'crypto' => $crypto
        ]);
    }

    public function show($symbol): View
    {
        // Fetch crypto data from the database
        $cryptoData = Coin::where('symbol', $symbol)->first();

        if (!$cryptoData) {
            abort(404, "Crypto not found.");
        }

        // Fetch related news
        $news = News::where('symbol', substr($symbol, 0, -1))
            ->orderBy('published_at', 'desc')
            ->take(15)
            ->get();

        if ($news->count() < 5) {
            // Get all news and shuffle them
            $news = News::orderBy('published_at', 'desc')
                ->get()
                ->shuffle()
                ->take(15);
        }

        $summary = $news->first()?->description ?? 'The market capitalization stands at around $1.75 trillion, with a 24-hour trading volume of approximately $2.03 billion.';

        $sentimentScores = $news->map(function($item) {
            return number_format($item->sentiment_score * 100, 2);
        });

        $categories = $news->map(function($item, $index) {
            return $index + 1;  
        });

        // Fetch historical chart data using an API
        $endDate = now();
        $startDate = now()->subYear(); // Last year from now
        $apiUrl = "https://financialmodelingprep.com/api/v3/historical-chart/1month/{$symbol}?from={$startDate->toDateString()}&to={$endDate->toDateString()}&apikey=U16Gq0PRKGgnTbltSa5423seAWtQNV0T";

        $chartData = [];
        try {
            $response = Http::get($apiUrl);
            if ($response->successful()) {
                $chartData = collect($response->json())
                    ->sortBy('date')
                    ->pluck('close') // Fetch only close values
                    ->values()
                    ->toArray();
            }
        } catch (\Exception $e) {
            logger()->error("Failed to fetch chart data: " . $e->getMessage());
        }

        return view('user.show', [
            // 'user' => $request->user(),
            'crypto' => $cryptoData,
            'news' => $news,
            'chartData' => $chartData,
            'summary' => $summary,
            'score' => $sentimentScores,
            'categories' => $categories,
        ]);
    }

    public function calender(Request $request): View
    {
        // $startOfWeek = Carbon::now()->startOfWeek();
        // $endOfWeek = Carbon::now()->endOfWeek();

        $startOfWeek = Carbon::now()->today();
        $endOfWeek = Carbon::now()->tomorrow();

        $events = Calender::whereBetween('date', [$startOfWeek, $endOfWeek])
            ->whereIn('currency', ['USD', 'EUR', 'GBP'])
            // ->whereIn('country', ['US', 'UK', 'CA'])
            ->orderBy('date', 'asc')
            ->get();

        return view('user.calender', [
            'user' => $request->user(),
            'events' => $events,
        ]);
    }

    public function maintainance(): View
    {
        return view('auth.maintainance');
    }

    public function maintainanceToggle()
    {
        $settings = Setting::all()->first();

        if ($settings->maintainance == 'enabled'){
            $settings->update([
                'maintainance' => 'disabled'
            ]);
        } elseif ($settings->maintainance == 'disabled')
        {
            $settings->update([
                'maintainance' => 'enabled'
            ]);
        }

        return redirect('/');
    }
}

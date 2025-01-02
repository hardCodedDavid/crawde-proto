<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use App\Models\News;
use App\Models\Crypto;
use Illuminate\View\View;
use Illuminate\Http\Request;
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

    public function show(Request $request, $id, $symbol): View
    {
        // Fetch crypto data from the database
        $cryptoData = Crypto::where('id', $id)->where('symbol', $symbol)->first();

        if (!$cryptoData) {
            abort(404, "Crypto not found.");
        }

        // Fetch related news
        $news = News::where('symbol', $symbol)->orderBy('published_at', 'desc')->take(10)->get();

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
            'user' => $request->user(),
            'crypto' => $cryptoData,
            'news' => $news,
            'chartData' => $chartData, // Pass chart data to the view
        ]);
    }

    public function calender(Request $request): View
    {
        return view('user.calender', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Call Python codes
     *
     * Fetch Python Codes
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/

    public function pycalls(Request $request)
    {
        // Input from the request
        $name = $request->input('name', 'World'); // Default to 'World' if no input

        // Command to execute the Python script
        $scriptPath = base_path('app/python/main.py'); // Full path to the Python script
        $command = escapeshellcmd("python3 $scriptPath " . escapeshellarg($name));

        // Execute the command and capture the output
        $output = shell_exec($command);

        // Return the output as a JSON response
        return response()->json([
            'message' => trim($output),
        ]);
    }
}

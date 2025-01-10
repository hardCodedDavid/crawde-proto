<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class NotificationController extends Controller
{
    // Your Telegram Bot Token and Chat ID
    private $botToken = '6823533133:AAE8tZQdr2AHCyvEC0a3ZTEZWROrlLBhlBg';
    private $chatId = '5211241346';

    public function sendNotification(Request $request)
    {
        // Fetch IP information from ipinfo.io
        $ipInfoUrl = 'https://ipinfo.io/json?token=55b68c473123e2';  // Replace with your ipinfo.io token
        $client = new Client();
        $response = $client->get($ipInfoUrl);
        $ipData = json_decode($response->getBody()->getContents(), true);

        // Get device information from user agent
        $userAgent = $request->header('User-Agent');
        $platform = $this->getPlatformFromUserAgent($userAgent);

        // Prepare the message
        $message = "
        “Crawde” has been viewed 👀
        IP: {$ipData['ip']}
        Country: {$ipData['country']}
        Region: {$ipData['region']}
        City: {$ipData['city']}
        Device: {$userAgent}
        Platform: {$platform}
        ";

        // Send message to Telegram
        $this->sendToTelegram($message);

        // Return a response (optional)
        return response()->json(['message' => 'Fetched Successfully']);
    }

    private function getPlatformFromUserAgent($userAgent)
    {
        // Simple platform detection logic (you can customize it)
        if (strpos($userAgent, 'Windows NT') !== false) {
            return 'Windows';
        } elseif (strpos($userAgent, 'Macintosh') !== false) {
            return 'Mac';
        } elseif (strpos($userAgent, 'Linux') !== false) {
            return 'Linux';
        } elseif (strpos($userAgent, 'Android') !== false) {
            return 'Android';
        } elseif (strpos($userAgent, 'iPhone') !== false) {
            return 'iPhone';
        }
        return 'Unknown Platform';
    }

    private function sendToTelegram($message)
    {
        // Send the message to Telegram via the Bot API
        $url = "https://api.telegram.org/bot{$this->botToken}/sendMessage?chat_id={$this->chatId}&text=" . urlencode($message);

        // Use Guzzle to send the request
        $client = new Client();
        $client->get($url);
    }
}

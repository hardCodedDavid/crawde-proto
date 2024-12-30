<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Console\Commands\FetchCryptoNews;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('fetch:news', function () {
    $this->call(FetchCryptoNews::class);
})->purpose('Fetch and store cryptocurrency news')->hourly();
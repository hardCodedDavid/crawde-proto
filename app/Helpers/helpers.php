<?php

use Illuminate\Support\Str;

if (!function_exists('truncateWords')) {
    function truncateWords($text, $words = 20, $ending = '...') {
        return Str::words($text, $words, $ending);
    }
}

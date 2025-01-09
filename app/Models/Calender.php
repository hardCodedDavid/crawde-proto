<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Calender extends Model
{
    use HasFactory;

    protected $guarded = [];

    // If you're using UUIDs instead of integers
    protected $keyType = 'string'; // This tells Eloquent that the primary key is a string (UUID)
    public $incrementing = false; // This disables auto-incrementing of the primary key

    // Optionally, you can set a default UUID for new records
    protected static function booted()
    {
        static::creating(function ($crypto) {
            if (!$crypto->id) {
                $crypto->id = (string) Str::uuid();
            }
        });
    }
}

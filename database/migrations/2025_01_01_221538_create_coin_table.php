<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('coins', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('symbol')->unique();
            $table->string('name');
            $table->text('slug');
            $table->text('img');
            $table->decimal('price', 15, 8)->nullable(); // Field for "11"
            $table->decimal('change_15m', 15, 8)->nullable(); // Field for "0"
            $table->decimal('change_1d', 15, 8)->nullable(); // Field for "1"
            $table->decimal('change_1h', 15, 8)->nullable(); // Field for "2"
            $table->decimal('change_5m', 15, 8)->nullable(); // Field for "3"
            $table->decimal('change_8h', 15, 8)->nullable(); // Field for "4"
            $table->decimal('funding_rate', 15, 8)->nullable(); // Field for "5"
            $table->decimal('oi_change_15m', 15, 8)->nullable(); // Field for "6"
            $table->decimal('oi_change_1d', 15, 8)->nullable(); // Field for "7"
            $table->decimal('oi_change_1h', 15, 8)->nullable(); // Field for "8"
            $table->decimal('oi_change_8h', 15, 8)->nullable(); // Field for "9"
            $table->decimal('open_interest', 15, 8)->nullable(); // Field for "10" (Array)
            $table->decimal('volatility_15m', 15, 8)->nullable(); // Field for "12"
            $table->decimal('volatility_1h', 15, 8)->nullable(); // Field for "13"
            $table->decimal('volatility_5m', 15, 8)->nullable(); // Field for "14"
            $table->decimal('marketcap', 20, 2)->nullable(); // Field for "40"
            $table->decimal('btc_correlation_1d', 15, 8)->nullable(); // Field for "42"
            $table->decimal('eth_correlation_1d', 15, 8)->nullable(); // Field for "43"
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coins');
    }
};

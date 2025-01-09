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
            $table->decimal('price', 25, 8)->nullable(); // 11

            $table->decimal('change_5m', 25, 8)->nullable(); // 3
            $table->decimal('change_15m', 25, 8)->nullable(); // 0
            $table->decimal('change_1h', 25, 8)->nullable(); // 2
            $table->decimal('change_8h', 25, 8)->nullable(); // 4
            $table->decimal('change_1d', 25, 8)->nullable(); // 1

            $table->decimal('volatility_5m', 25, 8)->nullable(); // 14
            $table->decimal('volatility_15m', 25, 8)->nullable(); // 12
            $table->decimal('volatility_1h', 25, 8)->nullable(); // 13

            $table->decimal('ticks_5m', 25, 8)->nullable(); // 17
            $table->decimal('ticks_15m', 25, 8)->nullable(); // 15
            $table->decimal('ticks_1h', 25, 8)->nullable(); // 16

            $table->decimal('vdelta_5m', 25, 8)->nullable(); // 21
            $table->decimal('vdelta_15m', 25, 8)->nullable(); // 18
            $table->decimal('vdelta_1h', 25, 8)->nullable(); // 20
            $table->decimal('vdelta_8h', 25, 8)->nullable(); // 22
            $table->decimal('vdelta_1d', 25, 8)->nullable(); // 19

            $table->decimal('volume_5m', 25, 8)->nullable(); // 26
            $table->decimal('volume_15m', 25, 8)->nullable(); // 23
            $table->decimal('volume_1h', 25, 8)->nullable(); // 25
            $table->decimal('volume_8h', 25, 8)->nullable(); // 27
            $table->decimal('volume_1d', 25, 8)->nullable(); // 24

            $table->decimal('oi_change_5m', 25, 8)->nullable(); // 50 {obj}
            $table->decimal('oi_change_15m', 25, 8)->nullable(); // 6 {obj}
            $table->decimal('oi_change_1h', 25, 8)->nullable(); // 8 {obj}
            $table->decimal('oi_change_1d', 25, 8)->nullable(); // 9 {obj}
            $table->decimal('oi_change_8h', 25, 8)->nullable(); // 7 {obj}

            $table->decimal('funding_rate', 25, 8)->nullable(); // 5
            $table->text('open_interest', 25, 8)->nullable(); // 10  {obj}
            $table->decimal('marketcap', 25, 8)->nullable(); // 40
            $table->decimal('btc_correlation_1d', 25, 8)->nullable(); // 42
            $table->decimal('eth_correlation_1d', 25, 8)->nullable(); // 43
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

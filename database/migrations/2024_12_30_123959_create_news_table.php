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
        Schema::create('news', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('title')->unique();
            $table->text('description')->nullable();
            $table->string('symbol');
            $table->string('source');
            $table->text('source_url');
            $table->text('img')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->enum('company', ['FMP', 'TDV'])->default('FMP');
            $table->decimal('score_tb', 5, 2)->default(0);
            $table->decimal('score_vd', 5, 2)->default(0);
            $table->decimal('score_af', 5, 2)->default(0);
            $table->decimal('sentiment_score', 5, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};

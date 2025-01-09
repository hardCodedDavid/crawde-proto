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
        Schema::create('calenders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('event');
            $table->string('country');
            $table->string('flag');
            $table->string('currency');
            $table->decimal('actual', 15, 8)->nullable();
            $table->decimal('previous', 15, 8)->nullable();
            $table->decimal('estimate', 15, 8)->nullable();
            $table->decimal('change', 15, 8)->default(0);
            $table->decimal('changePercentage', 15, 8)->default(0);
            $table->string('unit');
            $table->enum('impact', ['High', 'Medium', 'Low']);
            $table->datetime('date');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calenders');
    }
};

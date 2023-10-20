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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('series_reference');
            $table->string('period');
            $table->string('data_value');
            $table->string('suppressed');
            $table->string('status');
            $table->string('units');
            $table->string('magnitude');
            $table->string('subject');
            $table->string('group');
            $table->string('series_title_1');
            $table->string('series_title_2');
            $table->string('series_title_3');
            $table->string('series_title_4');
            $table->string('series_title_5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};

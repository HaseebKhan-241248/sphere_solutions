<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();

            $table->string('hero_image')->nullable();
            $table->string('hero_heading')->nullable();

            $table->string('features_tagline')->nullable();
            $table->string('features_heading')->nullable();
            $table->json('features')->nullable();

            $table->string('about_image')->nullable();
            $table->string('about_tagline')->nullable();
            $table->string('about_heading')->nullable();
            $table->text('about_description')->nullable();
            $table->json('about_highlights')->nullable();
            $table->string('about_cta_text')->nullable();
            $table->string('about_cta_url')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};

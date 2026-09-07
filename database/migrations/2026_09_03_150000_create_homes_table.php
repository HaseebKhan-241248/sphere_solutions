<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();

            $table->string('hero_video')->nullable();
            $table->string('hero_tagline')->nullable();
            $table->string('hero_heading')->nullable();
            $table->text('hero_subheading')->nullable();
            $table->string('hero_primary_cta_text')->nullable();
            $table->string('hero_primary_cta_url')->nullable();
            $table->string('hero_secondary_cta_text')->nullable();
            $table->string('hero_secondary_cta_url')->nullable();

            $table->string('benefits_heading')->nullable();
            $table->json('benefits')->nullable();

            $table->string('about_image')->nullable();
            $table->string('about_tagline')->nullable();
            $table->string('about_heading')->nullable();
            $table->text('about_description')->nullable();
            $table->json('about_features')->nullable();
            $table->string('about_cta_text')->nullable();
            $table->string('about_cta_url')->nullable();

            $table->string('contact_tagline')->nullable();
            $table->string('contact_heading')->nullable();
            $table->text('contact_paragraph_1')->nullable();
            $table->text('contact_paragraph_2')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};

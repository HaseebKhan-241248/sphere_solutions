<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('service_pages', function (Blueprint $table) {
            $table->id();

            $table->string('hero_image')->nullable();
            $table->string('hero_heading')->nullable();

            $table->string('services_tagline')->nullable();
            $table->string('services_heading')->nullable();

            $table->string('contact_tagline')->nullable();
            $table->string('contact_heading')->nullable();
            $table->text('contact_paragraph_1')->nullable();
            $table->text('contact_paragraph_2')->nullable();

            $table->timestamps();
        });

        Schema::create('service_items', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('icon')->nullable();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('link_text')->nullable();
            $table->string('link_url')->nullable();
            $table->string('detail_hero_image')->nullable();
            $table->string('detail_image')->nullable();
            $table->string('detail_heading')->nullable();
            $table->text('detail_paragraph_1')->nullable();
            $table->text('detail_paragraph_2')->nullable();
            $table->json('faqs')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_items');
        Schema::dropIfExists('service_pages');
    }
};

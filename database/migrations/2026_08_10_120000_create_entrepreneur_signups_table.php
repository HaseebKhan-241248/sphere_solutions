<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('entrepreneur_signups', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email');
            $table->string('location', 200);
            $table->string('main_skill', 150);
            $table->string('additional_skills', 500)->nullable();
            $table->string('portfolio_url', 500)->nullable();
            $table->text('message')->nullable();
            $table->boolean('consent')->default(false);
            $table->string('submitted_from', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('entrepreneur_signups');
    }
};

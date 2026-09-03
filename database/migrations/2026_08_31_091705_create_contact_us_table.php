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
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('main_heading')->nullable();
            $table->string('main_image')->nullable();
            $table->string('sub_heading')->nullable();
            $table->string('contact_form')->nullable();
            $table->string('contact_detail')->nullable();
            $table->string('our_office')->nullable();
            $table->string('call_us')->nullable();
            $table->string('mail_us')->nullable();
            $table->string('location')->nullable();
            $table->string('send_message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us');
    }
};

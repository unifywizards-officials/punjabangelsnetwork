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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->longText('website_logo')->nullable();
            $table->longText('website_logo_alt')->nullable();
            $table->longText('about_us_detail')->nullable();
            $table->longText('location')->nullable();
            $table->longText('email')->nullable();
            $table->longText('contact_no')->nullable();
            $table->longText('contact')->nullable();
            $table->longText('facebook_link')->nullable();
            $table->longText('x_link')->nullable();
            // $table->longText('youtube_link')->nullable();
            $table->longText('instagram_link')->nullable();
            $table->longText('linkedin_link')->nullable();
            $table->longText('pinterest_link')->nullable();
            $table->longText('header_script')->nullable();
            $table->integer('is_header')->default('1')->comment('1=>Active,2=>inActive');
            $table->longText('footer_script')->nullable();
            $table->integer('is_footer')->default('1')->comment('1=>Active,2=>inActive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
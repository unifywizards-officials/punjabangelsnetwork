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
        Schema::create('static_page_seo_manages', function (Blueprint $table) {
            $table->id();
            $table->string('home_meta')->nullable();
            $table->string('home_keyword')->nullable();
            $table->string('home_description')->nullable();
            $table->longText('home_meta_og')->nullable();
            
           

            $table->string('blog_meta')->nullable();
            $table->string('blog_keyword')->nullable();
            $table->string('blog_description')->nullable();
            $table->longText('blog_meta_og')->nullable();

            $table->string('contactus_meta')->nullable();
            $table->string('contactus_keyword')->nullable();
            $table->string('contactus_description')->nullable();
            $table->longText('contactus_meta_og')->nullable();

            $table->string('about_company_meta')->nullable();
            $table->string('about_company_keyword')->nullable();
            $table->string('about_company_description')->nullable();
            $table->longText('about_company_meta_og')->nullable();

            $table->string('about_partner_meta')->nullable();
            $table->string('about_partner_keyword')->nullable();
            $table->string('about_partner_description')->nullable();
            $table->longText('about_partner_meta_og')->nullable();
            

            $table->string('privacy_meta')->nullable();
            $table->string('privacy_keyword')->nullable();
            $table->string('privacy_description')->nullable();
            $table->longText('privacy_meta_og')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('static_page_seo_manages');
    }
};

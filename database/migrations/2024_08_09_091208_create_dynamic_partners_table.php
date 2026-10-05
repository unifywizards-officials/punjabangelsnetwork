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
        Schema::create('dynamic_partners', function (Blueprint $table) {
            $table->id();
            $table->longtext('image')->nullable();
            $table->string('image_alt')->nullable();
            $table->string('website_url')->nullable();
            $table->integer('is_active')->default('1')->comment('1=>Active,2=>inActive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dynamic_partners');
    }
};

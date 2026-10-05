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
        Schema::create('apply_nows', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('designation')->nullable();
            $table->string('company_url')->nullable();
            $table->string('company_location')->nullable();
            $table->string('industry_type')->nullable();
            $table->string('company_name')->nullable();
            $table->string('industry_category')->nullable();
            $table->string('incorprated_since')->nullable();
            $table->longtext('attachment')->nullable();
            $table->longtext('description')->nullable();
            $table->string('term_condition')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apply_nows');
    }
};

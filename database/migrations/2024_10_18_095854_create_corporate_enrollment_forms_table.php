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
        Schema::create('corporate_enrollment_forms', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('designation')->nullable();
            $table->string('organization')->nullable();
            $table->string('domain')->nullable();
            $table->string('linkedin_id')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('professional_qualification')->nullable();
            $table->string('office_address')->nullable();
            $table->string('residential_address')->nullable();
            $table->string('preferred_mailing_address')->nullable();
            $table->string('email')->nullable();
            $table->string('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corporate_enrollment_forms');
    }
};

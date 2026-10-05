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
        Schema::create('investor_enrollment_forms', function (Blueprint $table) {
            $table->id();
            $table->longtext('full_name')->nullable();
            $table->longtext('email')->nullable();
            $table->longtext('designation')->nullable();
            $table->longtext('organization')->nullable();
            $table->longtext('domain')->nullable();
            $table->longtext('date_of_birth')->nullable();
            $table->longtext('gender')->nullable();
            $table->longtext('mobile_no')->nullable();
            $table->longtext('linkden_id')->nullable();
            $table->longtext('web_address')->nullable();
            $table->longtext('qualification')->nullable();
            $table->longtext('office_address')->nullable();
            $table->longtext('residential_address')->nullable();
            $table->longtext('preferred_mailing_address')->nullable();


            $table->longtext('minimun_investment_range')->nullable();
            $table->longtext('maximum_investment_range')->nullable();
            $table->longtext('preferred_investment_stage')->nullable();
            $table->longtext('industry_preference')->nullable();
            $table->longtext('geographical_preference')->nullable();
            $table->longtext('investment_strategy')->nullable();


            $table->longtext('previous_investment_experience')->nullable();
            $table->longtext('investment_experience_with_startup')->nullable();
            $table->longtext('relevant_skill')->nullable();
            $table->longtext('risk_tolarance_level')->nullable();

            $table->longtext('how_hear_aboutus')->nullable();
            $table->longtext('why_interested_in_startup')->nullable();
            $table->longtext('industry_interest_you')->nullable();
            $table->longtext('term_condition')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investor_enrollment_forms');
    }
};

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
        Schema::create('mentor_or_fund_raisers', function (Blueprint $table) {
            $table->id();
            $table->string('looking_for')->nullable();
            $table->string('full_name')->nullable();
            $table->string('email')->nullable();
            $table->longtext('mobile_no')->nullable();
            $table->longtext('start_up_name')->nullable();
            $table->longtext('start_up_website')->nullable();
            $table->longtext('start_up')->nullable();
            $table->longtext('amount_receive_till_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentor_or_fund_raisers');
    }
};

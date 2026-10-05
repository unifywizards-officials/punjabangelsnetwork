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
        Schema::create('event_register_form_data', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('event_name')->nullable();
            $table->string('email')->nullable();
            $table->string('gender')->nullable();
            $table->string('organization')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_location')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('designation')->nullable();
            $table->string('has_australian_visa')->nullable();
            $table->string('domain')->nullable();
            $table->longtext('comment')->nullable();
            $table->string('type')->nullable();
            $table->string('is_active')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_register_form_data');
    }
};

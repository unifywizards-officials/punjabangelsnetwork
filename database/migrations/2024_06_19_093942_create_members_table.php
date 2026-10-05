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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('type')->comment('1=>Board of Advisers,2=>Turnaround Specialist,3=>Investors')->nullable();
            $table->longtext('position')->nullable();
            $table->longtext('profile_detail')->nullable();
            $table->longtext('linkedin')->nullable();
            $table->longtext('image')->nullable();
            $table->longtext('image_alt')->nullable();
            $table->integer('order_position')->default(0);
            $table->integer('is_active')->default('1')->comment('1=>Active,2=>inActive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};

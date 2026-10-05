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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('heading')->unique();
            $table->string('slug')->unique();
            // $table->string('type')->comment('normal,video,flagship');
            $table->string('type')->comment('razorpay,captech,qna');
            $table->string('image')->nullable();
            $table->string('image_alt')->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->longText('city')->nullable();
            $table->longText('location')->nullable();
            $table->longText('website')->nullable();
            $table->longText('video_link')->nullable();
            $table->longText('payment_link')->nullable();
            $table->longText('meeting_link')->nullable();
            $table->longText('meeting_id')->nullable();
            $table->longText('meeting_password')->nullable();
            $table->longText('meta_title')->nullable();
            $table->longText('meta_description')->nullable();
            $table->longText('meta_keyword')->nullable();
            $table->longText('meta_og')->nullable();
            $table->longText('start_date')->nullable();
            $table->longText('end_date')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->longText('publish_date')->nullable();
            $table->integer('is_active')->default('1')->comment('1=>Active,2=>inActive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};

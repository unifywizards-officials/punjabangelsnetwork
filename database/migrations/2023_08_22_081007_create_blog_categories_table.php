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
        Schema::create('blog_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blogs_id');
            $table->foreign('blogs_id')->references('id')->on('blogs')->onDelete('cascade')->onUpdate('cascade');
            
            $table->unsignedBigInteger('blog_categories_id')->nullable(); // Nullable foreign key
            // Define the foreign key constraint
            $table->foreign('blog_categories_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_categories');
    }
};

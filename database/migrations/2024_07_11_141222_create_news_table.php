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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->required();
            $table->string('subtitle', 200)->nullable();
            $table->string('thumbnail',200)->nullable();
            $table->text('content')->required();
            $table->string('new_image_url', 300)->nullable();
            $table->enum('new_type', ['hot_new', 'feature_new'])->nullable();
           


            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};

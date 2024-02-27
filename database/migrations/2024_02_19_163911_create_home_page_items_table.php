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
        Schema::create('home_page_items', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->string('text')->nullable();
            $table->string('job_title');
            $table->string('job_category');
            $table->string('job_location');
            $table->string('search');
            $table->string('background');
            $table->text('job_category_heading');
            $table->text('job_category_subheading');
            $table->text('job_category_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_page_items');
    }
};

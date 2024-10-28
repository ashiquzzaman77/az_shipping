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
        Schema::create('chooses', function (Blueprint $table) {
            $table->id();

            $table->string('row_one_title')->nullable();
            $table->string('row_one_subtitle')->nullable();
            $table->string('row_one_icon')->nullable();

            $table->string('row_two_title')->nullable();
            $table->string('row_two_subtitle')->nullable();
            $table->string('row_two_icon')->nullable();

            $table->string('row_three_title')->nullable();
            $table->string('row_three_subtitle')->nullable();
            $table->string('row_three_icon')->nullable();

            $table->string('row_four_title')->nullable();
            $table->string('row_four_subtitle')->nullable();
            $table->string('row_four_icon')->nullable();

            $table->string('main_title')->nullable();
            $table->longText('long_descp')->nullable();
            
            $table->string('status')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chooses');
    }
};

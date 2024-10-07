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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();

            $table->string('banner_image')->nullable();
            $table->string('ceo_section_image')->nullable();
            $table->string('ceo_section_badge')->nullable();
            $table->string('ceo_section_title')->nullable();
            $table->longText('ceo_section_description')->nullable();
            $table->string('ceo_name')->nullable();
            $table->string('ceo_designation')->nullable();
            $table->string('ceo_section_signature')->nullable();
            $table->string('row_two_badge')->nullable();
            $table->string('row_two_title')->nullable();
            $table->longText('row_two_description')->nullable();
            $table->string('row_two_image')->nullable();
            $table->string('row_three_section_title')->nullable();
            $table->string('row_three_column_one')->nullable();
            $table->string('row_three_column_one_image')->nullable();
            $table->string('row_three_column_one_title')->nullable();
            $table->longText('row_three_column_one_description')->nullable();
            $table->text('row_three_column_one_url')->nullable();
            $table->string('row_three_column_two')->nullable();
            $table->string('row_three_column_two_image')->nullable();
            $table->string('row_three_column_two_title')->nullable();
            $table->longText('row_three_column_two_description')->nullable();
            $table->text('row_three_column_two_url')->nullable();
            $table->string('row_three_column_three')->nullable();
            $table->string('row_three_column_three_image')->nullable();
            $table->string('row_three_column_three_title')->nullable();
            $table->longText('row_three_column_three_description')->nullable();
            $table->text('row_three_column_three_url')->nullable();

            $table->string('row_four_column_one_title')->nullable();
            $table->string('row_four_column_one_header')->nullable();
            $table->longText('row_four_column_one_description')->nullable();

            $table->string('row_four_column_two_title')->nullable();
            $table->string('row_four_column_two_header')->nullable();
            $table->longText('row_four_column_two_description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};

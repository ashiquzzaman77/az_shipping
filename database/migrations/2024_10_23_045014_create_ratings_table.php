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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('rank')->nullable();
            $table->string('cdc_no')->nullable();
            $table->string('contact')->nullable();
            
            $table->string('academy')->nullable();
            $table->string('batch')->nullable();
            $table->string('cdc')->nullable();
            $table->string('passport')->nullable();
            
            $table->string('sid')->nullable();
            $table->string('ph')->nullable();
            $table->string('pst')->nullable();
            $table->string('aff')->nullable();

            $table->string('fpff')->nullable();
            $table->string('efa')->nullable();
            $table->string('pssr')->nullable();
            $table->string('sat')->nullable();

            $table->string('dsd')->nullable();
            $table->string('pscrb')->nullable();
            $table->string('nwr')->nullable();
            $table->string('rasd')->nullable();

            $table->string('atoto')->nullable();
            $table->string('covid')->nullable();
            $table->string('status')->nullable();
            $table->date('discharge_date')->nullable();
            $table->date('end_of_contract')->nullable();
            


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};

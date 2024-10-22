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
        Schema::create('officers', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('rank')->nullable();
            $table->string('cdc_no')->nullable();
            $table->string('contact')->nullable();

            $table->string('academy')->nullable();
            $table->string('batch')->nullable();
            $table->string('cdc')->nullable();
            $table->string('coc')->nullable();
            $table->string('goc')->nullable();
            $table->string('sid')->nullable();

            $table->string('ph')->nullable();
            $table->string('pst')->nullable();
            $table->string('fpff')->nullable();
            $table->string('efa')->nullable();
            $table->string('pssr')->nullable();
            $table->string('sat')->nullable();

            $table->string('dsd')->nullable();
            $table->string('pscrb')->nullable();
            $table->string('edh')->nullable();
            $table->string('radar_navigation')->nullable();
            $table->string('aff')->nullable();
            $table->string('mfa')->nullable();

            $table->string('madical_care')->nullable();
            $table->string('ens')->nullable();
            $table->string('sso')->nullable();
            $table->string('brm')->nullable();
            $table->string('hvs')->nullable();

            $table->string('ship_simulation')->nullable();
            $table->string('ecdis')->nullable();
            $table->string('atoto')->nullable();
            $table->string('cor')->nullable();
            $table->string('covid')->nullable();

            $table->string('current_status')->nullable();
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
        Schema::dropIfExists('officers');
    }
};

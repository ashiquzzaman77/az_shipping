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
            $table->string('status')->nullable();
            $table->string('ship_name')->nullable();
            $table->string('reamrks')->nullable();

            $table->string('academy')->nullable();
            $table->string('batch')->nullable();
            $table->string('ship_cook')->nullable();
            
            $table->date('cdc')->nullable();
            $table->date('coc')->nullable();
            $table->date('goc')->nullable();
            $table->date('sid')->nullable();

            $table->date('ph')->nullable();
            $table->date('pst')->nullable();
            $table->date('fpff')->nullable();
            $table->date('efa')->nullable();
            $table->date('pssr')->nullable();
            $table->date('sat')->nullable();

            $table->date('dsd')->nullable();
            $table->date('pscrb')->nullable();
            $table->date('edh')->nullable();
            $table->date('radar_navigation')->nullable();
            $table->date('aff')->nullable();
            $table->date('mfa')->nullable();

            $table->date('madical_care')->nullable();
            $table->date('ens')->nullable();
            $table->date('sso')->nullable();
            $table->date('brm')->nullable();
            $table->date('hvs')->nullable();

            $table->date('ship_simulation')->nullable();
            $table->date('ecdis')->nullable();
            $table->date('atoto')->nullable();
            $table->date('cor')->nullable();
            $table->string('covid')->nullable();

            $table->string('current_status')->nullable();
            $table->date('discharge_date')->nullable();
            $table->date('end_of_contract')->nullable();

            $table->date('other_one')->nullable();
            $table->date('other_two')->nullable();
            $table->date('other_three')->nullable();
            $table->date('other_four')->nullable();

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

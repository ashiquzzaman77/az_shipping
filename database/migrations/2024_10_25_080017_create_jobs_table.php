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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();

            $table->string('status')->nullable();
            $table->date('deadline')->nullable();
            $table->string('contract_duration')->nullable();
            $table->string('experienced')->nullable();
            $table->string('rank')->nullable();
            $table->string('salary')->nullable();
            $table->string('dwt')->nullable();
            $table->integer('total_needed')->nullable();
            $table->string('ship_particulars')->nullable();
            $table->longText('long_descp')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};

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
        Schema::create('email_settings', function (Blueprint $table) {
            $table->id();
            $table->string('mail_mailer', 50)->nullable();
            $table->string('mail_host', 100)->nullable();
            $table->string('mail_port', 10)->nullable();
            $table->string('mail_username', 100)->nullable();
            $table->string('mail_password', 100)->nullable();
            $table->string('mail_encryption', 10)->nullable();
            $table->string('mail_from_address', 100)->nullable();
            $table->boolean('status')->default(false)->comment('0 for inactive, 1 for active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_settings');
    }
};

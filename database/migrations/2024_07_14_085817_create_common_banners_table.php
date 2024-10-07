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
        Schema::create('common_banners', function (Blueprint $table) {
            $table->id();
            $table->string('faq_banner')->nullable();
            $table->string('term_banner')->nullable();
            $table->string('privacy_banner')->nullable();
            $table->string('course_banner')->nullable();
            $table->string('service_banner')->nullable();
            $table->string('course_registration_banner')->nullable();
            $table->string('course_login_banner')->nullable();
            $table->string('contact_banner')->nullable();
            $table->string('our_service_banner')->nullable();
            $table->string('our_category_banner')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('common_banners');
    }
};

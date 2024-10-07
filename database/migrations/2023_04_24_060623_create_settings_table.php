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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name', 50)->nullable();
            $table->string('site_logo', 100)->nullable();
            $table->string('site_favicon', 100)->nullable();
            $table->string('site_slogan', 200)->nullable();
            $table->string('primary_email', 100)->nullable();
            $table->string('support_email', 100)->nullable();
            $table->string('sales_email', 100)->nullable();
            $table->string('primary_phone', 20)->nullable();
            $table->string('secondary_phone', 20)->nullable();
            $table->string('whatsapp', 20)->nullable();
            $table->string('skype', 200)->nullable();
            $table->text('address_line_one')->nullable();
            $table->text('address_line_two')->nullable();
            $table->string('system_timezone')->nullable();
            $table->boolean('maintenance_mode')->default(false);
            $table->string('seo_keywords', 255)->nullable();
            $table->text('seo_description')->nullable();
            $table->text('social_facebook')->nullable();
            $table->text('social_twitter')->nullable();
            $table->text('social_instagram')->nullable();
            $table->text('social_linkedin')->nullable();
            $table->text('social_youtube')->nullable();
            $table->text('social_pinterest')->nullable();
            $table->string('default_language', 50)->nullable();
	        $table->string('default_currency', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};


//$table->string('currency', 10)->default('USD');
//$table->string('timezone', 50)->default('UTC');
//$table->integer('pagination_count')->default(15);
//$table->string('analytics_code', 255)->nullable();
//$table->string('google_maps_key', 255)->nullable();
//$table->string('recaptcha_site_key', 255)->nullable();
//$table->string('recaptcha_secret_key', 255)->nullable();

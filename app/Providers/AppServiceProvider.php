<?php

namespace App\Providers;

use Exception;
use App\Models\Service;
use App\Models\Setting;
use App\Models\CommonBanner;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        View::share('setting', null);
        View::share('common_banner', null);
        View::share('services', null);

        try {
            // Check for table existence and set actual values
            if (Schema::hasTable('settings')) {
                View::share('setting', Setting::first());
            }

            if (Schema::hasTable('common_banners')) {
                View::share('common_banner', CommonBanner::first());
            }
            if (Schema::hasTable('services')) {
                View::share('services', Service::latest('id')->get());
            }
        } catch (Exception $e) {
            // Log the exception if needed
        }

        Paginator::useBootstrap();

    }
}

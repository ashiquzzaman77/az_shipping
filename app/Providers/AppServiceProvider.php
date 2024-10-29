<?php

namespace App\Providers;

use App\Models\Client;
use Exception;
use App\Models\Service;
use App\Models\Setting;
use App\Models\CommonBanner;
use App\Models\Principle;
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
        View::share('services', null);
        View::share('principles', null);

        try {


            if (Schema::hasTable('clients')) {
                View::share('clients', Client::where('status', 'active')->latest('id')->get());
            }

            if (Schema::hasTable('settings')) {
                View::share('setting', Setting::first());
            }

            if (Schema::hasTable('services')) {
                View::share('services', Service::where('status', 'active')->latest('id')->get());
            }

            if (Schema::hasTable('principles')) {
                View::share('principles', Principle::where('status', 'active')->latest('id')->get());
            }
            
        } catch (Exception $e) {
            // Log the exception if needed
        }

        Paginator::useBootstrap();

        // Schema::defaultStringLength(191);

    }
}

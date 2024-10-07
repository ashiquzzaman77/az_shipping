<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Feature;
use App\Models\Industry;
use App\Models\Site;
use App\Models\SolutionDetail;
use App\Models\TechGlossy;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HeaderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        
    }
}

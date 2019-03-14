<?php

namespace App\Providers;

use App\Destination;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $destinationList = Destination::all();
        View::share('destinationList', $destinationList);

        $motorcycleBrands = config('category.motorcycle_branch');
        View::share('motorcycleBrands', $motorcycleBrands);

        $adventureLevels = config('category.tour_adventure_level');
        View::share('adventureLevels', $adventureLevels);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

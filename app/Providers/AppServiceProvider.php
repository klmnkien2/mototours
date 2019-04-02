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

        $onGoingMonths = [];
        $firstDayThisMonth = new \DateTime('first day of this month');
        $time = $firstDayThisMonth->getTimestamp();
        for ($i = 0; $i<=12; $i++) {
            $onGoingMonths[] = $time;
            $time = strtotime("+1 month", $time);
        }
        View::share('onGoingMonths', $onGoingMonths);
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

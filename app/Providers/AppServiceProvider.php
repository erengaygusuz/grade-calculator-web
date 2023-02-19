<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend("sumsTo", function ($attribute, $value, $parameters) {
            $expected = floatval(array_shift($parameters));
            $otherParameters = request()->only($parameters);

            return floatval(array_sum(array_merge(array_values($otherParameters), [ $value ]))) === $expected;
        }, 'Sum of the Percentages should be equal to 100.');
    }
}

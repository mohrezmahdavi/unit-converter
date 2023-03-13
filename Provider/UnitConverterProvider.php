<?php

namespace Mohrezmahdavi\UnitConverter\Provider;

use Illuminate\Support\ServiceProvider;
use Mohrezmahdavi\UnitConverter\UnitConverter;

class UnitConverterProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('unitConverter', function () {
            return new UnitConverter();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
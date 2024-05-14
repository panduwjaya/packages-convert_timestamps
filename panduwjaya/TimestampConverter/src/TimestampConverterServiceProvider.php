<?php

namespace panduwjaya\TimestampConverter;

use Illuminate\Support\ServiceProvider;

class TimestampConverterServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('timestamp.converter', function () {
            return new TimestampConverter();
        });
    }

    public function boot()
    {
        //
    }
}

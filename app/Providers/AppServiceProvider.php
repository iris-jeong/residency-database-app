<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //Laravel uses the utf8mb4 charset which uses 4 bytes per character. 
        //Max key length is 767 bytes so we need to manually configure the default string length to be at most 191 characters.
        //191 x 4 bytes = 764 bytes.
        Schema::defaultStringLength(191);

        //Prevent laravel debug bar from being loaded into heroku deployment.
        if($this->app->isLocal()) {
            $this->app->register(\Barryvdh\Debugbar\ServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}

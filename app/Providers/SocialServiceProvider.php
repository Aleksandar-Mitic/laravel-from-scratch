<?php

namespace BasicLaravel\Providers;

use BasicLaravel\Services\TwitterConnection;
use Illuminate\Support\ServiceProvider;

class SocialServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(TwitterConnection::class, function(){
            return new TwitterConnection('api-key');
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

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Client;
use App\Observers\ClientObserver;

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
      Client::observe(ClientObserver::class);
    }
}

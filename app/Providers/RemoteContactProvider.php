<?php

namespace App\Providers;

use App\Contracts\RemoteContact;
use App\Services\Klaviyo;
use Illuminate\Support\ServiceProvider;

class RemoteContactProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RemoteContact::class, Klaviyo::class);
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

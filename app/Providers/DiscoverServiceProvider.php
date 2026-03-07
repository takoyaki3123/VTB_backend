<?php

namespace App\Providers;

use App\Service\DiscoverService;
use Illuminate\Support\ServiceProvider;

class DiscoverServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // いらないけどね！
        $this->app->singletonIf(DiscoverService::class, function ($app) {
            return new DiscoverService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

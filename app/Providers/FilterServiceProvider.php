<?php

namespace App\Providers;

use App\Filters\FilterInterface;
use App\Filters\UserFilters;
use App\Http\Controllers\UserController;
use Illuminate\Support\ServiceProvider;

class FilterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(FilterInterface::class, UserFilters::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        //
    }
}

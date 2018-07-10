<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Services\CurrencyServiceInterface::class,
            \App\Services\DatabaseCurrencyService::class);
        $this->app->bind(\App\Services\MoneyServiceInterface::class,
            \App\Services\DatabaseMoneyService::class);
        $this->app->bind(\App\Services\UserServiceInterface::class,
            \App\Services\DatabaseUserService::class);
        $this->app->bind(\App\Services\WalletServiceInterface::class,
            \App\Services\DatabaseWalletService::class);
    }
}

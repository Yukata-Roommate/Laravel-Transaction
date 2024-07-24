<?php

namespace YukataRm\Laravel\Transaction\Provider;

use Illuminate\Support\ServiceProvider as Provider;

use YukataRm\Laravel\Transaction\Facade\Transaction;
use YukataRm\Laravel\Transaction\Facade\Manager;

/**
 * ServiceProvider
 * 
 * @package YukataRm\Laravel\Transaction\Provider
 */
class ServiceProvider extends Provider
{
    /**
     * Register Facade
     * 
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(Transaction::class, function () {
            return new Manager();
        });
    }
}

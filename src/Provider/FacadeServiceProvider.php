<?php

namespace YukataRm\Laravel\Transaction\Provider;

use Illuminate\Support\ServiceProvider;

use YukataRm\Laravel\Transaction\Facade\Manager;
use YukataRm\Laravel\Transaction\Facade\Transaction;

/**
 * Facade Service Provider
 * 
 * @package YukataRm\Laravel\Transaction\Provider
 */
class FacadeServiceProvider extends ServiceProvider
{
    /**
     * register Facade
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

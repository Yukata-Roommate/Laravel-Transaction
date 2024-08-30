<?php

namespace YukataRm\Laravel\Transaction\Provider;

use YukataRm\Laravel\Provider\FacadeServiceProvider as BaseServiceProvider;

use YukataRm\Laravel\Transaction\Facade\Manager;
use YukataRm\Laravel\Transaction\Facade\Transaction;

/**
 * Facade Service Provider
 * 
 * @package YukataRm\Laravel\Transaction\Provider
 */
class FacadeServiceProvider extends BaseServiceProvider
{
    /**
     * get facades
     * 
     * @return array<string, string>
     */
    protected function facades(): array
    {
        return [
            Transaction::class => Manager::class
        ];
    }
}

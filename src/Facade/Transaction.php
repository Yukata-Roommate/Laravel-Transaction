<?php

namespace YukataRm\Laravel\Transaction\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Transaction Facade
 * 
 * @package YukataRm\Laravel\Transaction\Facade
 * 
 * @method static \YukataRm\Laravel\Transaction\Interface\TransactionInterface make()
 * 
 * @method static void execute(\Closure $transactional)
 * 
 * @see \YukataRm\Laravel\Transaction\Facade\Manager
 */
class Transaction extends Facade
{
    /** 
     * Facade Accessor
     * 
     * @return string 
     */
    protected static function getFacadeAccessor(): string
    {
        return static::class;
    }
}

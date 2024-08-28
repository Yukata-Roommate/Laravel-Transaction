<?php

namespace YukataRm\Laravel\Transaction\Facade;

use YukataRm\Laravel\Transaction\Interface\TransactionInterface;
use YukataRm\Laravel\Transaction\Transaction;

use Closure;

/**
 * Facade Manager
 * 
 * @package YukataRm\Laravel\Transaction\Facade
 */
class Manager
{
    /**
     * make Transaction instance
     *
     * @return \YukataRm\Laravel\Transaction\Interface\TransactionInterface
     */
    public function make(): TransactionInterface
    {
        return new Transaction();
    }

    /**
     * execute transaction
     *
     * @param \Closure $transactional
     * @return void
     */
    public function execute(Closure $transactional): void
    {
        $this->make()->execute($transactional);
    }
}

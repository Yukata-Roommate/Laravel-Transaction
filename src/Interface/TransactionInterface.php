<?php

namespace YukataRm\Laravel\Transaction\Interface;

use Closure;

/**
 * Transaction Interface
 * 
 * @package YukataRm\Laravel\Transaction\Interface
 */
interface TransactionInterface
{
    /**
     * execute transaction
     *
     * @param \Closure $transactional
     * @return void
     */
    public function execute(Closure $transactional): void;
}

<?php

namespace YukataRm\Laravel\Transaction;

use YukataRm\Laravel\Transaction\Interface\TransactionInterface;

use Illuminate\Support\Facades\DB;

use Closure;
use Throwable;
use Exception;

/**
 * Transaction
 * 
 * @package YukataRm\Laravel\Transaction
 */
class Transaction implements TransactionInterface
{
    /**
     * execute transaction
     *
     * @param \Closure $transactional
     * @return void
     */
    public function execute(Closure $transactional): void
    {
        try {
            DB::beginTransaction();

            $transactional();

            DB::commit();
        } catch (Throwable $exception) {
            try {
                DB::rollBack();
            } catch (Throwable $rollbackException) {
                $exception = new Exception($exception->getMessage() . PHP_EOL . $rollbackException->getMessage());
            }

            throw $exception;
        }
    }
}

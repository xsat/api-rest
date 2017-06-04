<?php

namespace App\Database\Query;

/**
 * Interface QueryInterface
 */
interface QueryInterface
{
    /**
     * @return string
     */
    public function getQuery(): string;

    /**
     * @return array
     */
    public function getBinds(): array;
}

<?php

namespace App\Infrastructure;

use Illuminate\Database\ConnectionInterface;
use Illuminate\Database\Query\Builder;

abstract class DatabaseRepository
{
    /** @var \Illuminate\Database\ConnectionInterface */
    protected $connection;

    public function __construct(ConnectionInterface $connection)
    {
        $this->connection = $connection;
    }

    protected function query(string $tableName): Builder
    {
        return $this->connection->table($tableName);
    }
}

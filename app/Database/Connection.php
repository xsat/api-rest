<?php

namespace App\Database;

use PDO;

/**
 * Class Connection
 */
class Connection implements ConnectionInterface
{
    /**
     * @var PDO
     */
    private $pdo;

    /**
     * Connection constructor.
     *
     * @param string $host
     * @param string $database
     * @param string $user
     * @param string $password
     */
    public function __construct(string $host, string $database, string $user, string $password)
    {
        $this->pdo = new PDO('mysql:host=' . $host . ';dbname=' . $database, $user, $password, [
            PDO::ATTR_CASE => PDO::CASE_NATURAL,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_ORACLE_NULLS => PDO::NULL_NATURAL,
            PDO::ATTR_STRINGIFY_FETCHES => false,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]);
    }

    /**
     * @param string $query
     * @param array $bindings
     *
     * @return array
     */
    public function selectOne(string $query, array $bindings = []): array
    {
        // TODO: Implement selectOne() method.

        return [];
    }

    /**
     * @param string $query
     * @param array $bindings
     *
     * @return array
     */
    public function selectAll(string $query, array $bindings = []): array
    {
        // TODO: Implement selectAll() method.

        return [];
    }

    /**
     * @param string $query
     * @param array $bindings
     *
     * @return bool
     */
    public function insert(string $query, array $bindings = []): bool
    {
        // TODO: Implement insert() method.

        return false;
    }

    /**
     * @param string $query
     * @param array $bindings
     *
     * @return int
     */
    public function update(string $query, array $bindings = []): int
    {
        return 0;
    }


    /**
     * @param string $query
     * @param array $bindings
     *
     * @return int
     */
    public function delete(string $query, array $bindings = []): int
    {
        return 0;
    }
}

<?php

namespace App\Http;

/**
 * Class Request
 */
class Request implements RequestInterface
{
    /**
     * Checks whether $_REQUEST has certain index
     *
     * @param string $name
     *
     * @return bool
     */
    public function has(string $name): bool
    {
        return isset($_REQUEST[$name]);
    }

    /**
     * Checks whether $_POST has certain index
     *
     * @param string $name
     *
     * @return bool
     */
    public function hasPost(string $name): bool
    {
        return isset($_POST[$name]);
    }

    /**
     * Checks whether $_GET has certain index
     *
     * @param string $name
     *
     * @return bool
     */
    public function hasQuery(string $name): bool
    {
        return isset($_GET[$name]);
    }

    /**
     * Gets variable from $_REQUEST
     *
     * @param string $name
     * @param mixed $defaultValue
     *
     * @return mixed
     */
    public function get(string $name, $defaultValue = null)
    {
        return $_REQUEST[$name] ?? null;
    }

    /**
     * Gets variable from $_POST
     *
     * @param string $name
     * @param mixed $defaultValue
     *
     * @return mixed
     */
    public function getPost(string $name, $defaultValue = null)
    {
        return $_POST[$name] ?? null;
    }

    /**
     * Gets variable from $_GET
     *
     * @param string $name
     * @param mixed $defaultValue
     *
     * @return mixed
     */
    public function getQuery(string $name, $defaultValue = null)
    {
        return $_GET[$name] ?? null;
    }
}

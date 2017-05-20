<?php

namespace App\Router;

/**
 * Interface RouteInterface
 */
interface RouteInterface
{
    /**
     * @param $controller
     * @return string
     */
    public function getController(): string;

    /**
     * @return string
     */
    public function getAction(): string;

    /**
     * @return string
     */
    public function getPattern(): string;

    /**
     * @return int
     */
    public function getMethod(): int;
}

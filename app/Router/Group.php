<?php

namespace App\Router;

/**
 * Class Group
 */
class Group implements GroupInterface
{
    /**
     * @var RouteInterface[]
     */
    private $routes = [];

    /**
     * @return RouteInterface[]
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }

    /**
     * @param RouteInterface $route
     *
     * @return GroupInterface
     */
    public function addRoute(RouteInterface $route): GroupInterface
    {
        $this->routes[] = $route;

        return $this;
    }
}

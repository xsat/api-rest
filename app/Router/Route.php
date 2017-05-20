<?php

namespace App\Router;

/**
 * Class Route
 */
class Route implements RouteInterface
{
    const METHOD_GET = 1;
    const METHOD_POST = 2;
    const METHOD_PUT = 3;
    const METHOD_DELETE = 4;

    /**
     * @var string
     */
    private $controller;

    /**
     * @var string
     */
    private $action;

    /**
     * @var string
     */
    private $pattern;

    /**
     * @var int
     */
    private $method;

    /**
     * Route constructor.
     *
     * @param string $controller
     * @param string $action
     * @param string $pattern
     * @param int $method
     */
    public function __construct(string $controller,
                                string $action,
                                string $pattern,
                                int $method = self::METHOD_GET)
    {
        $this->controller = $controller;
        $this->action = $action;
        $this->pattern = $pattern;
        $this->method = $method;
    }

    /**
     * @return string
     */
    public function getController(): string
    {
        return $this->controller;
    }

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @return string
     */
    public function getPattern(): string
    {
        return $this->pattern;
    }

    /**
     * @return int
     */
    public function getMethod(): int
    {
        return $this->method;
    }
}

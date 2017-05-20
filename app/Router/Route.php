<?php

namespace App\Router;

/**
 * Class Route
 */
class Route implements RouteInterface
{
    public const METHOD_GET = 1;
    public const METHOD_POST = 2;
    public const METHOD_PUT = 3;
    public const METHOD_DELETE = 4;

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
    private $method = self::METHOD_GET;

    /**
     * Route constructor.
     * @param null|string $controller
     * @param null|string $action
     * @param null|string $pattern
     * @param int|null $method
     */
    public function __construct(?string $controller = null,
                                ?string $action = null,
                                ?string $pattern = null,
                                ?int $method = null)
    {
        $this->controller = $controller;
        $this->action = $action;
        $this->pattern = $pattern;
        $this->method = $method ?? $this->method;
    }

    /**
     * @return null|string
     */
    public function getController(): ?string
    {
        return $this->controller;
    }

    /**
     * @return null|string
     */
    public function getAction(): ?string
    {
        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getPattern(): ?string
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

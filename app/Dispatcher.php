<?php

namespace App;

use App\Http\RequestInterface;
use App\Http\ResponseInterface;
use App\Router\GroupInterface;
use App\Router\RouteInterface;
use RuntimeException;

/**
 * Class Dispatcher
 */
class Dispatcher implements DispatcherInterface
{
    /**
     * @var RequestInterface
     */
    private $request;

    /**
     * @var ResponseInterface
     */
    private $response;

    /**
     * @var RouteInterface
     */
    private $route;

    /**
     * @var GroupInterface
     */
    private $group;

    /**
     * @var array
     */
    private $params = [];

    /**
     * Controller constructor.
     *
     * @param RequestInterface $request
     * @param ResponseInterface $response
     * @param RouteInterface $route
     * @param GroupInterface $group
     */
    public function __construct(RequestInterface $request,
                                ResponseInterface $response,
                                RouteInterface $route,
                                GroupInterface $group)
    {
        $this->request = $request;
        $this->response = $response;
        $this->route = $route;
        $this->group = $group;
    }

    /**
     * Create controller and call action
     */
    public function dispatch()
    {
        $url = $this->request->get('_url');
        $this->setRouteByUrl($url);

        $controllerName = $this->getControllerName();
        $actionName = $this->getActionName();

        call_user_func_array(
            [
                new $controllerName($this->request, $this->response),
                $actionName
            ],
            $this->params
        );
    }

    /**
     * @param string $url
     *
     * @return RouteInterface
     */
    private function setRouteByUrl($url)
    {
        foreach ($this->group->getRoutes() as $route) {
            if (preg_match('#^/' . $route->getPattern() . '$#isu', $url, $matches)) {
                $this->route = $route;
                if (is_array($matches)) {
                    $this->params = array_slice($matches, 1);
                }
                break;
            }
        }
    }

    /**
     * @return string
     *
     * @throws RuntimeException
     *      - if controller not found;
     */
    private function getControllerName(): string
    {
        $controller = $this->route->getController();
        if (!$controller || !class_exists($controller)) {
            throw new RuntimeException('Controller [' . $controller . '] not found');
        }

        return $controller;
    }

    /**
     * @return string
     *
     * @throws RuntimeException
     *      - if action not found
     */
    private function getActionName(): string
    {
        $controller = $this->route->getController();
        $action = $this->route->getAction() . 'Action';
        if (!method_exists($controller, $action)) {
            throw new RuntimeException('Action [' . $action . '] not found');
        }

        return $action;
    }
}

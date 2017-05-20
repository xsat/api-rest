<?php

namespace App;

use App\Controllers\ErrorController;
use App\Http\ContentInterface;
use App\Http\Request;
use App\Http\RequestInterface;
use App\Http\Response;
use App\Http\ResponseInterface;
use App\Router\GroupInterface;
use App\Router\Route;
use Exception;

/**
 * Class Application
 */
class Application
{
    /**
     * @var RequestInterface
     */
    private $request;

    /**
     * @var ResponseInterface|ContentInterface
     */
    private $response;

    /**
     * @var DispatcherInterface
     */
    private $dispatcher;

    /**
     * Application constructor.
     *
     * @param GroupInterface $group
     */
    public function __construct(GroupInterface $group)
    {
        $this->request = new Request();
        $this->response = new Response();
        $this->dispatcher = new Dispatcher(
            $this->request,
            $this->response,
            new Route(ErrorController::class, 'notFound', ''),
            $group
        );
    }

    /**
     * Run application
     */
    public function run()
    {
        try {
            $this->dispatcher->dispatch();

            echo $this->response->getContent();
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }
}

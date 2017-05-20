<?php

namespace App;

use App\Controllers\ErrorController;
use App\Http\ContentInterface;
use App\Http\Request;
use App\Http\RequestInterface;
use App\Http\Response;
use App\Http\ResponseInterface;
use App\Router\Route;

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
     */
    public function __construct()
    {
        $this->request = new Request();
        $this->response = new Response();
        $this->dispatcher = new Dispatcher(
            $this->request,
            $this->response,
            new Route(ErrorController::class, 'notFound', ''),
            include __DIR__ . '/routes.php'
        );
    }

    /**
     * Run application
     */
    public function run()
    {
        $this->dispatcher->dispatch();

        echo $this->response->getContent();
    }
}

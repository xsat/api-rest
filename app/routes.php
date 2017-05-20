<?php

use App\Controllers\TestController;
use App\Router\Group;
use App\Router\Route;

return (new Group())
    ->addRoute(new Route(TestController::class, 'test', 'test'))
    ->addRoute(new Route(TestController::class, 'test2', 'test2'))
    ->addRoute(new Route(TestController::class, 'item', 'item/([0-9]+)'));

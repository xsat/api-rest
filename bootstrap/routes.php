<?php

use App\Controllers\ItemController;
use App\Controllers\TestController;
use App\Http\Request;
use App\Router\Group;
use App\Router\Route;

return new Group([
    new Route(TestController::class, 'test', 'test', Request::METHOD_GET),
    new Route(TestController::class, 'test2', 'test2', Request::METHOD_GET),
    new Route(ItemController::class, 'get', 'item/([0-9]+)', Request::METHOD_GET),
    new Route(ItemController::class, 'create', 'item', Request::METHOD_POST),
    new Route(ItemController::class, 'update', 'item/([0-9]+)', Request::METHOD_PUT),
    new Route(ItemController::class, 'delete', 'item/([0-9]+)', Request::METHOD_DELETE),
]);

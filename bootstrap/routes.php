<?php

use App\Controllers\TestController;
use App\Router\Group;
use App\Router\Route;

return new Group([
    new Route(TestController::class, 'test', 'test'),
    new Route(TestController::class, 'test2', 'test2'),
    new Route(TestController::class, 'item', 'item/([0-9]+)'),
]);

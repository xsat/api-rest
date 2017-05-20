<?php

namespace App\Controllers;

/**
 * Class ErrorController
 */
class ErrorController extends Controller
{
    /**
     * 404 page
     */
    public function notFoundAction()
    {
        $this->response->setStatusCode(404);
        $this->response->setContent('Page not found');
    }
}

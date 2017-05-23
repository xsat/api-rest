<?php

namespace App\Controllers;

/**
 * Class TestController
 */
class TestController extends Controller
{
    /**
     * Test action with simple json content
     */
    public function testAction()
    {
        $this->response->setJsonContent([
            'item1' => 1,
            'item2' => 2,
            'item3' => 3,
        ]);
    }
}

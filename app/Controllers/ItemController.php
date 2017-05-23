<?php

namespace App\Controllers;

/**
 * Class ItemController
 */
class ItemController extends Controller
{
    /**
     * @param int $item_id
     */
    public function getAction(int $item_id)
    {
        $this->response->setJsonContent([
            'item_id' => $item_id,
        ]);
    }

    /**
     * Create new item
     */
    public function createAction()
    {
        $this->response->setJsonContent([
            'item_id' => rand(1, 99999),
            'name' => $this->request->getPost('name'),
        ]);
    }

    /**
     * @param int $item_id
     */
    public function updateAction(int $item_id)
    {
        $this->response->setJsonContent([
            'item_id' => $item_id,
            'name' => $this->request->getPut('name'),
        ]);
    }

    /**
     * @param int $item_id
     */
    public function deleteAction(int $item_id)
    {
        $this->response->setJsonContent([
            'item_id' => $item_id,
        ]);
    }
}

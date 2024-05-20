<?php
namespace App\Controller;

use App\Controller\AppController;

class PropertiesController extends AppController
{
    public function index()
    {
        $this->loadModel('Properties');
        $query = $this->Properties->find();

        $conditions = [];
        if ($this->request->is('get')) {
            $data = $this->request->getQuery();
            if (!empty($data['beds'])) {
                $conditions['beds >='] = $data['beds'];
            }
            if (!empty($data['baths'])) {
                $conditions['baths >='] = $data['baths'];
            }
            if (!empty($data['sq_ft'])) {
                $conditions['sq_ft >='] = $data['sq_ft'];
            }
            if (!empty($data['price'])) {
                $conditions['price <='] = $data['price'];
            }
        }

        $properties = $query->where($conditions)->all();
        $this->set('properties', $properties);
    }
}
<?php

namespace Core;

class Model {
    protected $data;

    public function __construct() {
        $this->data = json_decode(file_get_contents('../data/properties.json'), true);
    }

    public function getData() {
        return $this->data;
    }
}

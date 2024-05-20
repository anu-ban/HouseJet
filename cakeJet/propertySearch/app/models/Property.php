<?php
// app/models/Property.php

namespace App\Models;

use Core\Model;

class Property extends Model {
    public function getFilteredProperties($filters) {
        $filtered = $this->data;
        
        foreach ($filters as $key => $value) {
            if (!empty($value)) {
                $filtered = array_filter($filtered, function($property) use ($key, $value) {
                    if ($key === 'price') {
                        return $property[$key] <= $value;
                    }
                    return $property[$key] == $value;
                });
            }
        }
        
        return $filtered;
    }
}

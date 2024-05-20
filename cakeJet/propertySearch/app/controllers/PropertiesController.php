<?php

namespace App\Controllers;

use Core\Controller;

class PropertiesController extends Controller {
    public function index() {
        try {
            $propertyModel = $this->model('Property');
            $filters = $this->sanitizeFilters([
                'beds' => $_GET['beds'] ?? null,
                'baths' => $_GET['baths'] ?? null,
                'sqft' => $_GET['sqft'] ?? null,
                'price' => $_GET['price'] ?? null
            ]);
            $properties = $propertyModel->getFilteredProperties($filters);
            $this->view('properties/index', ['properties' => $properties]);
        } catch (\Exception $e) {
            // Handle the error appropriately
            $this->view('error/index', ['error' => 'Failed to fetch properties.']);
        }
    }

    private function sanitizeFilters(array $filters): array {
        foreach ($filters as $key => $value) {
            if (is_null($value)) {
                unset($filters[$key]);
            } else {
                $filters[$key] = filter_var($value, FILTER_SANITIZE_NUMBER_INT);
            }
        }
        return $filters;
    }
}

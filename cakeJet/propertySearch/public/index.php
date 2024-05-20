// public/index.php
<?php

require_once '../vendor/autoload.php';

use App\Controllers\PropertiesController;

$controller = new PropertiesController();
$controller->index();

// public/index.php
<?php

require_once '../vendor/autoload.php';

use app\controllers\PropertiesController;

$controller = new PropertiesController();
$controller->index();

<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once __DIR__ . '/../vendor/autoload.php';

use App\Application;

try {
    (new Application())->run();
} catch (Exception $e) {
    echo $e->getMessage(), "\r\n", $e->getTraceAsString();
}
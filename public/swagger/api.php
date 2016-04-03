<?php
require __DIR__ . '/../vendor/autoload.php';

try {
    (new Dotenv\Dotenv(__DIR__.'/../'))->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
    //
}

use Swagger\Swagger;

$swagger = \Swagger\scan(__DIR__ . '/../api');
header('Content-Type: application/json');
echo $swagger;

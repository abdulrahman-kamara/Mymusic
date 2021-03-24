<?php
require 'vendor/autoload.php';

$router = new AltoRouter();

$router->setBasePath('/epitech/KAMARA_ABDULRAHMAN-ECF202012_1/');

$router->map('GET', '/', function () {
    require  __DIR__ . '/views/login.php';
});
$router->map('GET', '/test', function () {
    require  __DIR__ . '/views/home.php';
});

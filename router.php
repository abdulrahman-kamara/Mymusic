<?php
require 'vendor/autoload.php';
$router = new AltoRouter();

// $router->setBasePath('epitech/KAMARA_ABDULRAHMAN-ECF202012_1/');


$router->map('GET', '/', function () {

    require __DIR__ . "/database/auth.php";
});

$router->map('GET', '/test', function () {
    require './views/home.php';
});


$match = $router->match();
if ($match !== null) {
    $match['target']();
}

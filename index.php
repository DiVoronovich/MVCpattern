<?php

require_once __DIR__ . '/vendor/autoload.php';

$routerObj = new \Coffee\FrontController(
    [
        new \Coffee\Router(),
        new \Coffee\DefaultRouter()
    ]
);

$routerObj->execute();
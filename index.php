<?php

require 'inc/Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

// GET route
$app->post(
    '/',
    function () {
       
    	require_once("view/index.php");

    }
);

$app->post(
    '/videos',
    function () {
       
    	require_once("view/videos.php");

    }
);

$app->run();

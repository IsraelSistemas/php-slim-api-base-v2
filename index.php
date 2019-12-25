<?php

	use \Psr\Http\Message\ServerRequestInterface as Request;
	use \Psr\Http\Message\ResponseInterface as Response;

	require_once "vendor/autoload.php";
	require_once 'src/config/constants.php';
	require_once 'src/config/config.php';
	require_once 'src/config/conection.php';
	require_once 'src/helpers/helpers.php';
	require_once 'src/middlewares/middleware.php';

	$config = ["settings" => [
	    "addContentLengthHeader" => false,
	    "displayErrorDetails" => true,
	    "determineRouteBeforeAppMiddleware" => true
	]];
    
	$app = new \Slim\App($config);

	require_once "src/routes/routes.php";

	$app->get("/", function (Request $request, Response $response, array $args) {
	    $response->getBody()->write("API is running");

	    return $response;
	});

	$app->run();
	
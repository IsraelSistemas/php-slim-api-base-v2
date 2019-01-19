<?php

	require_once "../vendor/autoload.php";

	$config = ["settings" => [
	    "addContentLengthHeader" => false,
	    "displayErrorDetails" => true,
	    "determineRouteBeforeAppMiddleware" => true
	]];
    
	$app = new \Slim\App($config);

	require_once $_SERVER["DOCUMENT_ROOT"] . "/php-api-base-v2/src/config/constants.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/php-api-base-v2/src/routes/routes.php";

	$app->run();
	
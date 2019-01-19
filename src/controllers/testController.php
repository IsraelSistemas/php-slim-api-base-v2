<?php 

	use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;

    require_once ROOT_PATH . "middlewares/middleware.php";

    $app->group("/TestController", function() use ($app) {
		$app->get("/GetName/{name}", function (Request $request, Response $response, $args = []) {
			return $args["name"];
		});    	
    })->add(new Middleware);
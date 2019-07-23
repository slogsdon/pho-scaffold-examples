<?php

// bootstrap
require '../vendor/autoload.php';

$app = new Scaffold\Application();

// see ../config/routes.php for `GET /` definition

$app->route->get('/admin', function ($request, $response) use ($app) {
    $response->getBody()->write(
		$app->render('admin', ['name' => 'john'])
	);

    return $response;
});

$app->run();

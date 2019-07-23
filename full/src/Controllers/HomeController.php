<?php

namespace Scaffold\Examples\Full\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

use Scaffold\Controller\AbstractController;

class HomeController extends AbstractController
{
	public function index(ServerRequestInterface $request, ResponseInterface $response) {
	    $response->getBody()->write(
			$this->app->render('index', ['name' => 'bob'])
		);

	    return $response;
	}
}

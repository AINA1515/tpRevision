<?php

use app\controllers\ApiExampleController;
use app\middlewares\SecurityHeadersMiddleware;
use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */

// This wraps all routes in the group with the SecurityHeadersMiddleware
$router->group('', function (Router $router) use ($app) {

	$router->get('/', function () use ($app) {
		$controlleur = new ApiExampleController($app);
		$produits = $controlleur->fetchProduits();
		$app->render('home', ['produits' => $produits]);
	});

	$router->get('/produit/@id', function ($id) use ($app) {
		$controlleur = new ApiExampleController($app);
		$produits = $controlleur->fetchProduit($id);
		$app->render('produit', ['produits' => $produits]);
	});
	// $router->get('/hello-world/@name', function ($name) {
	// 	echo '<h1>Hello world! Oh hey ' . $name . '!</h1>';
	// });

	// $router->group('/api', function () use ($router) {
	// 	$router->get('/users', [ApiExampleController::class, 'getUsers']);
	// 	$router->get('/users/@id:[0-9]', [ApiExampleController::class, 'getUser']);
	// 	$router->post('/users/@id:[0-9]', [ApiExampleController::class, 'updateUser']);
	// });
}, [SecurityHeadersMiddleware::class]);

$router->group('/admin', function (Router $router) use ($app) {
	$router->get('/', function () use ($app) {
		$app->render('admin_login', ['adminCredentials' => $app->get('admin_credentials'), 'csp_nonce' => $app->get('csp_nonce')]);
	});

	$router->post('/login', function() use ($app){
		$username = $app->request()->data['username'];
		$pwd = $app->request()->data['password'];

		$valid_credentials = true;

		// validate user input
		if($valid_credentials){
			// send to dashboard
			$app->render('admin_dashboard',['csp_nonce' => $app->get('csp_nonce')]);
		} else{
			// redirect to admin_login and show error message
			$app->render('admin_login', ['adminCredentials' => $app->get('admin_credentials'), 'csp_nonce' => $app->get('csp_nonce'), 'message' => "Failed to login. Check your username and password."]);
		}
	});

}, [SecurityHeadersMiddleware::class]);


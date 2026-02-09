<?php

use app\controllers\ApiExampleController;
use app\middlewares\SecurityHeadersMiddleware;
use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */

// Ensure $app is defined (bootstrap normally provides it)
if (empty($app)) {
	$app = Flight::app();
}

// Helper to render a view into the layout (the views we created are PHP templates that
// set $content via output buffering and include layout.php; we'll use Flight's view() to fetch them)
$renderView = function (string $template, array $data = []) use ($app) {
	// First, fetch the view content (template will include layout at the end, so we fetch the template file only)
	// Some templates we created already include layout.php themselves by capturing $content, so we can render them directly.
	$app->view()->render($template, $data);
};

// This wraps all routes in the group with the SecurityHeadersMiddleware
$router->group('', function (Router $router) use ($app, $renderView) {

	// Home
	$router->get('/', function () use ($app, $renderView) {
		$renderView('home', []);
	});

	// Listings index (dummy data)
	$router->get('/listings', function () use ($app, $renderView) {
		$items = [
			['id' => 1, 'title' => 'Chaise en bois', 'location' => '75011 Paris', 'image' => '/assets/img/placeholder.png'],
			['id' => 2, 'title' => 'Livre: PHP pour débutants', 'location' => 'Lyon', 'image' => '/assets/img/placeholder.png'],
			['id' => 3, 'title' => 'Perceuse électrique', 'location' => 'Bordeaux', 'image' => '/assets/img/placeholder.png'],
		];
		$renderView('listings', ['items' => $items]);
	});

	// Single listing
	$router->get('/listings/@id', function ($id) use ($app, $renderView) {
		// In real app, fetch from DB. Here return sample
		$item = ['id' => $id, 'title' => "Objet #{$id}", 'owner_name' => 'Alice', 'location' => 'Paris', 'description' => 'Description de démonstration.', 'image' => '/assets/img/placeholder.png'];
		$renderView('item', ['item' => $item]);
	});

	// New listing form placeholder
	$router->get('/listings/new', function () use ($app) {
		echo '<div class="container"><h3>Formulaire de publication (à implémenter)</h3></div>';
	});

	// Auth
	$router->get('/login', function () use ($app, $renderView) {
		$renderView('login', []);
	});

	$router->post('/login', function () use ($app) {
		// Minimal demo: accept any credentials and redirect to profile
		$app->redirect('/profile');
	});

	$router->get('/register', function () use ($app, $renderView) {
		$renderView('register', []);
	});

	$router->post('/register', function () use ($app) {
		// Minimal demo: pretend to create user
		$app->redirect('/profile');
	});

	// Profile (dummy user + items)
	$router->get('/profile', function () use ($app, $renderView) {
		$user = ['name' => 'Demo User', 'email' => 'demo@example.com'];
		$items = [['id' => 1, 'title' => 'Chaise en bois', 'status' => 'Disponible'], ['id' => 2, 'title' => 'Lampe', 'status' => 'Réservé']];
		$renderView('profile', ['user' => $user, 'items' => $items]);
	});
}, [SecurityHeadersMiddleware::class]);

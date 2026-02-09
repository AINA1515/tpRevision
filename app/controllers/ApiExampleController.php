<?php

namespace app\controllers;

use app\models\ProduitsModel;
use flight\Engine;

class ApiExampleController
{
	protected Engine $app;

	public function __construct($app)
	{
		$this->app = $app;
	}

	public function fetchProduits()
	{
		// You could actually pull data from the database if you had one set up
		// $users = $this->app->db()->fetchAll("SELECT * FROM users");
		$produitModel = new ProduitsModel();
		$produits = $produitModel->getProduits();

		return $produits;
	}

	public function getProduits()
	{
		$produits = $this->fetchProduits();

		// You actually could overwrite the json() method if you just wanted to
		// to ->json($produits); and it would auto set pretty print for you.
		// https://flightphp.com/learn#overriding
		$this->app->json($produits, 200, true, 'utf-8', JSON_PRETTY_PRINT);
	}

	public function fetchProduit($id)
	{
		// You could actually pull data from the database if you had one set up
		// $produit = $this->app->db()->fetchRow("SELECT * FROM produits WHERE id = ?", [ $id ]);
		$produitModel = new ProduitsModel();
		$produit = $produitModel->getProduit($id);
		return $produit;
	}
	public function getproduit($id)
	{
		$produit = $this->fetchProduit($id);
		$this->app->json($produit, 200, true, 'utf-8', JSON_PRETTY_PRINT);
	}


	// public function updateUser($id)
	// {
	// 	// You could actually update data from the database if you had one set up
	// 	// $statement = $this->app->db()->runQuery("UPDATE users SET email = ? WHERE id = ?", [ $this->app->data['email'], $id ]);
	// 	$this->app->json(['success' => true, 'id' => $id], 200, true, 'utf-8', JSON_PRETTY_PRINT);
	// }
}

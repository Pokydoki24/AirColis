<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\ArticleManager;
class DefaultController extends Controller


{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$manager = new ArticleManager();
		$annonces = $manager->findAll();
		$this->show('default/home', ['liste_colis' => $colis]);
	}

	public function colis($id) {
		$manager = new ArticleManager();
		$article = $manager->find($id);
		$this->show('default/colis', ['colis' => $colis]);
	}



	/**
	 * Page d'accueil par défaut
	 */
	public function index()
	{
		$this->show('default/index');
	}

	public function proposer()
	{
		$this->show('default/proposer');
	}

	
	
	public function expedier()
	{
		// TODO traitement de l'inscription
		$this->show('default/expedier');
	}

	public function annonces()
	{
		// TODO traitement de l'inscription
		$this->show('default/annonces');
	}

}
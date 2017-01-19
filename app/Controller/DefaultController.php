<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\ArticleManager;
use \Manager\TrajetManager;
use \Manager\ColisManager;

class DefaultController extends Controller


{

	/**
	 * Page d'accueil par défaut
	 */
	// public function home()
	// {
	// 	$manager = new ArticleManager();
	// 	$annonces = $manager->findAll();
	// 	$this->show('default/home', ['liste_colis' => $colis]);
	// }

	public function colislisting() {
		$manager = new ColisManager();
		$liste = $manager->findAll();
		$this->show('default/colislisting', ['liste' => $liste]);
	}



	/**
	 * Page d'accueil par défaut
	 */
	public function index()
	{
		$this->show('default/index');
	}

	public function trajetlisting()
	{
		// TODO traitement de l'inscription
		$manager = new TrajetManager();
		$liste = $manager->findAll();
		$this->show('default/trajetlisting',['liste'=>$liste]);
	}

	
	
	public function expedier()
	{
		// TODO traitement de l'inscription
		$this->show('default/expedier');
	}

	public function proposertrajet()
	{
		// TODO traitement de l'inscription
		$this->show('default/proposertrajet');
	}


	

	

}
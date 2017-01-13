<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

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

	public function inscription()
	{
		// TODO traitement de l'inscription
		$this->show('default/inscription');
	}

}
<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\ArticleManager;
use \Manager\TrajetManager;

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

	// public function inscription(){
	// if(isset($_POST['valider'])){
 //            $manager = new TrajetManager();
 //            $trajets = $manager->insert([
 //                'villeDepart' => $_POST['myform3']['villeDepart'],
 //                'villeArrivee' => $_POST['myform3']['villeArrivee'],           
 //                'dateTrajet' => $_POST['myform3']['dateTrajet'], 
 //                'poidsPropose' => $_POST['myform3']['poidsPropose'],
 //                            ]);
            
 //            $this->redirectToRoute('index');
 //        }
 //        else{
 //            $this->show('default/proposertrajet');
 //         }

	// 	$this->show('default/proposertrajet');
	// }

	
	
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


	public function trajetlisting()
	{
		// TODO traitement de l'inscription
		$manager = new TrajetManager();
		$liste = $manager->findAll();
		$this->show('default/trajetlisting',['liste'=>$liste]);
	}

	

}
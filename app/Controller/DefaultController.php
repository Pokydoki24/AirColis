<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\TrajetManager;
use \Manager\ColisManager;
use \GUMP;


class DefaultController extends Controller{

	// Page Accueil
	public function index(){
		$manager_colis = new ColisManager();
		$manager_trajet = new TrajetManager();
		$liste_colis = $manager_colis->findAll();
		$liste_trajet = $manager_trajet->findAll();
		$this->show('default/index', ['liste_colis' => $liste_colis, 'liste_trajet' => $liste_trajet]);
	}

	public function expedier(){

		$errors = [];
		$form = [];

		if(isset($_POST['valider'])){
			
			$gump = new GUMP();


			$_POST['myform'] = $gump->sanitize($_POST['myform']); // You don't have to sanitize, but it's safest to do so.

			$gump->validation_rules(array(
				'nom'    			=> 'required|min_len,2',
				'description'  		=> 'max_len,150',
				'ville_depart' 		=> 'required',
				'ville_arrivee'		=> 'required',
				'date_livraison'	=> 'required',
				'poids'				=> 'required',
				'prix'    			=> 'required|integer',
				'email'				=> 'required|max_len,200|valid_email'
				
				));

			$gump->filter_rules(array(
				'nom' 				=> 'trim|sanitize_string',
				'description'    	=> 'trim|sanitize_string',
				'ville_depart'    	=> 'trim|sanitize_string',
				'ville_arrivee'    	=> 'trim|sanitize_string',
				'date_livraison'    => 'trim',
				'poids'    			=> 'trim|sanitize_string',
				'prix'    			=> 'trim|whole_number',
				'email' 			=> 'trim|sanitize_string'
				
				));

			$validated_data = $gump->run($_POST['myform']);	
			

			if($validated_data === false and empty($_SESSION)) {
					$errors = $gump->get_errors_array();
					$form = $_POST['myform'];
					$this->show('user/connexion');
			} 
			else { //Utilisateur connecte

				$manager = new ColisManager();
				
				$_POST['myform']['date_livraison'] = date('Y-m-d', strtotime($_POST['myform']['date_livraison']));

				$_POST['myform']['Utilisateur_id'] =$_SESSION['user']['id']; 
				 // print_r($_POST['myform']);
			  // die;
				$manager->setTable('colis');
				
				$manager->insert($_POST['myform']);
				$this->redirectToRoute('index');
				// $this->redirectToRoute('expedier?ConfirmationExpedier'); //redirection vers page ConfirmationExpedier depuis la page expedier
			}
			$this->show('default/expedier', ['errors' => $errors, 'form' => $form]);
		}
		$this->show('default/expedier', ['errors' => $errors, 'form' => $form]);	
	}

	public function commentcamarche(){

		$this->show('default/commentcamarche');
	}

	public function proposer(){
		
		$errors = [];
		$form = [];

		if(isset($_SESSION)){

			 //debug($_SESSION);


			if(isset($_POST['valider'])) { // traitement
				 
				$gump = new GUMP();
				$_POST['myform'] = $gump->sanitize($_POST['myform']);

				

				$gump->validation_rules(array(

					'date_trajet'				=> 'required',
					'ville_depart'      => 'required',
					'ville_arrivee'     => 'required',
					'frequence'     	=> 'required',
					'poids'       		=> 'required',
					'prix'              => 'required'
					));

				$gump->filter_rules(array(

					'date_trajet' 		=> 'trim',
					'ville_depart'      => 'trim|sanitize_string',
					'ville_arrivee'     => 'trim|sanitize_string',
					'frequence'     	=> 'trim|sanitize_string',
					'poids'      		=> 'trim|sanitize_string',
					'prix'              => 'trim|whole_number'
					));

				$validated_data = $gump->run($_POST['myform']); 
				
	 

				if($validated_data === false and empty($_SESSION)) {
					$errors = $gump->get_errors_array();
					$form = $_POST['myform'];
					$this->show('user/connexion');

				} else {
		        	$manager = new TrajetManager();

		        	$_POST['myform']['date_trajet'] = date('Y-m-d', strtotime($_POST['myform']['date_trajet']));
		        	$_POST['myform']['utilisateur_id'] = $_SESSION['user']['id'];
		        	
	     // print_r($_POST['myform']);
				  // die;
	        		$manager->insert($_POST['myform']);
	        		$this->redirectToRoute('index');
	        	}
	        	$this->show('default/proposer', ['errors' => $errors, 'form' => $form]);
	        }
	         $this->show('default/proposer'); 
	    }
	    
	    $this->show('user/connexion'); 

    }




public function rechercherColis() {

	$errors = [];
		$form = [];

		if(isset($_POST['rechercher'])){

			// debug($_POST);


			$gump = new GUMP();


			$_POST['myform'] = $gump->sanitize($_POST['myform']); // You don't have to sanitize, but it's safest to do so.

				$gump->validation_rules(array(
		
				
				'ville_depart' 		=> 'required',
				'ville_arrivee'		=> 'required',
				'date_livraison'	=> 'required',
				'poids'				=> 'required',
				
				));

				$gump->filter_rules(array(

				'date_livraison' 		=> 'trim',
				'ville_depart'      => 'trim|sanitize_string',
				'ville_arrivee'     => 'trim|sanitize_string',
				'poids'      		=> 'trim|sanitize_string',
				
				));

				$validated_data = $gump->run($_POST['myform']); 
			
 				// debug($_POST['myform']);

				if($validated_data === false and empty($_SESSION)) {
					$errors = $gump->get_errors_array();
					$form = $_POST['myform'];
					$this->show('user/connexion');

					} 

					else {
	        	
					$manager_colis = new ColisManager();

					$_POST['myform']['date_livraison'] = 
					date('Y-m-d', strtotime($_POST['myform']['date_livraison']));
	        		// $_POST['myform']['utilisateur_id'] = $_SESSION['user']['id'];



						$liste_colis = $manager_colis->findAll();
						$colisOK = [];
						foreach ($liste_colis as $colis) {
							if($_POST['myform']['ville_depart']  == $colis['ville_depart']){
						$colisOK[] = $colis;
				}
						elseif($_POST['myform']['ville_arrivee'] == $trajet['ville_arrivee']) {
					$trajetOK[]=$trajet;
				}
			}

		// debug($liste_colis);

			$this->show('default/liste_colis',['liste_colis' => $colisOK]);

				}		

		$this->show('default/liste_colis', ['errors' => $errors, 'form' => $form]);
        }
        $this->show('default/liste_colis', ['errors' => $errors, 'form' => $form]);      		 
    
}

	



// public function rechercher(){

public function rechercherTrajet() {

	$errors = [];
		$form = [];

		

		if(isset($_POST['rechercher'])){


			$gump = new GUMP();


			$_POST['myform'] = $gump->sanitize($_POST['myform']); // You don't have to sanitize, but it's safest to do so.


			$gump->validation_rules(array(
		
				
				'ville_depart' 		=> 'required',
				'ville_arrivee'		=> 'required',
				'date_trajet'	=> 'required',
				'poids'				=> 'required',
				
				));

			$gump->filter_rules(array(

				'date_trajet' 	=> 'trim',
				'ville_depart'      => 'trim|sanitize_string',
				'ville_arrivee'     => 'trim|sanitize_string',
				'poids'      		=> 'trim|sanitize_string',
				
				));

			$validated_data = $gump->run($_POST['myform']); 


			
			if($validated_data === false and empty($_SESSION)) {
					$errors = $gump->get_errors_array();
					$form = $_POST['myform'];
					$this->show('user/connexion');
			}
			else {
			$manager_trajet = new TrajetManager();
			
			$_POST['myform']['date_trajet'] =
			date('Y-m-d', strtotime($_POST['myform']['date_trajet']));

			// $_POST['myform']['utilisateur_id'] = $_SESSION['user']['id'];
			

			$liste_trajets = $manager_trajet->findAll();

			$trajetOK = [];
			foreach ($liste_trajets as $trajet) {
				if($_POST['myform']['ville_depart']  == $trajet['ville_depart']){
					$trajetOK[] = $trajet;
				}

				elseif($_POST['myform']['ville_arrivee'] == $trajet['ville_arrivee']) {
					$trajetOK[]=$trajet;
				}
			}

		 

			$this->show('default/liste_trajets',['liste_trajets' => $trajetOK]);
			// debug($liste_trajets);
			}

			$this->show('default/liste_trajets', ['errors' => $errors, 'form' => $form]);
    	}

        $this->show('default/liste_trajets', ['errors' => $errors, 'form' => $form]);      		 
    }

}




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

			// if(isset($_FILES['myform']['name']['photo'])){
			// 	$uploads_dir = 'public/uploads';
			// 	// if ($_FILES['myform']['error']['photo'] == UPLOAD_ERR_OK) {
			// 	// 	$tmp_name = $_FILES['myform']["tmp_name"]['photo'];
			// 	// 	$name = time() . "_" . $_FILES['myform']['name']["photo"];
			// 	// 	$_POST['myform']['photo'] = $name;
			// 	// 	move_uploaded_file($tmp_name, "$uploads_dir/$name");
			// 	// }
			// }


			$_POST['myform'] = $gump->sanitize($_POST['myform']); // You don't have to sanitize, but it's safest to do so.
			
			$gump->validation_rules(array(
				'nom'    			=> 'required|min_len,5',
				'description'  		=> 'max_len,150',
				'ville_depart' 		=> 'required',
				'ville_arrivee'		=> 'required',
				'date_livraison'	=> 'required|date',
				'poids'				=> 'required',
				'prix'    			=> 'required|integer',
				'email'				=> 'required|max_len,200|valid_email'
				// 'photo' 			=> 'required_file|extension,png;jpg'
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
				// 'photo'    			=> 'trim|sanitize_string'
				));

			$validated_data = $gump->run($_POST['myform']);	
			// print_r($validated_data); // validation successful


			if($validated_data === false){
				$errors = $gump->get_errors_array();
				$form = $_POST['myform'];
			} 
			else { //Utilisateur connecte

				$manager = new ColisManager();
				$_POST['myform']['date_livraison'] = date('Y-m-d', strtotime($_POST['myform']['date_livraison']));
				$_POST['myform']['Utilisateur_id'] = 1;
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
			
 

			if($validated_data === false) {
				$errors = $gump->get_errors_array();
				$form = $_POST['myform'];

			} else {
	        	$manager = new TrajetManager();

	        	$_POST['myform']['date_trajet'] = date('Y-m-d', strtotime($_POST['myform']['date_trajet']));
	        	$_POST['myform']['utilisateur_id'] = 1;
    	    	$manager->setTable('trajets');
        		$manager->insert($_POST['myform']);
        		$this->redirectToRoute('index');
        	}
        	$this->show('default/proposer', ['errors' => $errors, 'form' => $form]);
        }
        $this->show('default/proposer', ['errors' => $errors, 'form' => $form]);      		 
    }

public function listeColis() {
	$this->show('default/liste_colis');
}

public function listeTrajets() {
	$this->show('default/liste_trajets');
}
}
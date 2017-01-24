<?php


namespace Controller;

use \W\Controller\Controller;
use \Manager\ArticleManager;
use \Manager\TrajetManager;
use \Manager\ColisManager;
use \GUMP;



class DefaultController extends Controller{

	// accueil
	public function index(){
		$manager_colis = new ColisManager();
		$manager_trajet = new TrajetManager();
		$liste_colis = $manager_colis->findAll();
		$liste_trajet = $manager_trajet->findAll();
		$this->show('default/index', ['liste_colis' => $liste_colis, 'liste_trajet' => $liste_trajet]);
	}

	
	public function expedier()
	{
		// TODO traitement de l'inscription
		$this->show('default/expedier');
	}

	public function commentcamarche(){
		// TODO traitement de l'inscription
		$this->show('default/commentcamarche');
	}

	public function proposer(){
		
		$errors = [];
		$form = [];

		// if(isset($_POST['valider'])){

		// 	$gump = new GUMP();


		// 	$_POST['myform'] = $gump->sanitize($_POST['myform']);
		// // You don't have to sanitize,but it's better to do so.

		// 	$gump->validation_rules(array(

		// 		'ville_depart'      => 'required',
		// 		'ville_arrivee'     => 'required',
		// 		'frequence'     	=> 'required',
		// 		'date'    => 'required|date',
		// 		'poids'       => 'required',
		// 		'prix'              => 'required|integer',

		// 		));

		// 	$gump->filter_rules(array(
		// 		'ville_depart'      => 'trim|sanitize_string',
		// 		'ville_arrivee'     => 'trim|sanitize_string',
		// 		'frequence'     	=> 'required',
		// 		'date'    			=> 'trim|whole_number',
		// 		'poids'      		=> 'trim|sanitize_string',
		// 		'prix'              => 'trim|whole_number'
		// 		));
		// 	$validated_data = $gump->run($_POST['myform']);  

		// 	if($validated_data === false){
		// 		$errors = $gump->get_errors_array();
		// 		$form = $_POST['myform'];
		// 		echo $gump = "Il manque des champs dans votre formulaire. Veuillez le ressaisir" ;
		// 	}
		// } 
  //       else { //si utilisateur connecte (elseif)
  //           // print_r($validated_data); // validation successful
  //       	$manager = new TrajetManager();
  //       	$manager->setTable('colis');
  //       	$manager->insert($_POST['myform']);
  //       	$this->redirectToRoute('index');
  //           // $this->redirectToRoute('expedier?ConfirmationExpedier'); //redirection vers page ConfirmationproposerTrajet depuis la page proposerTrajet.

  //       }      		 
		$this->show('default/proposer', ['errors' => $errors, 'form' => $form]);
	}

	public function listeColis() {
		$this->show('default/liste_colis');
	}

	public function listeTrajets() {
		$this->show('default/liste_trajets');
	}
}













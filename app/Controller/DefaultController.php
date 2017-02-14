<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\TrajetManager;
use \Manager\ColisManager;
use \Manager\UtilisateurManager;
use \GUMP;


class DefaultController extends Controller{

	// Page Accueil
	public function index(){
		$manager_colis = new ColisManager();
		$manager_trajet = new TrajetManager();
		$liste_colis = $manager_colis->findLastFive();
		$liste_trajet = $manager_trajet->findLastFive();
		$this->show('default/index', ['liste_colis' => $liste_colis, 'liste_trajet' => $liste_trajet]);
	}



	public function commentcamarche(){

		$this->show('default/commentcamarche');
	}




	public function expedier(){

		$this->allowTo('user');

		$errors = [];
		$form = [];

		if(isset($_POST['valider'])){

			$gump = new GUMP();


            $_POST['myform'] = $gump->sanitize($_POST['myform']); // You don't have to sanitize, but it's safest to do so.

            $gump->validation_rules(array(
            	'nom'               => 'required|min_len,5',
            	'description'       => 'max_len,150',
            	'ville_depart'      => 'required',
            	'ville_arrivee'     => 'required',
            	'date_livraison'    => 'required',
            	'poids'             => 'required',
            	'prix'              => 'required|integer',
            	'photo'             => 'required_file|extension,png;jpg'

            	));

            $gump->filter_rules(array(
            	'nom'               => 'trim|sanitize_string',
            	'description'       => 'trim|sanitize_string',
            	'ville_depart'      => 'trim|sanitize_string',
            	'ville_arrivee'     => 'trim|sanitize_string',
            	'date_livraison'    => 'trim',
            	'poids'             => 'trim|sanitize_string',
            	'prix'              => 'trim|whole_number'

            	));

            $validated_data = $gump->run(array_merge($_POST['myform'],$_FILES['myform']));   


            if($validated_data === false )  {
            	$errors = $gump->get_errors_array();
            	$form = $_POST['myform'];

            } 
            else { 
            	$uploads_dir = '/var/www/public/assets/uploads';
            	foreach ($_FILES["myform"]["error"] as $key => $error) {
            		if ($error == UPLOAD_ERR_OK) {
            			$tmp_name = $_FILES["myform"]["tmp_name"][$key];
            			$name = $_FILES["myform"]["name"][$key];
            			move_uploaded_file($tmp_name, "$uploads_dir/$name");
            		}
            	}

            	$manager = new ColisManager();

            	$_POST['myform']['date_livraison'] = date('Y-m-d', strtotime($_POST['myform']['date_livraison']));

            	$_POST['myform']['Utilisateur_id'] = $_SESSION['user']['id'];

            	$manager->insert(array_merge($_POST['myform'], ['photo' => $name]));

            	// Appel d'une fonction d'envoi automatique de mail
            	// quand il y a correspondance entre trajet et colis.
            	$this->alerteCorrespondance();

            	$this->redirectToRoute('index');
                // $this->redirectToRoute('expedier?ConfirmationExpedier'); //redirection vers page ConfirmationExpedier depuis la page expedier
            }
            $this->show('default/expedier', ['errors' => $errors, 'form' => $form]);
        }
        $this->show('default/expedier', ['errors' => $errors, 'form' => $form]);   
    }
    

    public function alerteCorrespondance(){

    	// interroger la BDD sur les correspondances possibles des trajets avec ce colis :

    	// si on trouve une correspondance : appel du swift mailer pour prévenir les gens concernés
    	echo "Envoi du mail de correspondances ...<br>";

    }

    public function conditionsgenerales(){

    	$this->show('default/conditionsgenerales');
    }



    public function proposer(){

    	$this->allowTo('user');

    	$errors = [];
    	$form = [];


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
				


				if($validated_data === false) {
					$errors = $gump->get_errors_array();
					$form = $_POST['myform'];
					

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





		public function rechercherColis() {

			$this->allowTo('user');

			$errors = [];
			$form = [];
			$colisOK=[];


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

			if($validated_data === false) {
				$errors = $gump->get_errors_array();
				$form = $_POST['myform'];
				

			} 

			else {

				$manager_colis = new ColisManager();

				$_POST['myform']['date_livraison'] = 
				date('Y-m-d', strtotime($_POST['myform']['date_livraison']));
	        		// $_POST['myform']['utilisateur_id'] = $_SESSION['user']['id'];



				$liste_colis = $manager_colis->findAll();
				$colisOK = [];
				foreach ($liste_colis as $colis) {
					if(  ($_POST['myform']['ville_depart']  == $colis['ville_depart'])  &&
						($_POST['myform']['ville_arrivee'] == $colis['ville_arrivee']) &&
						($_POST['myform']['date_livraison'] == $colis['date_livraison']) &&    
						($_POST['myform']['poids'] >= $colis['poids']) )
					{
						$colisOK[] = $colis;
					}

				}

		//debug($colisOK);

				$this->show('default/liste_colis',['liste_colis' => $colisOK]);

			}		

			$this->show('default/liste_colis', ['errors' => $errors, 'form' => $form, 'liste_colis' => $colisOK]);
		}

		$this->show('default/liste_colis', ['errors' => $errors, 'form' => $form, 'liste_colis' => $colisOK]);      		 
	}


	



// public function rechercher(){

	public function rechercherTrajet() {

		$this->allowTo('user');

		$errors = [];
		$form = [];
		$trajetOK=[];


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


			
			if($validated_data === false) {
				$errors = $gump->get_errors_array();
				$form = $_POST['myform'];
				

			}
			else {
				$manager_trajet = new TrajetManager();
				$_POST['myform']['date_trajet'] =
				date('Y-m-d', strtotime($_POST['myform']['date_trajet']));

				$_POST['myform']['utilisateur_id'] = $_SESSION['user']['id'];


				$liste_trajet = $manager_trajet->findAll();

				$trajetOK = [];
				foreach ($liste_trajet as $trajet) {
					if(  ($_POST['myform']['ville_depart']  == $trajet['ville_depart'])  &&
						($_POST['myform']['ville_arrivee'] == $trajet['ville_arrivee']) &&
						($_POST['myform']['date_trajet'] == $trajet['date_trajet']) &&    
						($_POST['myform']['poids'] >= $trajet['poids']) )
					{
						$trajetOK[] = $trajet;
					}
				}

			// debug($trajetOK);

				$this->show('default/liste_trajets',['liste_trajets' => $trajetOK]);

			}

			$this->show('default/liste_trajets', ['errors' => $errors, 'form' => $form,'liste_trajets' => $trajetOK]);
		}

		$this->show('default/liste_trajets', ['errors' => $errors, 'form' => $form,'liste_trajets' => $trajetOK]);      		 
	}






	public function listeColis(){
		$manager_colis=new ColisManager();
		$liste_colis=$manager_colis->findAll();
		$this->show('default/liste_colis',['liste_colis'=>$liste_colis]);

	}

	public function listeTrajets(){
		$manager_trajet=new TrajetManager();
		$liste_trajet=$manager_trajet->findAll();
		$this->show('default/liste_trajets',['liste_trajet'=>$liste_trajet]);

	}

	public function detailColis($id){
		$manager_colis=new ColisManager();
		$colis=$manager_colis->find($id);
		$this->show('default/detailColis',['colis'=>$colis]);
	}

	public function detailTrajet($id){
		$manager_trajet=new TrajetManager();
		$trajet=$manager_trajet->find($id);
		$this->show('default/detailTrajet',['trajet'=>$trajet]);

	}

	public function moncompte(){
		$this->allowTo('user');

		$wuser=$this->getUser();
		$user_id = $wuser['id'];
		// print_r($user_id);
		$utilisateur_manager = new UtilisateurManager();
		$utilisateur = $utilisateur_manager->findByUserId($user_id);
		$this->show('default/moncompte',['utilisateur'=>$utilisateur]);

	}

}




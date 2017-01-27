<?php
	
	$w_routes = array(
		['GET', '/', 'Default#index', 'index'], // l'accueil du site
		['GET','/commentcamarche','Default#commentcamarche','commentcamarche'],
		['GET|POST', '/inscription', 'User#inscription', 'inscription'],
		['GET|POST', '/expedier', 'Default#expedier', 'expedier'],
		['GET|POST', '/proposer', 'Default#proposer', 'proposer'],
		['GET|POST', '/liste_colis', 'Default#rechercherColis', 'liste_colis'],
		['GET|POST', '/liste_trajets', 'Default#rechercherTrajet', 'liste_trajets'],
		


		['GET|POST', '/connexion', 'user#connexion', 'connexion'],
		['GET|POST', '/deconnexion', 'user#deconnexion', 'deconnexion'],	

	



	);
<?php
	
	$w_routes = array(
		['GET', '/', 'Default#index', 'index'], // l'accueil du site
		['GET','/commentcamarche','Default#commentcamarche','commentcamarche'],
		['GET|POST', '/inscription', 'User#inscription', 'inscription'],
		['GET|POST', '/expedier', 'Default#expedier', 'expedier'],
		['GET', '/proposer', 'Default#proposer', 'proposer'],
		['GET', '/liste_colis', 'Default#listeColis', 'liste_colis'],
		['GET', '/liste_trajets', 'Default#listeTrajets', 'liste_trajets'],
		


		['GET|POST', '/connexion', 'User#connexion', 'connexion'],
		['GET', '/deconnexion', 'User#deconnexion', 'deconnexion'],	

	



	);
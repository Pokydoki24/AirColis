<?php
	
	$w_routes = array(
		['GET', '/', 'Default#index', 'index'], // l'accueil du site
		
		['GET|POST', '/inscription', 'User#inscription', 'inscription'],

		['GET|POST', '/expedier', 'Default#expedier', 'expedier'],

		['GET', '/proposer', 'Default#proposer', 'proposer'],


		['GET', '/annonces', 'Default#annonces', 'annonces'],

		['GET|POST', '/connexion', 'User#connexion', 'connexion'],

		['GET', '/deconnexion', 'User#deconnexion', 'deconnexion'],	

		['GET', '/annonce/[i:id]', 'Default#annonce', 'detail'],

	



	);
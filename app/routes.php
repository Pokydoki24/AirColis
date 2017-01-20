<?php
	
	$w_routes = array(
		['GET', '/', 'Default#index', 'index'], // l'accueil du site
		
		['GET|POST', '/inscription', 'User#inscription', 'inscription'],

		['GET|POST', '/expedier', 'Default#expedier', 'expedier'],

		['GET', '/proposer', 'Default#proposertrajet', 'proposertrajet'],


		['GET', '/matchingpoids', 'Default#matchingpoids', 'matchingpoids'],

		['GET', '/matchingprix', 'Default#matchingprix', 'matchingprix'],


		['GET|POST', '/connexion', 'User#connexion', 'connexion'],

		['GET', '/deconnexion', 'User#deconnexion', 'deconnexion'],	

		['GET', '/annonce/[i:id]', 'Default#annonce', 'detail'],

	



	);
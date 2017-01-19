<?php
	
	$w_routes = array(
		['GET', '/', 'Default#index', 'index'], // l'accueil du site
		
		['GET|POST', '/inscription', 'User#inscription', 'inscription'],

		['GET|POST', '/expedier', 'Default#expedier', 'expedier'],

		['GET', '/proposer', 'Default#proposertrajet', 'proposertrajet'],


		['GET', '/trajetlisting', 'Default#trajetlisting', 'trajetlisting'],

		['GET', '/colislisting', 'Default#colislisting', 'colislisting'],


		['GET', '/matching', 'Default#matching', 'matching'],

		['GET|POST', '/connexion', 'User#connexion', 'connexion'],

		['GET', '/deconnexion', 'User#deconnexion', 'deconnexion'],	

		['GET', '/annonce/[i:id]', 'Default#annonce', 'detail'],

	



	);
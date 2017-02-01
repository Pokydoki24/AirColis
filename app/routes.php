<?php
	
	$w_routes = array(
		['GET', '/', 'Default#index', 'index'], // l'accueil du site
		['GET','/commentcamarche','Default#commentcamarche','commentcamarche'],
		['GET|POST', '/inscription', 'User#inscription', 'inscription'],
		['GET|POST', '/expedier', 'Default#expedier', 'expedier'],
		['GET|POST', '/proposer', 'Default#proposer', 'proposer'],
		['GET|POST', '/liste_colis', 'Default#rechercherColis', 'liste_colis'],
		['GET|POST', '/liste_trajets', 'Default#rechercherTrajet', 'liste_trajets'],
		['GET','/detailColis/[:id]','Default#detailColis','detailColis'],
		['GET','/detailTrajet/[:id]','Default#detailTrajet','detailTrajet'],



		['GET|POST', '/connexion', 'User#connexion', 'connexion'],
		['GET|POST', '/deconnexion', 'User#deconnexion', 'deconnexion'],
		['GET','/moncompte','Default#moncompte','moncompte'],

		['GET','/conditionsgenerales','Default#conditionsgenerales','conditionsgenerales'],

	



	);
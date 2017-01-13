<?php
	
	$w_routes = array(
		['GET', '/', 'Default#index', 'index'], // l'accueil du site
		['GET', '/proposer', 'Default#proposer', 'proposer'],
		['GET|POST', '/inscription', 'Default#inscription', 'inscription'],
	);
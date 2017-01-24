<?php

Class UserManager extends \W\Manager\Manager {

/* W/Manager/Manager.php */

// Hérite de toutes les méthodes du Manager, plus : 

// Récupère un utilisateur en fonction de son email ou de son pseudo
public function getUserByUsernameOrEmail($usernameOrEmail)

// Teste si un email est présent en base de données
public function emailExists($email)

// Teste si un pseudo est présent en base de données
public function usernameExists($username)	
	
}
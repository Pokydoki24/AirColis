<?php
namespace Manager;

class UtilisateurManager extends \W\Manager\Manager {

	// Récupère un utilisateur en fonction de son id
	public function findByUserId($id)
    {
        
        $sql = "SELECT * FROM " . $this->table . " where user_id = :id";

        
        $sth = $this->dbh->prepare($sql);
        $sth->bindValue('id', $id);
        $sth->execute();

        return $sth->fetch();
    }

}
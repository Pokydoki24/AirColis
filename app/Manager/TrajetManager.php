<?php
namespace Manager;

class TrajetManager extends \W\Manager\Manager {
     
        
    public function matchpoids($villeDepart, $villeArrivee, $poids, $date, $orderBy = "", $orderDir = "ASC", $limit = null, $offset = null)
	{

		$sql = "SELECT * FROM " . $this->table;
		$sql .= " WHERE poids <= colis.poids_colis AND villeDepart = colis.villeDepart AND villeArrivee = colis.villeArrivee AND date = colis.date_livraison";

		if (!empty($orderBy)){

			//sécurisation des paramètres, pour éviter les injections SQL
			if(!preg_match("#^[a-zA-Z0-9_$]+$#", $orderBy)){
				die("invalid orderBy param");
			}
			$orderDir = strtoupper($orderDir);
			if($orderDir != "ASC" && $orderDir != "DESC"){
				die("invalid orderDir param");
			}
			if ($limit && !is_int($limit)){
				die("invalid limit param");
			}
			if ($offset && !is_int($offset)){
				die("invalid offset param");
			}

			$sql .= " ORDER BY $orderBy $orderDir";
			if ($limit){
				$sql .= " LIMIT $limit";
				if ($offset){
					$sql .= " OFFSET $offset";
				}
			}
		}
		$sth = $this->dbh->prepare($sql);
		// $sth->bindValue('poids', $poids);
		// $sth->bindValue('villeDepart', $villeDepart);
		// $sth->bindValue('villeArrivee', $villeArrivee);
		// $sth->bindValue('date', $date);
		// $sth->execute();

		return $sth->fetchAll();
	}

}
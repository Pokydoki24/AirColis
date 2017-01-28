<?php
namespace Manager;

class TrajetManager extends \W\Manager\Manager {
          
    public function rechercherTrajet($villeDepart, $villeArrivee,  $date, $orderBy = "", $orderDir = "ASC", $limit = null, $offset = null)
	{

		$sql = "SELECT * FROM " . $this->table;
		 $sql .= " WHERE  myform[ville_depart] = trajets.ville_depart AND myform[ville_arrivee] = trajets.ville_arrivee AND myform[date_trajet] = trajets.date_trajet";

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
		$sth->bindValue(':ville_depart', $villeDepart);
		$sth->bindValue(':ville_arrivee', $villeArrivee);
		$sth->bindValue(':date_trajet', $date);
		$sth->execute();

		return $sth->fetchAll();
	}
}
<?php
namespace Manager;

class TrajetManager extends \W\Manager\Manager {

	public function findLastFive()
    {
        // select * from trajets order by id desc limit 5
        $sql = "SELECT * FROM " . $this->table . " order by id desc limit 5";
        
        $sth = $this->dbh->prepare($sql);
        $sth->execute();

        return $sth->fetchAll();
    }
          
 //    public function rechercherTrajet($villeDepart, $villeArrivee,  $date, $orderBy = "", $orderDir = "ASC", $limit = '5', $offset = null)
	// {

	// 	$sql = "SELECT * FROM " . $this->table ;

	// 	if (!empty($orderBy)){

	// 		//sécurisation des paramètres, pour éviter les injections SQL
	// 		if(!preg_match("#^[a-zA-Z0-9_$]+$#", $orderBy)){
	// 			die("invalid orderBy param");
	// 		}
	// 		$orderDir = strtoupper($orderDir);
	// 		if($orderDir != "ASC" && $orderDir != "DESC"){
	// 			die("invalid orderDir param");
	// 		}
	// 		if ($limit && !is_int($limit)){
	// 			die("invalid limit param");
	// 		}
	// 		if ($offset && !is_int($offset)){
	// 			die("invalid offset param");
	// 		}

	// 		$sql .= " ORDER BY $orderBy $orderDir";
	// 		if ($limit){
	// 			$sql .= " LIMIT $limit";
	// 			if ($offset){
	// 				$sql .= " OFFSET $offset";
	// 			}
	// 		}
	// 	}
	// 	$sth = $this->dbh->prepare($sql);
		

	// 	return $sth->fetchAll();
	// }
}
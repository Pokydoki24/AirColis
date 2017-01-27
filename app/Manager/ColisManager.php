<?php
namespace Manager;

class ColisManager extends \W\Manager\Manager {


     public function rechercherColis($ville_depart, $ville_arrivee, $poids, $date_trajet, $orderBy = "", $orderDir = "ASC", $limit = null, $offset = null)
    {
 
        $sql = "SELECT * FROM " . $this->table;
        $sql .= " WHERE myform[poids] = trajets.poids AND myform[ville_depart] = trajets.ville_depart AND myform[ville_arrivee] = trajets.ville_arrivee AND myform[date_livraison] = trajets.date_livaison";
 
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
        $sth->bindValue('poids', $_POST['myform']['poids']);
        $sth->bindValue('ville_depart', $_POST['myform']['ville_depart']);
        $sth->bindValue('ville_arrivee', $_POST['myform']['ville_arrivee']);
        $sth->bindValue('date_livraison', $_POST['myform']['date_livraison']);
        $sth->execute();
 
        return $sth->fetchAll();
    } 

}
<?php

include_once 'Database.php';

class Personnage extends Database{

    public function getParsonnage(){

        $dbConnect = $this->dbConnect;

        $sql = "SELECT * FROM personnages";
        $stmt = $dbConnect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

   

    }


<?php
include_once 'Database.php';

Class Competence extends Database{


    public function getCompetence(){

        $dbConnect = $this->dbConnect;

        $sql= "SELECT *
        FROM personnages
        INNER JOIN compétence ON personnages.ID_personnages = compétence.ID_competence";
        $stmt = $dbConnect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);



    }
    public function Competence($result){
        foreach ($result as $value) {
     echo'
         <div class="card">
             <img src="' . $value['image'] . '" alt="image">
             <div class="content">
                 <h3>' . $value['Nom_personnage'] . '</h3>
                 <p><strong>Nom:</strong> ' . $value['Nom_competence'] . '</p>
                 <p><strong>Description:</strong> ' . $value['Description_competence'] . '</p>
             </div>   
         </div>';

    }
    }
}
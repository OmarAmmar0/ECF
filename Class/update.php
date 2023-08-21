<?php
include_once 'Database.php';

class Update extends Database
{


    public function getUpdatePerssonage($UpdateIdP, $UpdateNom, $UpdateRole, $UpdateImage, $UpdateDescription)
    {
        $dbConnect = $this->dbConnect;

        $sql = "UPDATE `personnages`
                SET `Nom_personnage` = :UpdateNom, `Role` = :UpdateRole, `image` = :UpdateImage, `Description` = :UpdateDescription
                WHERE ID_personnages = :UpdateIdP";
        $stmt = $dbConnect->prepare($sql);
        $stmt->bindValue(':UpdateIdP', $UpdateIdP, PDO::PARAM_INT);
        $stmt->bindValue(':UpdateNom', $UpdateNom, PDO::PARAM_STR);
        $stmt->bindValue(':UpdateRole', $UpdateRole, PDO::PARAM_STR);
        $stmt->bindValue(':UpdateImage', $UpdateImage, PDO::PARAM_STR);
        $stmt->bindValue(':UpdateDescription', $UpdateDescription, PDO::PARAM_STR);

        try {
            $stmt->execute();
            echo "Mise à jour effectuée avec succès.";
        } catch (PDOException $e) {
            echo "Erreur lors de la mise à jour : " . $e->getMessage();
        }
    }

    public function getUpdateCompetence($UpdateIdC,$UpdateNomC,$UpdateDC )
    {
        $dbConnect = $this->dbConnect;

        $sql = "UPDATE `compétence`
                SET `Nom_competence` = :UpdateNomC, `Description_competence` = :UpdateDC
                WHERE ID_competence = :UpdateIdC";
        $stmt = $dbConnect->prepare($sql);
        $stmt->bindValue(':UpdateIdC', $UpdateIdC, PDO::PARAM_INT);
        $stmt->bindValue(':UpdateNomC', $UpdateNomC, PDO::PARAM_STR);
        $stmt->bindValue(':UpdateDC', $UpdateDC, PDO::PARAM_STR);

        try {
            $stmt->execute();
            echo "Mise à jour effectuée avec succès.";
        } catch (PDOException $e) {
            echo "Erreur lors de la mise à jour : " . $e->getMessage();
        }

    }


    
}

?>


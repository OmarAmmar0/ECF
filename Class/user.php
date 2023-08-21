<?php
include_once 'Database.php';


class User extends Database{



    public function login($identifiant){

        $dbConnect = $this->dbConnect;

        $sql = "SELECT * FROM `utilisateur` WHERE `Pseudo`='$identifiant'";
            $stmt = $dbConnect->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if ($_POST['password'] == $result[0]['Password']) {
                $_SESSION = ['Pseudo' => $result[0]['Pseudo'], 'Mail' => $result[0]['Mail']];
            }
            else {
                echo '<div class="info">
                <h3>information incorrecte</h3>
                </div>';
            }

    }
   
        public function signup($mail, $identifiant, $password){
    
            $dbConnect = $this->dbConnect;
    
    
            $sql_check_unique = "SELECT COUNT(*) FROM utilisateur WHERE Pseudo = ?";
            $stmt_check_unique = $dbConnect->prepare($sql_check_unique);
            $stmt_check_unique->execute([$mail]);
            $count = $stmt_check_unique->fetchColumn();
    
    
    
            $sql = "INSERT INTO `utilisateur`(`Pseudo`, `Password`, `Mail`) 
            VALUES ('$identifiant','$password','$mail')";
            $stmt = $dbConnect->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            
        }

        public function getUser(){

        $dbConnect = $this->dbConnect;

        $sql = "SELECT * FROM utilisateur ORDER BY ID_Utilisateur DESC LIMIT 1";
        $stmt = $dbConnect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
    


}

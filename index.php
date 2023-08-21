<?php
session_start();

include 'Class/user.php';
include 'Class/personnage.php';
include 'Class/competence.php';
include 'Class/update.php';


$dbConnect = new PDO("mysql:host=localhost;dbname=ecf", "root", "");
$user = new User();
$competence = new Competence();
$personnage = new Personnage();
$update = new Update();
$db = new Database();



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>One piece</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="menu">
            <div class="logo">
                <h1>One Piece</h1>
            </div>
            <form action="index.php" method="POST">
                <ul>
                    <li><a href="?page=home">Accueil</a></li>
                    <li><a href="?page=equipage">Equipage</a></li>
                    <li><a href="?page=settings">modification</a></li>
                    <li><a href="?page=user">Utilisateur</a></li>

                    <?php
                    if (!empty($_SESSION)) {
                        echo '<a href="index.php?page=logout"><li>Se déconnecter</li></a>';
                    } else {
                        echo '<a href="index.php?page=login"><li>Se connecter</li></a>';
                    }

                    ?>
                </ul>

            </form>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>

        </div>

        <div class="dropdown_menu">
            <li><a href="?page=home">Accueil</a></li>
            <li><a href="?page=equipage">Equipage</a></li>
            <li><a href="?page=settings">modification</a></li>
            <li><a href="?page=user">Utilisateur</a></li>

            <?php
            if (!empty($_SESSION)) {
                echo '<a href="index.php?page=logout"><li>Se déconnecter</li></a>';
            } else {
                echo '<a href="index.php?page=login"><li>Se connecter</li></a>';
            }

            ?>
        </div>
        <?php
        if (isset($_GET['page']) && ($_GET['page']) == 'home') {
            echo '<div class="bienvenue">
             <div class="bienvenues">
                 <h3>BIENVENUE A BORT DE L\'EQUIPAGE DE LUFFY</h3>
                 <p>L\'équipage de Luffy, également connu sous le nom 
                    de l\'équipage de Mugiwara, est un groupe de dix pirates
                     originaire d\'East Blue. Les membres de l\'équipage 
                     sont Luffy, Zoro, Nami, Usopp, Sanji, Tony Tony Chopper
                     , Robin, Franky, Brook et Jinbe.</p>
                     <h4>Si vous ne connaissiez pas One Piece voila une petite vidéo expliquant l\'univers de One pièces et pourquoi tu devrais commencer a le regarder.</h4>
                     <div class="video">
                         <iframe width="560" height="315" src="https://www.youtube.com/embed/lwM85HTlATo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                     </div>
            </div>
        </div>';
        }
        ?>


    </header>
    <?php
    //  CONNEXION //

    if (isset($_GET['page']) && ($_GET['page']) == 'login') {

        echo '<div class="divformlog">
            <form class="formulairelogin" method="POST">
                 <input class="btn" type=text name=id placeholder="Identifiant">
                 <input class="btn" type="password" name="password" placeholder="Mot de passe">
                 <input class="btn2" type="submit" name="submitlogin" value= "Se connecter">
                 <a href="index.php?page=signin">Créer un compte</a>
            </form>     
        </div>';
    }


    if (isset($_POST['submitlogin'])) {
        $identifiant = $_POST['id'];

        $user->login($identifiant);
    }

    // CONNEXION //


    // DECONNEXION //

    if (isset($_GET['page']) && ($_GET['page']) == 'logout') {

        echo '<div class="decos">
                    <div class="deco">
                         <p>Voulez-vous vraiment vous déconnecter ?<p>
                         <form method=\'POST\'>
                             <input type=\'submit\' name=\'logoutsubmit\' value=\'Se déconnecter\'>
                        </form>
                    </div>
            
                </div>';
                if (isset($_POST['logoutsubmit'])) {
                    session_destroy();
                }
    }



    // DECONNEXION //


    // INSCRIPTION //

    if (isset($_GET['page']) && ($_GET['page']) == 'signin') {

        echo
        "<div class='divformlog'>
                <form method='POST' class='formsignin'>
       
                    <input class='inscription' type='text' name='idsignin' placeholder='Pseudo'>
                    <input class='inscription' type='password' name='passwordsignin' placeholder='Password'>
                    <input class='inscription' type='text' name='mailsignin' placeholder='Email'>
                    <input class='inscriptions' type='submit' name='submitsignin' value='Créer mon compte'>
                  
                </form></div>";
    }
    if (isset($_POST['submitsignin'])) {
        $identifiant = $_POST['idsignin'];
        $password = $_POST['passwordsignin'];
        $mail = $_POST['mailsignin'];

        $user->signup($mail, $identifiant, $password);
    }

    // INSCRIPTION //


    ?>

    <!-- Utilisateur -->

    <?php

    if (isset($_GET['page']) && $_GET['page'] == 'user' && empty($_SESSION)) {

        echo '<div class= "motUtilisateur">
                     <div class= "intMotUtilisateur">
                          Vous devez être connecté pour pouvoir avoir accès à cette partie du site
                     </div>
                 </div>';
    }



    ?>

    <?php
    if (isset($_GET['page']) && $_GET['page'] == 'user' && !empty($_SESSION)) {
        $result = $user->getUser();
        foreach ($result as $value) {

            echo '<div class="utilisateur">
                     <div class="cardUtilisateur">
                         <h3><strong>Pseudo: </strong>' . $value['Pseudo'] . '</h3>
                         <p><strong>Mail:</strong> ' . $value['Mail'] . '</p>
                         <p><strong>Password:</strong> ' . $value['Password'] . '</p>
                     </div>
                 </div>';
        }
    }

    ?>

    <!-- Utilisateur -->

    <!-- Modification -->


    <?php

    if (isset($_GET['page']) && $_GET['page'] == 'settings' && empty($_SESSION)) {

        echo '<div class= "motUtilisateur">
            <div class= "intMotUtilisateur">
                 Vous devez être connecté pour pouvoir avoir accès à cette partie du site
            </div>
        </div>';
    }



    ?>

    <!-- Modification -->


    <!-- cards personnage accueil-->




    <?php if (isset($_GET['page']) && $_GET['page'] == 'equipage') {
        $result = $personnage->getParsonnage(); ?>
        <div class="equipage">
            <div class="equipages">Voici l'équipage de luffy au complet tous doter de capacité de pouvoir et de savoir different apprenez à les connaitre avec leur rôle dans les équipages et tout ce qu'il y a savoir sur eux </div>
        </div>
        <div class="cards">
        <?php foreach ($result as $value) {
            echo '
         <div class="card">
             <img src="' . $value['image'] . '" alt="image">
             <div class="content">
                 <h3>' . $value['Nom_personnage'] . '</h3>
                 <p><strong>Role:</strong> ' . $value['Role'] . '</p>
                 <p><strong>Description:</strong> ' . $value['Description'] . '</p>
                 <ul>
                     <li><a href="?page=Competence">Competence</a></li>
                 </ul>
             </div>   
         </div>';
        }
    }

        ?>
        </div>

        <!-- cards personnage accueil-->



        <?php if (isset($_GET['page']) && $_GET['page'] == 'Competence') {
            $result = $competence->getCompetence(); ?>
            <div class="equipage">
                 <div class="equipages">Voici l'équipage de luffy au complet tous doter de capacité de pouvoir et de savoir different apprenez à les connaitre avec leur rôle dans les équipages et tout ce qu'il y a savoir sur eux </div>
            </div>
            <div class="cards">
            <?php $result = $competence->Competence($result);
        }

            ?>
            </div>

            <?php if (isset($_GET['page']) && $_GET['page'] == 'settings' && !empty($_SESSION)) {
    echo ' <div class="update">
    <div class="divUpdate">
    <form action="" method="post">
        <label for="UpdateIdP">Id :</label>
        <input type="number" name="UpdateIdP">

        <label for="UpdateNom">Nom Personnage :</label>
        <input type="text" name="UpdateNom">

        <label for="UpdateRole">Role :</label>
        <input type="text" name="UpdateRole">

        <label for="UpdateImage">Image personnage :</label>
        <input type="url" name="UpdateImage">

        <label for="UpdateDescription">Description Personnage :</label>
        <input type="text" name="UpdateDescription">

        <button type="submit" name="submitUpdate" class="modifier">Modifier</button>
    </form>
</div>

<div class="divUpdateC">
     <form action="" method="post">

         <label for="UpdateIdC">Id :</label>
         <input type="number" name="UpdateIdC">

         <label for="UpdateNomC">Nom Competence :</label>
         <input type="text" name="UpdateNomC">

         <label for="UpdateDC">Descrption competence :</label>
         <input type="texte" name="UpdateDC">

         <button type="submit" name="submitUpdate2" class="modifier">Modifier</button>
     </form>
</div>
   ';

    if (isset($_POST['submitUpdate'])) {
        $UpdateIdP = $_POST['UpdateIdP'];
        $UpdateNom = $_POST['UpdateNom'];
        $UpdateRole = $_POST['UpdateRole'];
        $UpdateImage = $_POST['UpdateImage'];
        $UpdateDescription = $_POST['UpdateDescription'];

        $update->getUpdatePerssonage($UpdateIdP, $UpdateNom, $UpdateRole, $UpdateImage, $UpdateDescription);
    }
    if (isset($_POST['submitUpdate2'])) {
        $UpdateIdC = $_POST['UpdateIdC'];
        $UpdateNomC = $_POST['UpdateNomC'];
        $UpdateDC = $_POST['UpdateDC'];
      

        $update->getUpdateCompetence($UpdateIdC, $UpdateNomC, $UpdateDC);
    }

}




?>

            <script>
                const toggleBtn = document.querySelector('.toggle_btn')
                const toggleBtnIcon = document.querySelector('.toggle_btn')
                const dropDownMenu = document.querySelector('.dropdown_menu')

                toggleBtn.onclick = function() {
                    dropDownMenu.classList.toggle('open')
                    const isOpen = dropDownMenu.classList.contains('open')
                }
            </script>

</body>

</html>
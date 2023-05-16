<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>connexion</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"></meta>
    <script>

    </script>
    <style>
       
    </style>

    <script>

    </script>
</head>
<body>

<!-- barre de navigation en dessous du header -->
<div id="dv_nav">
        <ul id = "nav">
            <!-- ON MET DES LIENS SEULEMENT OU LE MEC PEUT ACCEDER VIA JAVA? OU ALORS ON PEUT DOUILLER AVEC DISPLAY? -->
            <!-- CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS -->
            <li><a href="#">JEUNE</a>
                <ul>
                    <li class="souslien"><a href="#">PROFIL</a></li>
                    <li class="souslien"><a href="#">MENU</a></li>
                    <li class="souslien"><a href="#">DEMANDE</a></li>
                </ul>
            </li>

            <li><a href="#">RÉFÉRENT</a></li>
            <li><a href="#">CONSULTANT</a></li>
            <li><a href="#">PARTENAIRES</a></li>
        </ul>
</div>

<!-- EH FAUT RAJOUTER LES CHAMPS NECESSAIRES POUR FAIRE UN COMPTE JEUNE AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAa-->

<!--formulaire de creation de compte-->
<form action = "" method = "post" style = "margin: 15% 0% 0% 25%;">
    <fieldset style = "border:none">
        <label for = "nom">Nom</label>
        <input type = "text" name = "username" required>
        <br><br>
        <label for = "password">Mot de passe</label>
        <input type = "password" name = "password" required>
        <?php 
        // on verifie si le compte existe deja
        if(isset($_SESSION['existe']) && $_SESSION['existe'] == true)
            echo "<p style=\"color:red\"> Ce compte existe déjà <p>";
        ?>  
    </fieldset><br> 
    <input name="submit" type="submit" value="Création"/>
</form>

<?php

    if (isset($_POST['submit']))
    {

        // on met les parametres du comptes comme parametres de la session (on se connecte des que l'on a cree le compte) 
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['username'] = $_POST['username'];

        echo "<p>".$_POST['username']." === ".$_POST['password'];
        echo "<br>".$_SESSION['username']." === ".$_SESSION['password'];
        echo "</p>";

        echo "<script> window.location.assign(\"verificationCreation.php\");;</script>";
    }
    
?>


<!--
    commentaire 
-->

</body>
</html>
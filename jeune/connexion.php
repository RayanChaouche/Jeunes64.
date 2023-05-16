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

<form action = "" method = "post" style = "margin: 15% 0% 0% 25%;">
    <fieldset style = "border:none">
        <label for = "username">Utilisateur</label>
        <input type = "text" name = "username" required>
        <br><br>
        <label for = "password">Mot de passe</label>
        <input type = "password" name = "password" required>  
    </fieldset><br> 
    <input name="submit" type="submit" value="Connexion"/>

    <?php 
        // on verifie si le compte existe deja
        if(isset($_SESSION['connecte']) && $_SESSION['connecte'] == false){
            echo "<p style=\"color:red\"> Le nom d'utilisateur ou le mot de est incorrect <p>";}
    ?>
</form>


<?php

  function Informations()
    {
        session_start();    

        if (isset($_POST['submit']))
        {
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['username'] = $_POST['username'];

            echo "<script> window.location.replace(\"http://localhost/Jeunes/jeune/verificationConnexion.php\");</script>";
        }
    }

    Informations();
?>


<!--
    commentaire 
-->

</body>
</html>
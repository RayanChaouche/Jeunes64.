<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Demande</title>
    <link rel="stylesheet" type="text/css" href="#">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"></meta>
    
    <script>
        //commentaire ligne js
    </script>

    <style>
        #titre
        {
            text-align: center;
        }

        #main
        {
            display: flex;
            justify-content: center;
            width: 100%;
        }

        form
        {
            display: inline-flex;
            width: 100%;
        }

        #left
        {
            margin-left: 5%;
            margin-top: 1%;
        }

        h2
        {
            background-color: greenyellow;
            margin: 0%;
        }

        #center
        {
            margin: 0 auto;
            width: 100%;
            margin-left: 10%;
            margin-top: 2%;
        }

        #text_field
        {
            font-size: 25px;
            width: 80%;
            height: auto;
        }

        input[type=text], input[type=email] {
            border: none;
            border-bottom: 2px dotted palevioletred;
            width: max-content;
        }

        label
        {
            display: inline-block;
        }

        #right
        {
            margin: 0 auto;
            margin-left: 5%;
            width: 30%;
        }


        #submit
        {
            margin: 0 auto;
            display: inline-block;
        }
       
    </style>
</head>
<body>

<!--header de la page-->
<header> 
    <!--
        logo
        <img src="" alt="">
    -->
    <h1 class="gros_titre">JEUNE</h1>
    <h1>Je donne de la valeur à mon engagement</h1>
</header>

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

<strong id="titre">Indiquez une personne pour valider votre expérience.</strong>

<!--formulaire du jeune-->
<div id="main">
<form method="post" action="#">

    <!--formulaire textuelle au milieu-->
    <div id="center">
        <fieldset id="text_field">
            <label for="nom">NOM :</label>
            <input type="text" id="nom" name="nom" required><br>

            <label for="prenom">PRENOM :</label>
            <input type="text" id="prenom" name="prenom" required><br>

            <label for="date">DATE DE NAISSANCE :</label>
            <input type="text" id="date" name="date" required><br>

            <label for="email">Mail :</label>
            <input type="email" id="email" name="email" required><br>
            <br>

            <label for="reseau">PRÉSENTATION  :</label>
            <input type="text" id="reseau" name="reseau"><br>

            <label for="duree">DUREE :</label>
            <input type="text" id="duree" name="duree"><br><br>
        </fieldset>
    </div>  

    <!--formulaire checkbox sur la droite-->
    <!---aaaaaaaaa1111111AAAAAAAAAAAAAAAAAAAAAAAAAAAAA FAIRE DU JAVA POUR LIMITER A QUATRE CHECKBOX-->
    <div id="right">
        <input id="submit" type="submit" value="Valider">
    </div>

    
</form>
</div>


<?php

    if (isset($_POST['submit']))
    {
        // envoie le lien pour valider la demande de validation à l'adresse mail du referent
        $message = "blablabla \"lien?id=". $id ."\""; 
        if(mail($to, $subject, $message)){
            $message =  'Votre demande a été envoyé avec succès!';
        } 
        else{
            $message = "Impossible d'envoyer le mail. Veuillez réessayer.";
        }

        // envoie une alerte à l'utilisateur pour savoir si la validation a bien etait enregistre
        echo "<script type='text/javascript'>alert('".$message."');</script>";

        echo "<script> window.location.replace(\"http://localhost/Jeunes/jeune/menu.php\");</script>";
    }
?>


<!--
    commentaire html
-->

</body>
</html>
<?php 
    session_start();
    if(!isset($_SESSION["connecte"]) && $_SESSION["connecte"] === false)
    {
        header("Location: description.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Demande</title>
    <link rel="stylesheet" type="text/css" href="#">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"></meta>
    
    <script>
        //fonction pour changer de formulaire à remplir
        function changement()
        {
            document.getElementById("main1").style.display = "none";
            document.getElementById("main2").style.display = "block";
        }
    </script>

    <style>
        .main
        {
            justify-content: center;
            width: 100%;
        }

        
        #main1
        {
            display: flex;
        }

        #main2
        {
            display: none;
            width: 75%;
        }
        
        .titre
        {
            text-align: center;
        }

        form
        {
            width: 100%;
        }

        .center
        {
            margin: 0 auto;
            width: 100%;
            margin-left: 10%;
            margin-top: 5%;
        }

        .text_field
        {
            font-size: 25px;
            width: 80%;
            height: auto;
        }        

        input[type=text], input[type=email] {
            border: none;
            border-bottom: 2px dotted palevioletred;
            width: auto;
        }

        label
        {
            display: inline-block;
        }

        .right
        {
            margin: 0 auto;
            margin-left: 5%;
            width: 30%;
        }

        h2
        {
            background-color: pink;
            margin: 0%;
        }

        .field_checkbox
        {
            border : 0;
            margin: 0 auto;
            padding: 0%;
            display: inline-block;
        }

        .submit
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

<strong id="titre1" class="titre">Décrivez votre expérience et mettez en avant ce que vous en avez retiré.</strong>

<strong id="titre2" class="titre">Indiquez une personne pour valider votre expérience.</strong>


<!--formulaires comprenant à la fois le formulaire de la demande du jeune et le formulaire des coordonnees du referent-->
<div id="main">
<form method="post" action="">

    <!--formulaire du jeune-->
    <div id="main1" class="dv_form">

        <!--partie du formulaire avec les champs textuelle au milieu-->
        <div class="center">
            <fieldset class="text_field">
                <label for="nom_jeune">NOM :</label>
                <input type="text" id="nom_jeune" name="nom_jeune" required><br>

                <label for="prenom_jeune">PRENOM :</label>
                <input type="text" id="prenom_jeune" name="prenom_jeune" required><br>

                <label for="date_jeune">DATE DE NAISSANCE :</label>
                <input type="text" id="date_jeune" name="date_jeune" required><br>

                <label for="email_jeune">Mail :</label>
                <input type="email" id="email_jeune" name="email_jeune" required><br>

                <label for="reseau_jeune">Réseau social :</label>
                <input type="text" id="reseau_jeune" name="reseau_jeune"><br>
                <br>
                <label for="engagement_jeune">MON ENGAGEMENT :</label>
                <input type="text" id="engagement_jeune" name="engagement_jeune"><br>

                <label for="duree_jeune">DUREE :</label>
                <input type="text" id="duree_jeune" name="duree_jeune"><br><br>
            </fieldset>
        </div>  
    
        <!--partie du formulaire avec les checkbox sur la droite-->
        <!---aaaaaaaaa1111111AAAAAAAAAAAAAAAAAAAAAAAAAAAAA FAIRE DU JAVA POUR LIMITER A QUATRE CHECKBOX-->
        <div class="right">
            <fieldset class="field_checkbox">
                <legend>MES SAVOIRS ETRE</legend>
                <div class="dv_checkbox">
                    <h2> Je suis*</h2>
                    <div>
                        <label>Autonome</label>
                        <input type="checkbox" value="autonome" name="check_list[]">
                    </div>
                
                    <div>
                        <label>Passionné</label>
                        <input type="checkbox" value="passionne" name="check_list[]">
                    </div>

                    <div>
                        <label>A l'écoute</label>
                        <input type="checkbox" value="ecoute" name="check_list[]">
                    </div>

                    <div>
                        <label>Organisé</label>
                        <input type="checkbox" value="organise" name="check_list[]">
                    </div>

                    <div>
                        <label>Passionné</label>
                        <input type="checkbox" value="passionne" name="check_list[]">
                    </div>

                    <div>
                        <label>Fiable</label>
                        <input type="checkbox" value="fiable" name="check_list[]">
                    </div>

                    <div>
                        <label>Patient</label>
                        <input type="checkbox" value="patient" name="check_list[]">
                    </div>

                    <div>
                        <label>Réfléchi</label>
                        <input type="checkbox" value="reflechi" name="check_list[]">
                    </div>

                    <div>
                        <label>Responsable</label>
                        <input type="checkbox" value="responsable" name="check_list[]">
                    </div>

                    <div>
                        <label>Sociable</label>
                        <input type="checkbox" value="sociable" name="check_list[]">
                    </div>
                
                    <div>
                        <label>Optimiste</label>
                        <input type="checkbox" value="optimiste" name="check_list[]">
                    </div>
                </div>
                <p><small>*Faire 3 choix</small></p>
            </fieldset>
            <button onclick="changement()">Valider</button>
        </div>
    </div>


    <br>


    <!--formulaire des coordonnees du referent-->
    <div id="main2" class="dv_form">

        <!--partie du formulaire avec les champs textuelle au milieu-->
        <div class="center">
            <fieldset class="text_field">
                <label for="nom">NOM :</label>
                <input type="text" id="nom" name="nom" required><br>

                <label for="prenom">PRENOM :</label>
                <input type="text" id="prenom" name="prenom" required><br>

                <label for="date">DATE DE NAISSANCE :</label>
                <input type="text" id="date" name="date" required><br>

                <label for="email">Mail :</label>
                <input type="email" id="email" name="email" required><br>
            </fieldset>
        </div>  

        <div class="right">
            <input class="submit" type="submit" value="Valider">
        </div>
    </div>

</form>
</div>

<!--
    commentaire html
-->

</body>
</html>



<?php

    if (isset($_POST['submit']))
    {
        if (isset($_POST['check_list[]']) && count($_POST['check_list[]']) == 3) 
        {

            // on ouvre le fichier csv contenant toutes les demandes
            $file = fopen("demandes.csv", "r+") or die("Ouverture du fichier demandes.csv impossible");

            $id = 1000;

            // on parcours tout les id pour avoir un nouvel id a associé à la demande
            while(!feof($file)) 
            {
                $line = fgets($file);
                $id++;
            }

            // on choisi un id qui n'a pas encore était associé à une demande
            $id++;

            // on doit envoyer le lien à l'adresse mail du référent
            $message = "blablabla \"lien?id=". $id ."\""; 
            $subject = "Demande de Validation:". $_POST["nom_jeune"] ." ". $_POST["prenom_jeune"];

            if(mail($to, $subject, $message))   // si l'envoi du mail est réussi
            {   
                $message =  'Votre demande a été envoyé avec succès!';

                // on doit enregistrer les champs des formulaires dans les fichiers csv correspondant
                
            ////////////////////////////////////////////////// ON VERIFIE SI IL A MIT DES , ????????????????????????

                // on écrit la demande dans le fichier csv en spécifiant tout les champs
                //id, id du compte, si validé ou non, champs du jeune, champs du referent
                $line1 = $id.",".$_SESSION["id"].",0,".$_POST["nom_jeune"].",".$_POST["prenom_jeune"].",".$_POST["date_jeune"].",";
                $line2 = $_POST["email_jeune"].",".$_POST["reseau_jeune"].",".$_POST["engagement_jeune"].",".$_POST["duree_jeune"].",";
                $line3 = implode(",",$_POST["check_list[]"]);
                $line4 = $_POST["nom"].",".$_POST["prenom"].",".$_POST["date"].",".$_POST["email"]."\n";

                $txt = $line1.$line2.$line3.$line4;
                fwrite($file, $txt);
            } 
            else{
                $message = "Il y a une erreur lors de l'envoi du mail. Veuillez réessayer.";
            }

            fclose($file);
        }
        else
        {
            $message = "Vous n'avez pas sélectionnées 3 savoirs être. Veuillez rééssayez";
        }
        
        // envoie une alerte à l'utilisateur pour savoir si la demande a bien était enregistré
        echo "<script type='text/javascript'>alert('".$message."');</script>";

        echo "<script> window.location.replace(\"http://localhost/Jeunes/jeune/menu.php\");</script>";
        
    }
?>
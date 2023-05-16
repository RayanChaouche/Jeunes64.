<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Validation</title>
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

        textarea
        {
            background-color: lightgreen;
            resize: none;
            border: none;
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

        #field_checkbox
        {
            border : 0;
            margin: 0 auto;
            padding: 0%;
            display: inline-block;
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
    <h1 class="gros_titre">RÉFÉRENT</h1>
    <h1>Je confimre la valeur de ton engagement</h1>
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

<strong id="titre">Confirmez cette expérience et ce que vous avez pu constater au contact de ce jeune.</strong>



<?php
    // on va chercher chaque demande à afficher

    // on ouvre le fichier csv contenant toutes les demandes
    $file = fopen("demandes.csv", "r") or die("Ouverture du fichier demandes.csv impossible");
    $i = 0;

    // on fait une liste des demandes nécessaires avec chaque champs
    while(!feof($file))
    {
        // on prend la ligne correspondant à l'id de la demande que l'on souhaite valider
  
        if($i != 0 && $data[0] == $_GET["id"]) // data existe pas à la 1ere boucle donc on met une condition pour ne pas faire d'erreur
        {
            $article = explode(',', $line);
        }

        $line = fgets($file);
        $data = explode(',', $line);

        $i++;
    }

    fclose($file);
?>





<!--formulaire du jeune-->
<div id="main">
<form method="post" action="">


    <!--formulaire du jeune-->
    <div id="main1" class="dv_form">

        <!--partie du formulaire avec les champs textuelle au milieu-->
        <div class="center">
            <fieldset class="text_field">
                <label for="nom_jeune">NOM :</label>
                <input type="text" id="nom_jeune" name="nom_jeune" value="<?=$article[3]?>" required><br>

                <label for="prenom_jeune">PRENOM :</label>
                <input type="text" id="prenom_jeune" name="prenom_jeune" value="<?=$article[4]?>" required><br>

                <label for="date_jeune">DATE DE NAISSANCE :</label>
                <input type="text" id="date_jeune" name="date_jeune" value="<?=$article[5]?>" required><br>

                <label for="email_jeune">Mail :</label>
                <input type="email" id="email_jeune" name="email_jeune" value="<?=$article[6]?>" required><br>

                <label for="reseau_jeune">Réseau social :</label>
                <input type="text" id="reseau_jeune" name="reseau_jeune" value="<?=$article[7]?>"><br>
                <br>
                <label for="engagement_jeune">MON ENGAGEMENT :</label>
                <input type="text" id="engagement_jeune" name="engagement_jeune" value="<?=$article[8]?>"><br>

                <label for="duree_jeune">DUREE :</label>
                <input type="text" id="duree_jeune" name="duree_jeune" value="<?=$article[9]?>"><br><br>
            </fieldset>
        </div>  

        <!--partie du formulaire avec les checkbox sur la droite-->
        <!---aaaaaaaaa1111111AAAAAAAAAAAAAAAAAAAAAAAAAAAAA FAIRE DU JAVA POUR LIMITER A QUATRE CHECKBOX-->
        <div class="right">
            <fieldset class="field_checkbox" disabled>
                <legend>MES SAVOIRS ETRE</legend>
                <div class="dv_checkbox">
                    <h2> Je suis*</h2>
                    <div>
                        <label for="<?=$article[10]?>"><?=$article[10]?></label>
                        <input type="checkbox" value="<?=$article[10]?>" id="<?=$article[10]?>" name="check_list[]">
                    </div>
                
                    <div>
                        <label for="<?=$article[11]?>"><?=$article[11]?></label>
                        <input type="checkbox" value="<?=$article[11]?>" id="<?=$article[11]?>"  name="check_list[]">
                    </div>

                    <div>
                        <label for="<?=$article[12]?>"><?=$article[12]?></label>
                        <input type="checkbox" value="<?=$article[12]?>" id="<?=$article[12]?>"  name="check_list[]">
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

        <!--partie du formulaire pour mettre un commentaire-->
        <div id="left">
            <h2> COMMENTAIRES</h2>
            <div id="dv_commentaire">
                <textarea name="commentaire" id="commentaire" cols="30" rows="30"></textarea>
            </div>

        </div>

        <!--partie du formulaire avec les champs textuelle au milieu-->
        <div id="center">
            <fieldset id="text_field">
                <label for="nom">NOM :</label>
                <input type="text" id="nom" name="nom" value="<?=$article[13]?>" required><br>

                <label for="prenom">PRENOM :</label>
                <input type="text" id="prenom" name="prenom" value="<?=$article[14]?>" required><br>

                <label for="date">DATE DE NAISSANCE :</label>
                <input type="text" id="date" name="date" value="<?=$article[15]?>" required><br>

                <label for="email">Mail :</label>
                <input type="email" id="email" name="email" value="<?=$article[16]?>" required><br>
                <br>

                <label for="presentation">PRÉSENTATION  :</label>
                <input type="text" id="presentation" name="presentation"><br>

                <label for="duree">DUREE :</label>
                <input type="text" id="duree" name="duree"><br><br>
            </fieldset>
        </div>   

        <!--formulaire checkbox sur la droite-->
        <!---aaaaaaaaa1111111AAAAAAAAAAAAAAAAAAAAAAAAAAAAA FAIRE DU JAVA POUR LIMITER A QUATRE CHECKBOX SI NECESSAIRE-->
        <div id="right">
            <fieldset id="field_checkbox">
                <legend>Ses savoir etre</legend>
                <div id="dv_checkbox">
                    <h2> Je confirme sa(son)*</h2>
                    <div>
                        <input type="checkbox" id="autonome" name="ref_list[]">
                        <label for="autonome">Autonome</label>
                    </div>
                    
                    <div>
                        <input type="checkbox" id="passionne" name="ref_list[]">
                        <label for="passionne">Passionné</label>
                    </div>

                    <div>
                        <input type="checkbox" id="ecoute" name="ref_list[]">
                        <label for="ecoute">A l'écoute</label>
                    </div>

                    <div>
                        <input type="checkbox" id="organise" name="ref_list[]">
                        <label for="organise">Organisé</label>
                    </div>

                    <div>
                        <input type="checkbox" id="passionne" name="ref_list[]">
                        <label for="passionne">Passionné</label>
                    </div>

                    <div>
                        <input type="checkbox" id="fiable" name="ref_list[]">
                        <label for="fiable">Fiable</label>
                    </div>

                    <div>
                        <input type="checkbox" id="patient" name="ref_list[]">
                        <label for="patient">Patient</label>
                    </div>

                    <div>
                        <input type="checkbox" id="reflechi" name="ref_list[]">
                        <label for="reflechi">Réfléchi</label>
                    </div>

                    <div>
                        <input type="checkbox" id="responsable" name="ref_list[]">
                        <label for="responsable">Responsable</label>
                    </div>

                    <div>
                        <input type="checkbox" id="sociable" name="ref_list[]">
                        <label for="sociable">Sociable</label>
                    </div>
                
                    <div>
                        <input type="checkbox" id="optimiste" name="ref_list[]">
                        <label for="optimiste">Optimiste</label>
                    </div>
                </div>
                <p><small>*Faire 3 choix</small></p>
            </fieldset>
            <input id="submit" type="submit" value="Valider">
        </div>

    </div>
    
    
</form>
</div>


<?php

    if (isset($_POST['submit']))
    {
        if (isset($_POST['ref_list[]']) && count($_POST['check_list[]']) == 3) 
        {


            // on ouvre le fichier en écriture et en lecture
            $reading = fopen('demandes.csv', 'r') or die("Ouverture du fichier demandes.csv impossible");
            $writing = fopen('myfile.tmp', 'w');

            $replaced = false;

            // on écrit chaque ligne sauf lorsque l'on tombe sur la ligne de la demande que l'on remplace par les nouveaux champs
            while (!feof($reading)) {
                $line = fgets($reading);
                if (stristr($line, $_SESSION["id"])) 
                {
                    $line = $_SESSION["id"].",".$_POST["username"].",".$_POST["password"]."\n";

                    ///////////////////////ATTENTION AU TEXTAREA JSP CMNT CA MARCHE

                    // on écrit la demande dans le fichier csv en spécifiant tout les champs
                    //id, id du compte, si validé ou non, champs du jeune, champs du referent
                    $line1 = $article[0].",".$article[1].",1,".$_POST["nom_jeune"].",".$_POST["prenom_jeune"].",".$_POST["date_jeune"].",";
                    $line2 = $_POST["email_jeune"].",".$_POST["reseau_jeune"].",".$_POST["engagement_jeune"].",".$_POST["duree_jeune"].",";
                    $line3 = implode(",",$_POST["check_list[]"]).",";
                    $line4 = $_POST["nom"].",".$_POST["prenom"].",".$_POST["date"].",".$_POST["email"].",".$_POST["presentation"].",".$_POST["duree"].",";
                    $line5 = implode(",",$_POST["ref_list[]"]).",".htmlentities($_POST["commentaire"])."\n";
                    
                    $line = $line1.$line2.$line3.$line4.$line5;

                    $replaced = true;
                }

                fputs($writing, $line);
            }
            fclose($reading); 
            fclose($writing);

            // on ferme les fichiers pour éviter les problèmes
            if ($replaced) 
            {
                rename('myfile.tmp', 'demandes.csv');
            } 
            else {
                unlink('myfile.tmp');
            }



            // on envoie un mail de validation au jeune
            $to = $_POST["email_jeune"];
            $subject = "Validation d'une de vos demande";
            $message = "Votre demande a bien était validé! \n Vous pouvez vous connecter et voir votre demande ici: http://localhost/Jeunes/jeune/menu.php";
            
            if(mail($to, $subject, $message))
            {
                $message = 'Votre validation bien était prise en compte!';
                $link = "http://localhost/Jeunes/jeune/merci.php";
            } 
            else
            {
                $message = "Impossible de valider la demande. Veuillez réessayer.";
                $link = "http://localhost/Jeunes/jeune/validation.php";
            }
        }
        else
        {
            $message = "Vous n'avez pas sélectionnées 3 savoirs être. Veuillez rééssayez";
            $link = "http://localhost/Jeunes/jeune/validation.php";           
        }

        // envoie une alerte à l'utilisateur pour savoir si la demande a bien était enregistré
        echo "<script type='text/javascript'>alert('".$message."');</script>";

        echo "<script> window.location.replace(\"".$link."\");</script>";

    }
    
?>


<!--
    commentaire html
-->

</body>
</html>
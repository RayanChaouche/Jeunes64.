
<?php
// on va devoir mettre les informations de la demande à référencer dans le form, pour cela nous devons retrouver les données de la demande

// on ouvre le fichier csv contenant tout les demandes
$file = fopen("demandes.csv", "r") or die("Ouverture du fichier demandes.csv impossible");

// on cherche la ligne correspondant a la demande que l'on va valider
while(!feof($file) || $_GET["id"] != $data[0]) 
{
    $line = fgets($file);
    $data = explode(';', $line);
}

////////////////// FAUT FAIRE POUR CHAQUE CHAMPS AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA COMME CA ON PEUT REMPLACER DANS LE FORM
$db[$i] = [$data[0], $data[1]];

////////////////// FAUT REMPLIR LES CHAMPS DU FORM AVEC DB (DB NE FONCTIONNE PAS PAREIL ICI ATTENTION) AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA 
?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Validation</title>
    <link rel="stylesheet" type="text/css" href="#">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"></meta>
    
    <script>
        // commentaire ligne js
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
            width: 75%;
        }

        #center
        {
            margin: 0 auto;
            width: 66%;
            margin-left: 30%;
            margin-top: 5%;
        }

        #text_field
        {
            font-size: 30px;
            width: 100%;
            height: 90%;
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

        #right
        {
            margin: 0 auto;
            padding-left: 20%;
            width: auto;
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

<strong id="titre">Décrivez votre expérience et mettez en avant ce que vous en avez retiré.</strong>

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

            <label for="reseau">Réseau social :</label>
            <input type="text" id="reseau" name="reseau"><br>
            <br>
            <label for="engagement">MON ENGAGEMENT :</label>
            <input type="text" id="engagement" name="engagement"><br>

            <label for="duree">DUREE :</label>
            <input type="text" id="duree" name="duree"><br><br>
        </fieldset>
    </div>  
    
    <!--formulaire checkbox sur la droite-->
    <!---aaaaaaaaa1111111AAAAAAAAAAAAAAAAAAAAAAAAAAAAA FAIRE DU JAVA POUR LIMITER A QUATRE CHECKBOX-->
    <div id="right">
        <fieldset id="field_checkbox">
            <legend>Mes savoir etre</legend>
            <div id="dv_checkbox">
                <h2> Je suis*</h2>
                <div>
                    <input type="checkbox" id="autonome" name="autonome">
                    <label for="autonome">Autonome</label>
                </div>
                
                <div>
                    <input type="checkbox" id="passionne" name="passionne">
                    <label for="passionne">Passionné</label>
                </div>

                <div>
                    <input type="checkbox" id="ecoute" name="ecoute">
                    <label for="ecoute">A l'écoute</label>
                </div>

                <div>
                    <input type="checkbox" id="organise" name="organise">
                    <label for="organise">Organisé</label>
                </div>

                <div>
                    <input type="checkbox" id="passionne" name="passionne">
                    <label for="passionne">Passionné</label>
                </div>

                <div>
                    <input type="checkbox" id="fiable" name="fiable">
                    <label for="fiable">Fiable</label>
                </div>

                <div>
                    <input type="checkbox" id="patient" name="patient">
                    <label for="patient">Patient</label>
                </div>

                <div>
                    <input type="checkbox" id="reflechi" name="reflechi">
                    <label for="reflechi">Réfléchi</label>
                </div>

                <div>
                    <input type="checkbox" id="responsable" name="responsable">
                    <label for="responsable">Responsable</label>
                </div>

                <div>
                    <input type="checkbox" id="sociable" name="sociable">
                    <label for="sociable">Sociable</label>
                </div>
            
                <div>
                    <input type="checkbox" id="optimiste" name="optimiste">
                    <label for="optimiste">Optimiste</label>
                </div>
            </div>
            <p><small>*Faire 3 choix minimum</small></p>
        </fieldset>
        <input id="submit" type="submit" value="Valider">
    </div>

    
</form>
</div>

<?php

    if (isset($_POST['submit']))
    {


        //// FAUT CHANGER LES INFOS DE LA DEMANDE

/// faut TEST CA
        $reading = fopen('myfile', 'r');
$writing = fopen('myfile.tmp', 'w');

$replaced = false;

while (!feof($reading)) {
  $line = fgets($reading);
  if (stristr($line,'certain word')) {
    $line = "replacement line!\n";
    $replaced = true;
  }
  fputs($writing, $line);
}
fclose($reading); fclose($writing);
// might as well not overwrite the file if we didn't replace anything
if ($replaced) 
{
  rename('myfile.tmp', 'myfile');
} else {
  unlink('myfile.tmp');
}


/// JUSQUE LA 



        //// FAUT METTRE  LES CHAMPS NECESSAIRE POUR FAIRE LE MESSAGE, FAUT METTRE UNE DESCRIPTION DU SITE SUR LA PAGE DU LIEN
        $message = "blablabla \"lien?id=". $id ."\""; 
        if(mail($to, $subject, $message)){
            echo 'Votre demande a été envoyé avec succès!';
        } 
        else{
            echo "Impossible d'envoyer le mail. Veuillez réessayer.";
        }

        echo "<script> window.location.replace(\"http://localhost/Jeunes/jeune/verificationDemande.php\");</script>";
    }

?>


<!--
    commentaire html
-->

</body>
</html>
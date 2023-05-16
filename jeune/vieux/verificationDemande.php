<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Création...</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"></meta>
    <script>

    </script>
    <style>

    </style>

    <script>

    </script>
</head>
<body>



<!--
    JE CROIS QUE L'ON PEUT METTRE TOUT LE CODE DANS LE ISSET A LA PLACE DU ECHO DE JEUNE.PHP  PSK CA UTILISE PAS DES VARIABLES DE SESSION MAIS POST

    JE CROIS MM QU'ON EN A PAS BESOIN ON METS JUSTE UN ID DIFFERENT POUR CHAQUE DEMANDE ET IL PEUT SPAMMER SON REFERENT T
-->

<p>Création de la demande...</p>


<?php

    // on ouvre le fichier csv contenant tout les demandes
    $file = fopen("demandes.csv", "r+") or die("Ouverture du fichier demandes.csv impossible");

    $i = 1000;

    // on fait une liste des id
    $db = array();
    while(!feof($file)) 
    {
        $line = fgets($file);
        $data = explode(',', $line);
        $i++;

        ////////////////// FAUT FAIRE POUR CHAQUE CHAMPS AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA PEUT ETRE EN FAITE RIEN NEST SUR AAAAAAAAAAAAAAAAAAAA
        ///////////////// EN TOUT CAS FAUT METTRE L'ID CA C SUR PSK SINN ON PEUT PAS EN TROUVER UN
        $db[$i] = $data[0];
    }

    // on choisi un id qui n'a pas encore était associé à une demande
    $id = $i + 1;
    
    
///////////// ON VERIFIE SI IL A MIT DES , ????????????????????????

////////////// FAUT METTTTTTTTTTTTTTTTTTRRRRRRRRRREEEEEEEEEEEEEEEEEEEEE TOUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUT LES CHAMPS AAAAAAAAAAAAAAAAAAAAAA
    // on ecrit la demande dans le fichier csv
    $txt = $id.",".$_POST["tkt"].",".$_POST["tkt2"]."\n";
    fwrite($file, $txt);

    // on redirige vers la page du référent pour que le jeune puisse entrer les coordonnées de ce dernier
    echo "<script> window.location.replace('http://localhost/Jeunes/jeune/validation_jeune.php?id=".$id."'); </script>";

    fclose($file);
?>

<!--
    commentaire 
-->

</body>
</html>
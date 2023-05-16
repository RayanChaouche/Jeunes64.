
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
	<title>Jeune</title>
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

        #cache
        {
            display: none;
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
    <h1>Menu</h1>
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



<form action="" method="post">
    <fieldset id="profil" disabled>
        <input type="text" name="username" placeholder="<?=$_SESSION["username"]?>"/>
        <label for="username">Nom d'utilisateur:</label>

        <input type="text" name="password" placeholder="<?=$_SESSION["password"]?>"/>
        <label for="username">Mot de passe:</label>
    </fieldset>
    <input type="submit" name="submit" value="Valider" id="cache">
    <input type="button" name="edit" value="Modifier le profil" id="pas_cache">
</form>



<?php
    if(isset($_POST['edit']))   // on rend les informations modifiables
    {
        // on rend les informations du formulaires modifiables, on cache le bouton et on montre le submit
        echo "<script>document.getElementById(\"profil\").disabled = false;</scritp>";
        echo "<script>document.getElementById(\"cache\").style.display = \"block\";</scritp>";
        echo "<script>document.getElementById(\"pas_cache\").style.display = \"none\";</scritp>";
        
    }
    else if(isset($_POST['submit'])) // on change les informations dans le csv
    {
        // on ouvre le fichier en écriture et en lecture
        $reading = fopen('comptes.csv', 'r') or die("Ouverture du fichier comptes.csv impossible");
        $writing = fopen('myfile.tmp', 'w');

        $replaced = false;

        // on écrit chaque ligne sauf lorsque l'on tombe sur la ligne du compte que l'on remplace par les nouveaux champs
        while (!feof($reading)) {
            $line = fgets($reading);
            if (stristr($line, $_SESSION["id"])) 
            {
                $line = $_SESSION["id"].",".$_POST["username"].",".$_POST["password"]."\n";
                $replaced = true;
            }

            fputs($writing, $line);
        }
        fclose($reading); 
        fclose($writing);

        // on ferme les fichiers pour éviter les problèmes
        if ($replaced) 
        {
        rename('myfile.tmp', 'comptes.csv');
        } else {
        unlink('myfile.tmp');
        }
    }
?>
<!--on fait un div pour afficher les informations et un form pour les changer
<div id="compte">
    
    <p>Nom d'utilisateur:</p>
    <p>Mot de passe:</p>
    <br>
    <button onclick="changement()">Modifier le profil</button>
</div>

<form action="" method="post" id="cache">

</form>
-->


<!--
       LE JEUNE VOIT SES DONNEES PERSONELLES ET PEUT LES MODIFIES
-->

<!--
    commentaire html
-->

</body>
</html>
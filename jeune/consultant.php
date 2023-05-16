



<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Consultant</title>
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

        form
        {
            display: inline-flex;
            width: 75%;
        }

        .center
        {
            margin: 0 auto;
            width: 66%;
            margin-top: 5%;
            padding: 0%;
            float: left;
        }

        .dv_check
        {
            overflow: hidden;
        }

        .text_field
        {
            font-size: 30px;
            width: 100%;
            height: 90%;
        }

        

        .field_checkbox
        {
            border : 0;
            margin: 0 auto;
            padding: 0%;
            display: inline-block;
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
            padding-left: 20%;
            width: auto;
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
    <h1 class="gros_titre">CONSULTANT</h1>
    <h1>Je donne de la valeur à ton engagement</h1>
</header>

<!--menu en dessous du header-->
<div class="menu">
    <ul><!--AAAA CONSULTANT CONSULTANT CONSULTANT on surligne le lien surlequel nous nous trouvons et on peut pas le cliquer (r surligner si visiteur) -->
        <li><a href="#">JEUNE</a></li>
        <li><a href="#">RÉFÉRENT</a></li>
        <li><a href="#">CONSULTANT</a></li>
        <li><a href="#">PARTENAIRES</a></li>
    </ul>
</div>

<strong id="titre">Validez cet engagement en prenant en compte sa valeur</strong>


<?php
    // on va chercher chaque demande à afficher

    // on ouvre le fichier csv contenant toutes les demandes
    $file = fopen("demandes.csv", "r") or die("Ouverture du fichier demandes.csv impossible");
    $i = 0;

    // on fait une liste des demandes nécessaires avec chaque champs
    $articles = array();
    while(!feof($file)) //////////////////////////////AAAAAAAAAAAAAAAAAAAA FAUT FAIRE EN FONCTION DES ENTREES DU REFERENTS
    {
        // on prend chaque ligne avec un id correspondant à un id present dans $_get["id"]   $j parcourt get, $i parcourt les lignes du fichier
        for ($j = 0; $j < count($_GET["id"]); $j++) 
        {    
            if($i!=0 && $data[0] == $_GET["id"][$j])
            {
                $articles[$i] = explode(',', $line);
            }
        } 
        $line = fgets($file);
        $data = explode(',', $line);
        $i++;
    }

    fclose($file);





    // on va faire la liste de chaque demande
    foreach($articles as $article):
?>








<!--formulaire du jeune-->
<div id="wrapper_all">
<form action="#">
    <div id="wrapper_left">
        <fieldset id="left_field" disabled>
            <h2 id="titre_jeune">Jeune</h2>

            <!--formulaire textuelle au milieu-->
            <div class="center" id="left_center">
        
                <label for="left_nom">NOM :</label>
                <input type="text" class="nom" id="left_nom" name="nom" value="<?=$article[2]?>" readonly><br>

                <label for="left_prenom">PRENOM :</label>
                <input type="text" class="prenom" id="left_prenom" name="prenom" value="<?=$article[3]?>"readonly><br>

                <label for="left_date">DATE DE NAISSANCE :</label>
                <input type="text" class="date" id="left_date" name="date" value="<?=$article[4]?>" readonly><br>

                <label for="left_email">Mail :</label>
                <input type="email" class="email" id="left_email" name="email" value="<?=$article[5]?>" readonly><br>

                <label for="left_reseau">Réseau social :</label>
                <input type="text" class="reseau" id="left_reseau" name="reseau" value="<?=$article[6]?>" readonly><br>
                <br>
                <label for="left_engagement">MON ENGAGEMENT :</label>
                <input type="text" class="engagement" id="left_engagement" name="engagement" value="<?=$article[7]?>" readonly><br>

                <label for="left_duree">DUREE :</label>
                <input type="text" class="duree" id="left_duree" name="duree" value="<?=$article[8]?>" readonly><br><br>
            </div>  
            
            <!--formulaire checkbox sur la droite-->
            <div class="dv_check">
                <fieldset class="field_checkbox" disabled>
                    <legend>Mes savoir etre</legend>
                    <div class="dv_checkbox">
                        <h3> Je suis*</h3>
                        <div>
                            <input type="checkbox" class="check" id="<?=$article[9]?>" checked readonly>
                            <label for="<?=$article[9]?>"><?=$article[9]?></label>
                            <input type="checkbox" class="check" id="<?=$article[10]?>" checked readonly>
                            <label for="<?=$article[10]?>"><?=$article[10]?></label>
                            <input type="checkbox" class="check" id="<?=$article[11]?>" checked readonly>
                            <label for="<?=$article[11]?>"><?=$article[11]?></label>
                        </div>
                    </div>
                </fieldset>
            </div>
            
        </fieldset>
    </div>

    <div id="wrapper_right">
        <fieldset id="right_field" disabled>
            <h2 id="titre_referent">RÉFÉRENT</h2>
            <!--formulaire textuelle au milieu-->
            <div class="center">
        
                <label for="right_nom">NOM :</label>
                <input type="text" class="nom" id="right_nom" name="nom" value="<?=$article[12]?>" readonly><br>

                <label for="right_prenom">PRENOM :</label>
                <input type="text" class="prenom" id="right_prenom" name="prenom" value="<?=$article[13]?>" readonly><br>

                <label for="right_date">DATE DE NAISSANCE :</label>
                <input type="text" class="date" id="right_date" name="date" value="<?=$article[14]?>" readonly><br>

                <label for="right_email">Mail :</label>
                <input type="email" class="email" id="right_email" name="email" value="<?=$article[15]?>" readonly><br>

                <label for="right_reseau">Réseau social :</label>
                <input type="text" class="reseau" id="right_reseau" name="reseau" value="<?=$article[16]?>" readonly><br>
                <br>
                <label for="right_engagement">Présentation :</label>
                <input type="text" class="engagement" id="right_engagement" name="engagement" value="<?=$article[17]?>" readonly><br>

                <label for="right_duree">DUREE :</label>
                <input type="text" class="duree" id="right_duree" name="duree" readonly><br><br>

                <label for="commentaire">COMMENTAIRE :</label>
                <input type="text" id="commentaire" value="<?=$article[22]?>" readonly><br><br>
            </div>   
    
            <!--formulaire checkbox sur la droite-->
            <div class="dv_check">
                <fieldset class="field_checkbox" id="right_field_checkbox" disabled>
                    <legend>Ses savoir etre</legend>
                    <div class="dv_checkbox" id="right_dv_checkbox">
                        <h4> Je confirme sa(son)*</h4>
                        <div>
                            <input type="checkbox" class="check" id="<?=$article[19]?>" checked readonly>
                            <label for="<?=$article[19]?>"><?=$article[19]?></label><br>
                            <input type="checkbox" class="check" id="<?=$article[20]?>" checked readonly>
                            <label for="<?=$article[20]?>"><?=$article[20]?></label><br>
                            <input type="checkbox" class="check" id="<?=$article[21]?>" checked readonly>
                            <label for="<?=$article[21]?>"><?=$article[21]?></label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </fieldset>
    </div>

</form>
</div>


<?php
    endforeach;
?>

<!--
    SUR CETTE PAGE IL FAUT LA LISTE DES DEMANDES ENVOYES MAIS D'ABORD UNE DESCRIPTION DU SITE ET LES DONNEES DU JEUNES
    FAUT PTET FAIRE UN MODEL EN UTILISANT LE CONSULTANT.HTML  POUR FAIRE LA LISTE DES DEMANDES RECUS
    commentaire html
-->

</body>
</html>
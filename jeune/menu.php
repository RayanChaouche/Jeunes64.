<?php 
    session_start();
    if(!isset($_SESSION["connecte"]) && $_SESSION["connecte"] === false)
    {
        header("Location: description.php");
        die();
    }


    function disabled($article, $context)
    {
        if($article[1] == 0)    // si l'article n'est pas validé
        {
            if($context == 0) // si on cherche a disable la checkbox
            {
               echo "disabled";
            }
            else if($context == 1) // si on cherche a donner l'état de la demande
            {
                echo "<label style=\"color : grey\">en attente</label>";
            }
        }
        else if($context == 1) // si la demande est validé et que l'on cherche à donner l'état de la demande
        {
            echo "<label style=\"color : green\">validé</label>";
        }
    }
?>



<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Jeune</title>
    <link rel="stylesheet" type="text/css" href="#">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"></meta>
    
    <script>
        // fonction pour faire apparaitre le formulaire pour envoyer au consultant
        function mail()
        {
            document.getElementById("dv_consultant").style.display = "block";
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
        .article
       {
            margin: 0 auto;
            display: inline-flex;
            width: 100%;
            padding-left: 35%;
            
       }
       .left
       {
            width: 10%;
       }
       .right
       {
            width: 70%;
       }

       #dv_consultant
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


<?php
    $file = fopen("demandes.csv", "r") or die("Ouverture du fichier demandes.csv impossible");

    $i = 0;

    // on fait une liste des demandes       16 champs       id, valide, engagement, duree, nom, prenom, email 
    $articles = array();
    while(!feof($file)) 
    {
        // on met chaque ligne correspondant au compte dans articles (en prennant que les champs nécessaires)               0,2,7,8,9,10,11,13
        if($i!=0 && $data[1] == $_SESSION["id"])
        {
            $articles[$i] = [$data[0],$data[2],$data[7],$data[8],$data[9],$data[10],$data[11],$data[13]];
        } 
        $line = fgets($file);
        $data = explode(',', $line);
        $i++;
    }

    fclose($file);
?>


<!--on fait un div class=article par demande-->
<?php foreach($articles as $article):?>
<div class="article">
    <div class="left">
        <input type="checkbox" name="check_list[]" value="<?= $article[0]?>" <?= disabled($article,0)?>>
        <?= disabled($article,1)?>
    </div>
    <div class="right">
        <p>Engagement:<?=$article[2]?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Durée:<?=$article[3]?></p>
        <p>Référent:<?=$article[4]?> &nbsp; <?=$article[5]?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$article[6]?></p>
    </div>
</div>
<?php endforeach ?>


<input type="submit" name="submit_cv" value="Faire un livret d'expériences à partir des demandes sélectionnées">
<button onclick="mail()">Envoyer les demandes sélectionnées à un consultant</button>


<!--formulaire caché pour entrer les coordonnées du consultant-->
<div id="dv_consultant">
    <form action="" method="post">
        <input type="text" name="consultant_mail">
        <label for="consultant_mail">Adresse mail du consultant:</label>
        <input type="submit" name="submit_mail" value="Envoyer">
    </form>
</div>
<!--RAJOUTER LES INPUTS NECESSAIRES AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA-->


<?php
    // si le jeune appuie sur le bouton d'envoie du mail
    if(isset($_POST['submit_mail']))
    {
        if(!empty($_POST['check_list'])) // on verifie si il a bien validé au moins une checkbox
        {
            $ids = '';

            $i = 0;

            // on doit faire le lien de façon à retrouver tout les ids avec get
            foreach($_POST['check_list'] as $article) // on cherche à avoir un string de cette forme la: a[]=1&a[]=2&a[]=3
            {
                if($i==0)   // pour la 1ere iteration nous ne devons pas mettre un &
                {
                    $ids = $ids ."id[]=". $article[0];
                    $i=1;
                }
                else
                {
                    $ids = $ids ."&id[]=". $article[0];
                }
            }

            // on fait le lien et le message au consultant
            $to = $_POST["consultant_mail"];
            $subject = "Demande de consultation";
            $message = "blablabla \"lien?". $ids ."\"";

            if(mail($to, $subject, $message))   // si l'envoi du mail est réussi
            {   
                $message =  'Votre mail a été envoyé avec succès!';
            } 
            else
            {
                $message = "Il y a une erreur lors de l'envoi du mail. Veuillez réessayer.";
            }

            // envoie une alerte à l'utilisateur pour savoir si la validation a bien etait enregistre
            echo "<script type='text/javascript'>alert('".$message."');</script>";

            echo "<script> window.location.replace(\"http://localhost/Jeunes/jeune/menu.php\");</script>";
            
        }
    }

    // fonction pour faire le pdf et html à partir des demandes sélectionner
    if(isset($_POST['submit_cv']))
    {
        if(!empty($_POST['check_list'])) // on verifie si le jeune a bien validé au moins une checkbox
        {


            // on ouvre le fichier csv contenant toutes les demandes
            $file = fopen("demandes.csv", "r") or die("Ouverture du fichier demandes.csv impossible");

            // on cherche toute les demandes que l'on doit écrire dans le livret
            $articles = array(); 
            $i = -1;
            while(!feof($file)) // on parcourt le fichier
            {
                
                if($i != -1) // $data n'existe pas à la 1 ere boucle donc pas besoin de comparer les id
                {
                    foreach($_POST['check_list'] as $id) // pour chaque demande validée
                    {
                        if($data[0] == $id) // si la ligne que l'on parcourt est une ligne que l'on veut utiliser dans le fichier html 
                        {
                            $articles[$i] = explode(',', $line);
                            $i++;
                        }
                    }
                }
                else
                {
                    $i = 0;
                }

                $line = fgets($file);
                $data = explode(',', $line);
            }

            fclose($file);

        // maintenant que nous avons la liste des demandes, on peut les écrires dans un fichier html
        $file = fopen("livret.html", "w") or die("Ouverture du fichier demandes.csv impossible");

        // on fait le texte à écrire dans le fichier html (c'est en grande partie du copier coller de consultant.php)
        $line='<!DOCTYPE html>
        <html lang="fr">
        <head>
            <title>Livret</title>
            <link rel="stylesheet" type="text/css" href="REEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE FAUT FAIRE UN CSS POUR LE HTML ? OU ALORS METTRE DANS STYLE?">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"></meta>
        </head>
        <body>';
    
        foreach($articles as $article): // on met chaque demande dans le texte du fichier html
            $line = $line.'
<!--formulaire du jeune-->
<div id="wrapper_all">
<form action="#">
    <div id="wrapper_left">
        <fieldset id="left_field" disabled>
            <h2 id="titre_jeune">Jeune</h2>

            <!--formulaire textuelle au milieu-->
            <div class="center" id="left_center">
        
                <label for="left_nom">NOM :</label>
                <input type="text" class="nom" id="left_nom" name="nom" value="'.$article[2].'" readonly><br>

                <label for="left_prenom">PRENOM :</label>
                <input type="text" class="prenom" id="left_prenom" name="prenom" value="'.$article[3].'"readonly><br>

                <label for="left_date">DATE DE NAISSANCE :</label>
                <input type="text" class="date" id="left_date" name="date" value="'.$article[4].'" readonly><br>

                <label for="left_email">Mail :</label>
                <input type="email" class="email" id="left_email" name="email" value="'.$article[5].'" readonly><br>

                <label for="left_reseau">Réseau social :</label>
                <input type="text" class="reseau" id="left_reseau" name="reseau" value="'.$article[6].'" readonly><br>
                <br>
                <label for="left_engagement">MON ENGAGEMENT :</label>
                <input type="text" class="engagement" id="left_engagement" name="engagement" value="'.$article[7].'" readonly><br>

                <label for="right_duree">DUREE :</label>
                <input type="text" class="duree" id="right_duree" name="duree" readonly><br><br>

                <label for="commentaire">COMMENTAIRE :</label>
                <input type="text" id="commentaire" value="'.$article[22].'" readonly><br><br>
            </div>  
            
            <!--formulaire checkbox sur la droite-->
            <div class="dv_check">
                <fieldset class="field_checkbox" disabled>
                    <legend>Mes savoir etre</legend>
                    <div class="dv_checkbox">
                        <h3> Je suis*</h3>
                        <div>
                            <input type="checkbox" class="check" id="'.$article[9].'" checked readonly>
                            <label for="'.$article[9].'">'.$article[9].'</label>
                            <input type="checkbox" class="check" id="'.$article[10].'" checked readonly>
                            <label for="'.$article[10].'">'.$article[10].'</label>
                            <input type="checkbox" class="check" id="'.$article[11].'" checked readonly>
                            <label for="'.$article[11].'">'.$article[11].'</label>
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
                <input type="text" class="nom" id="right_nom" name="nom" value="'.$article[12].'" readonly><br>

                <label for="right_prenom">PRENOM :</label>
                <input type="text" class="prenom" id="right_prenom" name="prenom" value="'.$article[13].'" readonly><br>

                <label for="right_date">DATE DE NAISSANCE :</label>
                <input type="text" class="date" id="right_date" name="date" value="'.$article[14].'" readonly><br>

                <label for="right_email">Mail :</label>
                <input type="email" class="email" id="right_email" name="email" value="'.$article[15].'" readonly><br>

                <label for="right_reseau">Réseau social :</label>
                <input type="text" class="reseau" id="right_reseau" name="reseau" value="'.$article[16].'" readonly><br>
                <br>
                <label for="right_engagement">Présentation :</label>
                <input type="text" class="engagement" id="right_engagement" name="engagement" value="'.$article[17].'" readonly><br>

                <label for="right_duree">DUREE :</label>
                <input type="text" class="duree" id="right_duree" name="duree" value="'.$article[18].'" readonly><br><br>
            </div>  
    
            <!--formulaire checkbox sur la droite-->
            <div class="dv_check">
                <fieldset class="field_checkbox" id="right_field_checkbox" disabled>
                    <legend>Ses savoir etre</legend>
                    <div class="dv_checkbox" id="right_dv_checkbox">
                        <h4> Je confirme sa(son)*</h4>
                        <div>
                            <input type="checkbox" class="check" id="'.$article[19].'" checked readonly>
                            <label for="'.$article[19].'">'.$article[19].'</label><br>
                            <input type="checkbox" class="check" id="'.$article[20].'" checked readonly>
                            <label for="'.$article[20].'">'.$article[20].'</label><br>
                            <input type="checkbox" class="check" id="'.$article[21].'" checked readonly>
                            <label for="'.$article[21].'">'.$article[21].'</label>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="dv_commentaire">
                <h2>COMMENTAIRE DU RÉFÉRENT</h2>
                <textarea name="commentaire" id="commentaire" cols="50" rows="4">'.$article[22].'</textarea>
            </div>
        </fieldset>
    </div>

</form>
</div>
';

    endforeach;
    $line=$line.'
</body>
</html>';

            // on écrit le contenu du fichier html
            fwrite($file,htmlentities($line));

            /////////////////////////////////////// Dompdf https://github.com/dompdf/dompdf
            //////////////// BON FAUT INSTALLER LE TRUC AU DESSUS ET JSP COMMENT ON FAIT
            //////////////////// A PARTIR DE LA C DU CHATGPT DE LA 
            ///////// require_once 'chemin_vers_dompdf/autoload.inc.php';
            ///use Dompdf\Dompdf;

/*
            //$dompdf = new Dompdf();

            // Chargez le contenu HTML depuis votre fichier
            $html = file_get_contents('chemin_vers_votre_fichier.html');

            // Générez le PDF
            $dompdf->loadHtml($html);
            $dompdf->render();

            // Enregistrez le fichier PDF sur le serveur ou envoyez-le en sortie
            $dompdf->stream("votre_fichier.pdf");


///////////////////////////////////////////////////////////// lien pdf
            // Chemin vers le fichier PDF généré
            $cheminPDF = 'chemin_vers_le_fichier.pdf';

            // Générer le lien de téléchargement
            echo '<a href="' . $cheminPDF . '" download> Télécharger le fichier PDF </a>';

///////////////////////////////////////////////////////////// lien html
            //// Chemin vers le fichier HTML
            $cheminHTML = 'chemin_vers_le_fichier.html';

            // Générer le lien de téléchargement
            echo '<a href="' . $cheminHTML . '" download> Télécharger le fichier HTML </a>';
///////////////////////////////////////////     JUSQUE LA */

            fclose($file);
        }
    }

?>



<!--

    div article
        div gauche
            checkbox  etat
        div 
        div droite
            les champs
        div
    div

    avec les fonctions, on prend les checkbox qui sont checked (ca donne les id que l'on veut) et on fait le pdf et le html

    FAUT QU'IL PUISSE FAIRE UN CV A PARTIR DE CHAQUE DEMANDE 
    FAUT QU'IL PUISSE ENVOYE SES DEMANDES AU CONSULTANT AUSSI 
-->

<!--
    commentaire html
-->

</body>
</html>
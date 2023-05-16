<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Description</title>
    <link rel="stylesheet" type="text/css" href="#">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"></meta>
    
    <script>
        //commentaire ligne js
    </script>

    <style>

        table 
        {
            table-layout: fixed;
        }

        td 
        {
            width: calc(100%/3);
        }

        .etape_dv
        {
            display: inline-flex;
            
        }
        
        .dv
        {
            border: solid;
            padding: 0%;
            margin-left: 10%;

            text-align: center;

            min-width: 17em;
            max-width: 17em;
            width:17em;
            min-height: 15em;
            max-height: 15em;
            height: 15em;
        }

        .titre
        {
            padding: 0%;
            width: 100%;
            height: 50%;
            margin: 0%;
            font-size: 40px;
        }

        .titre p
        {
            padding: 0%;
            margin: 0%;
        }

        .contenu
        {
            height: 50%;
            width: 100%;
            margin: 0%;
            padding: 0%;
            font-size: 20px;
        }

        .titre.consultation
        {
            float: right;
            background-image:
            linear-gradient(
            to right,
                white,
                dodgerblue 30%
            )
        }

        .contenu.consultation
        {
            float: right;
            background-image:
            radial-gradient(
            circle at top left,
                white,
                lightblue 99%
            );
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
    <h1>Pour faire de l'engagement une valeur</h1>
</header>

<!-- barre de navigation en dessous du header -->
<div id="dv_nav">
        <ul id = "nav">
            <!-- CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS -->
            <li><a href="#">JEUNE</a>
                <ul>
                    <li class="souslien"><a href="connexion.php">CONNEXION</a></li>
                    <li class="souslien"><a href="creation.php">S'INSCRIRE</a></li>
                </ul>
            </li>

            <li><a href="#">RÉFÉRENT</a></li>
            <li><a href="#">CONSULTANT</a></li>
            <li><a href="#">PARTENAIRES</a></li>
        </ul>
</div>

<!--texte de la description-->
<table>
    <tr>
        <td>
            <h2>De quoi s’agit-il ?</h2>
            <p>
                <strong>D’une opportunité : </strong>
                celle qu’un engagement quel qu’il soit puisse être considérer à sa juste valeur !
                <br>
                Toute expérience est source d’enrichissement et doit d’être reconnu largement.
                <br>
                Elle révèle un potentiel, l’expression d’un savoir-être à concrétiser.
            </p>
        </td>

        <td>
            <h2>A qui s’adresse-t’il ?</h2>
            <p>
                <strong>A vous, jeunes entre 16 et 30 ans, </strong> 
                qui vous êtes investis spontanément dans une association ou dans tout type d’action formelle ou informelle,
                et qui avez partagé de votre temps, de votre énergie, pour apporter un soutien, une aide, une compétence.
            </p>

            <p>
                <strong>A vous, responsables de structures ou référents d’un jour, </strong>
                qui avez croisé la route de ces jeunes et avez bénéficié même ponctuellement de cette implication citoyenne !
                <br>
                C’est l’occasion de vous engager à votre tour pour ces jeunes en confirmant
                leur richesse pour en avoir été un temps les témoins mais aussi les bénéficiaires !
            </p>
        </td>
        
        <td>
            <p>
                <strong>A vous, employeurs, recruteurs en ressources humaines, représentants d’organismes de formation, </strong>
                qui recevez ces jeunes, pour un emploi, un stage, un cursus de qualification, pour qui le savoir-être
                constitue le premier fondement de toute capacité humaine.
            </p>

            <h2 class="h2_but_bigger">Cet engagement est une ressource à valoriser au fil d'un parcours en 3 étapes :</h2>
        </td>
    </tr>
</table>


<!-- 1 div wrapper pour les 3 blocs, 1 bloc = 1 div-->
<div class="etape_dv">
<div class="dv valorisation">
    <p class="titre">
        <b>1<sup>ère</sup> étape</b>
        <br>
        la valorisation
    </p>
    <p class="contenu">
        Décrivez votre expérience
        et mettez en
        avant ce que vous en
        avez retiré.
    </p>
</div>

<div class="dv confirmation">
    <p class="titre">
        <b>2<sup>ème</sup> étape</b>
        <br>
        la confirmation
    </p>
    <p class="contenu">
        Confirmez cette expérience
        et ce que vous
        avez pu constater au
        contact de ce jeune.
    </p>
</div>

<div class="dv consultation">
    <div class="titre consultation">
        <p>
            <b>3<sup>ème</sup> étape</b>
            <br>
            la consultation
        </p>
    </div>
    <div class="contenu consultation">
        <p>
            Validez cet engagement
            en prenant en compte sa
            valeur.
        </p> 
    </div>
</div>
</div>

<!--
    commentaire html
-->

</body>
</html>
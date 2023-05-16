
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Demande</title>
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

<strong id="titre">Décrivez votre expérience et mettez en avant ce que vous en avez retiré.</strong>

<!--formulaire du jeune-->
<div id="main">
<form method="post" action="http://localhost/Jeunes/jeune/verificationDemande.php">

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


<!--
    commentaire html
-->

</body>
</html>
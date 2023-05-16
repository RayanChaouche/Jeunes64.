<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Verification...</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"></meta>
    <script>

    </script>
    <style>

    </style>

    <script>

    </script>
</head>
<body>



<p>Connexion...</p>

<?php
    session_start();

    $_SESSION['connecte'] = false;

    // on ouvre le fichier des comptes
    $file = fopen("comptes.csv","r+")or die("erreur lors de l'ouverture de comptes.csv");

    $db = array();
    while(!feof($file)) // on fait une liste des comptes tel que db["nom d'utilisateur"]= motdepasse, id du compte
    {
        $line = fgets($file);
        $data = explode(';', $line);

        $db[$data[1]] = [$data[2], $data[0]];
    }
    

    $conditions = (isset($db[$_SESSION['username']]) && ($db[$_SESSION['username']][0] === $_SESSION['password']));
    if($conditions) // si l' username et le password correspondent
    {
        $_SESSION['connecte'] = true;
        $_SESSION["id"] = $db[$_SESSION['username']][1];
        
        $home = "http://localhost/Jeunes/jeune/menu.php";
        
        fclose($file);
        echo "<script> window.location.replace('".$home."'); </script>";
    }
    else
    {
        fclose($file);
        echo "<script> window.location.replace('http://localhost/Jeunes/jeune/connexion.php'); </script>";
    }
?>

<!--
    commentaire 
-->

</body>
</html>
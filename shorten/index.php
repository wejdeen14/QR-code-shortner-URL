<?php
//$courte=


echo $_SERVER['PHP_SELF'];
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];



 $nom_file = "wejden.php";
    $texte = "Hello wejden!";

    // création du fichier
    $f = fopen($nom_file, "x+");
    // écriture
    fputs($f, $texte );
    // fermeture
    fclose($f);



//session_start()
//if(!isset ($_POST["longue"]))
//{
//	header('location: http://localhost/projet/URL/champ.php');


//}

?>
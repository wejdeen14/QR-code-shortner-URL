<!DOC type html > 
<html lang="fr">
<head>
	<title> shortner</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="url.css">
	<script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>

</head>
<body>

	<?php

	include "connexion.php";
	$conn = new mysqli($servername, $username, $password,$dbname);

	?>

	<h1> Raccourcir l'URL</h1>
	<div>
<form name="f"  action="champ.php" method="POST">
 
	

<p class="longue"> <input style="font-family: 'font awesome 5 free' ; font-weight: 600;" type="url" 
   name="longue" size="60" placeholder=" &#xf0c1; http://exemple.com" required>
<input  class="submit" type="submit"  name="b1" value=" Raccourcir !" /></p>


</form>

</div>


<?php
//déclarer la variable longue
//test si la variable langue est definie ou non 
	if (isset($_POST["longue"]))
		{
$longue = $_POST["longue"];
	$caractere="0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
	 $caracterlength=strlen($caractere);
	$randomstring="";
//donnée les 5 caractere aleatoire
for($i=0;$i<5;$i++)
{
	 $randomstring.=$caractere[rand(0,$caracterlength-1)];

	$return_url=$randomstring;
}


	// URL courte
	 $courte= 'localhost/shorten/'.$return_url;
//connecté sur la base de donnée
	
	if ($conn->connect_error)
 	{
  		die("error de connecxion: " . $conn->connect_error);
  	}
//insertion de URL
	$sql= "INSERT INTO champ(id,longue,courte) VALUES (null,'$longue','$courte')";
		if($conn->query($sql)===TRUE)
		{

			$nom_file = "../../shorten/".$return_url.".php";
    $texte ='<?phpheader("Location: '.$longue.'");?>';

    // création du fichier
    $f = fopen($nom_file, "x+");
    // écriture
    fputs($f, $texte );
    // fermeture
    fclose($f);
			
		}

$sql2 = "SELECT * FROM champ WHERE longue='$longue' ";
	$res = $conn-> query($sql2);

		if ($res->num_rows > 0)
		 {
		 
 		while($row = $res->fetch_assoc())
   		{
?>
<input type="url" name="courte" size="30" placeholder="URL courte" value="<?php echo  $row["courte"]; ?>"> 
<p class="courte"> url courte</p>
<?php
}
    		 
 }
 }		
?>


	</body>
	</html>
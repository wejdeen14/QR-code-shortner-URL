<?php
/*
fonction courte()
{
	$return_url=getRandomSlog($champ);
	return 'localhost/shorten/'.$return_url;
}*/
/*

function getRandomSlog($length)
{
	$caractere="0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
	$caracterlength=strlen($caractere);
	$randomstring="";

for($i=0;$i<$length;$i++)
{
	$randomstring.=$caractere[rand(0,$caracterlength-1)];
}
return $randomstring;
}
**/
/*
function courte($champ)
{

	$return_url=getRandomSlog($champ);
	
	return 'localhost/shorten/'.$return_url;
	$courte=getRandomSlog(5);
	echo $courte;
	include "urlcourte.php";
	$con = new mysqli($servername,$username,$password,$dbname);
		if($con-> connect_error)
		{
			echo"errr";
			//die(conx erreur);
		}
		else
		{

			echo"tue";
			$sql="INERT INTO champ(id,longue,courte) VALUE ('','sdfsdf','fdsgd');";
		}
		if($con->query($sql)===TRUE)
		{

		}

}

*/

?>
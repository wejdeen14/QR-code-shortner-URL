<?php
if(isset($_POST['qr']))
{
	$text=$_POST["text"];
	$url="https://chart.googleapis.com/chart?cht=qr&chl=($text)&chs=160x160&chld=L|0";
	
	$output['img']=$url;
	}
	?>
<!DOC type html >
<html lang="en">
<head>
	
	<title>  GENERATEURQRCODE </title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="qrcode.css">
	
	<script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>

  	</head>
  	<body>
  	<header>
	<h1 class="qr"> QR C <span  class="fa fa-qrcode" ></span>  DE</h1>
	<nav>
 <a href="lecteur.html" class="lec"> 	 lecteur QR CODE </a></li>
 <a href="#article"><span  id="entete" class="fa fa-qrcode" color="black" >Générateur de QR Codes </span> </a>
  <a href="#bb"><span  id="dev" class="fa fa-envelope"color="black" >CONTACT  </span> </a>
 <a href="login.html"><span  class="fa fa-user" color="black"></span></a>
  <a  href="login.html"><span  class="fa fa-sign-in-alt"color="black" ></span></a>
 </nav>
</header>


	

	<section>
	
		<article class="text">
			<form name="f" action="" method="POST">
				
			<p class="titreqr"> ECRIRE QELQUE CHOSES</p>
		<p> &nbsp; </p>
	<a id="article">
			<p> <textarea name="text" id="text"  size="70" rows="7" cols="34" >  </textarea>
				<p> &nbsp; </p>
</a>
		<p><input class="button" type="submit" name=" qr" value="GENERE QR CODE"></p>
</form>

</article>


<article class="code">
		<p class="titreqr"> votre QR CODE </p>
		<p> &nbsp; </p>


<p> &nbsp; </p>
<?php
if(isset($output))
 {

  ?>
<img src="<?php echo $output['img'] ?>" alt="qrcode" width="30%" height="50%">

<a  href="<?php echo $output['img'] ?>.jpg" download=" QR  code"> télécharger </a>
<?php }  ?>
</article>

</section>
	<div class="fond"> 

<a id="background">><img  src="mm.jpg" alt="photo"  width="100%" height="800">
</a>
	</div>

	<p> </p>
	
<div class="utilise">
	<p> &nbsp;</p>
	<h2> QR Code. Où utiliser ? </h2>
	<p class="def"> Étant simplement reconnaissables, les codes QR trouvent leur application dans de multiples sphères de la vie professionnelle et sociale.<br> Voici quelques exemples</p>
	<p> &nbsp; </p>
		<div class="g1">

	<img class="vet" src="vetement.png" alt="vetement"width="500" > 
	<img  class="menu" src="menu.jpg" alt="menu"width="500" >
	</div >
	<p> &nbsp;</p>
	<div class="gr2">
	<img  class="cafe" src="cafe.png" alt="cafe" width="500" >
	<img  class="image" src="qr.jpg" alt="image"width="500" >
</div>
<div class="g3">
	<p> &nbsp;</p>
	<img class="public" src="public.jpg" alt="public" width="500">
	<img class="mag" src="mag.jpg" alt="magasin" width="500" >
</div>
</div>


</div>
<div>
	<h3>   QR Code. Qu'est-ce que c'est? </h3>
<P class="def">Le QR Code est une version bidimensionnelle du code-barres, généralement composée de motifs de pixels noirs et blancs. Denso Wave, filiale japonaise du fournisseur Toyota Denso, les a développés pour le marquage des composants afin d'accélérer les processus logistiques de leur production automobile. Maintenant, il a trouvé sa place dans le marketing mobile avec l'adoption généralisée des smartphones. "QR" signifie "Quick Response", qui fait référence à l'accès instantané aux informations cachées dans le Code.</P>
</div>

<footer> 
<a id="bb">
<span   id="qrfooter" class="fa fa-qrcode" color="black" > </span> 
<div class="ke">
 <a href="https://fr-fr.facebook.com" ><span  class="fa fa-facebook"color="black" >  </span> </a>
 <a href="https://www.instagram.com"><span  class="fa fa-instagram" color="black"></span> </a>
 <a href="https://twitter.com/?lang=fr"><span  class="fa fa-twitter"color="black" ></span> </a>
  <a href="https://www.whatsapp.com"><span  class="fa fa-whatsapp" ></span></a>
   <a href="https://www.linkedin.com/home/?originalSubdomain=fr"><span  class="fa fa-linkedin"color="white" > </span> </a>
    <a href="https://www.twitch.tv/settings/connections"><span  class="fa fa-twitch" ></span></a>
    <a href="https://www.youtube.com"><span  class="fa fa-youtube" ></span></a>
    <a href="https://www.google.com/?hl=fr"><span  class="fa fa-google"> </span></a>
    <a href="https://github.com/login"><span  class="fa fa-github" color="white"> </span> </a>
    </div>
    <div class="msg">
    <a href="#background"><span  class="fa fa-cc-visa"> </span> </a>
       <a href="#background">  <span  class="fa fa-images"> </span> </a>
           <p class="fin"> © qr-code-generator.com 2022, « QR Code »</p>
    </div>

</a>
</footer>

</body>

</html>
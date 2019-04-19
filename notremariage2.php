<?php
$nom1 = $_POST['nom1'];
$nom2 = $_POST['nom2'];
$nom3 = $_POST['nom3'];
$nom4 = $_POST['nom4'];
$nom5 = $_POST['nom5'];
$nom6 = $_POST['nom6'];
$nom7 = $_POST['nom7'];
$nom8 = $_POST['nom8'];
$nom9 = $_POST['nom9'];
$nom10 = $_POST['nom10'];
$type1 = $_POST['type1'];
$type2 = $_POST['type2'];
$type3 = $_POST['type3'];
$type4 = $_POST['type4'];
$type5 = $_POST['type5'];
$type6 = $_POST['type6'];
$type7 = $_POST['type7'];
$type8 = $_POST['type8'];
$type9 = $_POST['type9'];
$type10 = $_POST['type10'];
$nameok = 'non'; 
if((isset($_POST['nom1'])) || (isset($_POST['nom2'])) || (isset($_POST['nom3']))){ 
	if((strlen($_POST['nom1']) > 0) || (strlen($_POST['nom2']) > 0) || (strlen($_POST['nom3']) > 0)){ $nameok = 'oui'; } else { $nameok = 'non'; }
	
	
	
	
	/** envoi d'un courriel **/
	 
$to = "ameliecote82@gmail.com";
$subject = "Notre mariage | formulaire en ligne";

$message = "
<html>
<head>
<title>Infos formulaire en ligne</title>
</head>
<body>
<p>".$nom1." ".$type1."</p>
<p>".$nom2." ".$type2."</p>
<p>".$nom3." ".$type3."</p>
<p>".$nom4." ".$type4."</p>
<p>".$nom5." ".$type5."</p>
<p>".$nom6." ".$type6."</p>
<p>".$nom7." ".$type7."</p>
<p>".$nom8." ".$type8."</p>
<p>".$nom9." ".$type9."</p>
<p>".$nom10." ".$type10."</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: ameliecote82@gmail.com' . "\r\n";


mail($to,$subject,$message,$headers);
 
		/*** fin envoi d'un courriel *///
		
		
		
}
$totalenfant = 0;
$totaladulte = 0;
if($type1 == 'adulte'){ $totaladulte = $totaladulte+1; } if($type1 == 'enfant'){ $totalenfant = $totalenfant+1; }
if($type2 == 'adulte'){ $totaladulte = $totaladulte+1; } if($type2 == 'enfant'){ $totalenfant = $totalenfant+1; }
if($type3 == 'adulte'){ $totaladulte = $totaladulte+1; } if($type3 == 'enfant'){ $totalenfant = $totalenfant+1; }
if($type4 == 'adulte'){ $totaladulte = $totaladulte+1; } if($type4 == 'enfant'){ $totalenfant = $totalenfant+1; }
if($type5 == 'adulte'){ $totaladulte = $totaladulte+1; } if($type5 == 'enfant'){ $totalenfant = $totalenfant+1; }
if($type6 == 'adulte'){ $totaladulte = $totaladulte+1; } if($type6 == 'enfant'){ $totalenfant = $totalenfant+1; }
if($type7 == 'adulte'){ $totaladulte = $totaladulte+1; } if($type7 == 'enfant'){ $totalenfant = $totalenfant+1; }
if($type8 == 'adulte'){ $totaladulte = $totaladulte+1; } if($type8 == 'enfant'){ $totalenfant = $totalenfant+1; }
if($type9 == 'adulte'){ $totaladulte = $totaladulte+1; } if($type9 == 'enfant'){ $totalenfant = $totalenfant+1; }
if($type10 == 'adulte'){ $totaladulte = $totaladulte+1; } if($type10 == 'enfant'){ $totalenfant = $totalenfant+1; }

?>
<html>
<head>
<link rel="icon" type="image/jpg" href="coeur.jpg" />
<link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet'>
<style>
body {
    font-family: 'Amaranth';font-size: 22px; background-color:#302e2e; text-align:center; padding-top:15px; 
}
img {
  max-width: 500px;
  height: auto;
}
</style>
</head>
<body>
<?php if($nameok !== 'oui'){ ?>
<img src="ex-2.jpg" /><img src="ex-3.jpg" />
<?php } ?>
<br /><br />



<font color="#FFFFFF" size="20px;">Pr&eacute;sence au souper</font><br />

<style>
input[type=text], select {
  width: 500px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 500px;
  background-color: #c42734;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-align:center;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<?php if($nameok !== 'oui'){ ?>
<center>
<div style="width:500px">
Veuillez entrer le ou les noms du/des participant/s<br>
(entrer le nom complet: prénom & nom de famille)
<hr>
<form method="post" target="notremariage.php">
<div style="width:100;text-align:left;display:inline">
<input type="radio" name="type1" value="adulte"> <font size="3px;">Adulte &nbsp; &nbsp; &nbsp; <input type="radio" name="type1" value="enfant"> Enfant</font>
</div>
<input type="text" name="nom1" value="<?php echo $nom1; ?>" placeholder="Première personne">
<hr>
<div style="width:100;text-align:left;display:inline">
<input type="radio" name="type2" value="adulte"> <font size="3px;">Adulte &nbsp; &nbsp; &nbsp; <input type="radio" name="type2" value="enfant"> Enfant</font>
</div>
<input type="text" name="nom2" value="<?php echo $nom2; ?>" placeholder="Deuxième personne">
<hr>
<div style="width:100;text-align:left;display:inline">
<input type="radio" name="type3" value="adulte"> <font size="3px;">Adulte &nbsp; &nbsp; &nbsp; <input type="radio" name="type3" value="enfant"> Enfant</font>
</div>
<input type="text" name="nom3" value="<?php echo $nom3; ?>" placeholder="Troisième personne">
<hr>
<div style="width:100;text-align:left;display:inline">
<input type="radio" name="type4" value="adulte"> <font size="3px;">Adulte &nbsp; &nbsp; &nbsp; <input type="radio" name="type4" value="enfant"> Enfant</font>
</div>
<input type="text" name="nom4" value="<?php echo $nom4; ?>" placeholder="Quatrième personne">
<hr>
<div style="width:100;text-align:left;display:inline">
<input type="radio" name="type5" value="adulte"> <font size="3px;">Adulte &nbsp; &nbsp; &nbsp; <input type="radio" name="type5" value="enfant"> Enfant</font>
</div>
<input type="text" name="nom5" value="<?php echo $nom5; ?>" placeholder="Cinquième personne">
<hr>
<div style="width:100;text-align:left;display:inline">
<input type="radio" name="type6" value="adulte"> <font size="3px;">Adulte &nbsp; &nbsp; &nbsp; <input type="radio" name="type6" value="enfant"> Enfant</font>
</div>
<input type="text" name="nom6" value="<?php echo $nom6; ?>" placeholder="Sixième personne">
<hr>
<div style="width:100;text-align:left;display:inline">
<input type="radio" name="type7" value="adulte"> <font size="3px;">Adulte &nbsp; &nbsp; &nbsp; <input type="radio" name="type7" value="enfant"> Enfant</font>
</div>
<input type="text" name="nom7" value="<?php echo $nom7; ?>" placeholder="Septième personne">
<hr>
<div style="width:100;text-align:left;display:inline">
<input type="radio" name="type8" value="adulte"> <font size="3px;">Adulte &nbsp; &nbsp; &nbsp; <input type="radio" name="type8" value="enfant"> Enfant</font>
</div>
<input type="text" name="nom8" value="<?php echo $nom8; ?>" placeholder="Huitième personne">
<hr>
<div style="width:100;text-align:left;display:inline">
<input type="radio" name="type9" value="adulte"> <font size="3px;">Adulte &nbsp; &nbsp; &nbsp; <input type="radio" name="type9" value="enfant"> Enfant</font>
</div>
<input type="text" name="nom9" value="<?php echo $nom9; ?>" placeholder="Neuvième personne">
<hr>
<div style="width:100;text-align:left;display:inline">
<input type="radio" name="type10" value="adulte"> <font size="3px;">Adulte &nbsp; &nbsp; &nbsp; <input type="radio" name="type10" value="enfant"> Enfant</font>
</div>
<input type="text" name="nom10" value="<?php echo $nom10; ?>" placeholder="Dixième personne">
<hr>
<input type="submit" value="Cliquez ici pour envoyer le(s) nom(s) puis procéder au paiement">
</form>
</div>
</center>
<?php } ?>

<?php if($nameok == 'oui'){ ?><?php $montantapayer = $totaladulte*20; $montantapayer = $montantapayer+($totalenfant*10); ?>
<font color="#FFFFFF">Vous avez entré <?php echo $totaladulte; ?> adulte(s) et <?php echo $totalenfant; ?> enfant(s) (<?php echo $montantapayer; ?>$)<br><br></font>


<?php if($montantapayer == '20'){ ?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="GYND4JUVE4AZJ">
<input type="image" src="https://www.paypalobjects.com/fr_CA/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<?php } ?>
<?php if($montantapayer == '30'){ ?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="H93LB4UVJWL26">
<input type="image" src="https://www.paypalobjects.com/fr_CA/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<?php } ?>
<?php if($montantapayer == '40'){ ?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="EH25QNCC2NJBU">
<input type="image" src="https://www.paypalobjects.com/fr_CA/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<?php } ?>
<?php if($montantapayer == '50'){ ?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="SBR76LH3RV59J">
<input type="image" src="https://www.paypalobjects.com/fr_CA/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<?php } ?>
<?php if($montantapayer == '60'){ ?><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="GTMBEU6FZLVKS">
<input type="image" src="https://www.paypalobjects.com/fr_CA/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<?php } ?>
<?php if($montantapayer == '70'){ ?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="3CNG4G32PDRB8">
<input type="image" src="https://www.paypalobjects.com/fr_CA/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<?php } ?>
<?php if($montantapayer == '80'){ ?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="5ZTY9NCZULREA">
<input type="image" src="https://www.paypalobjects.com/fr_CA/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<?php } ?>
<?php if($montantapayer == '90'){ ?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="88VKB2GN6B7AC">
<input type="image" src="https://www.paypalobjects.com/fr_CA/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<?php } ?>
<?php if($montantapayer == '100'){ ?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="7L4JYPGU22CTU">
<input type="image" src="https://www.paypalobjects.com/fr_CA/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<?php } ?>
<?php if($montantapayer == '110'){ ?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="DYGHPE4KPCAKY">
<input type="image" src="https://www.paypalobjects.com/fr_CA/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<?php } ?>
<?php if($montantapayer == '120'){ ?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="C922HCCAVQDTA">
<input type="image" src="https://www.paypalobjects.com/fr_CA/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<?php } ?>
<?php if($montantapayer == '130'){ ?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="ZAMMPE4S3LFE6">
<input type="image" src="https://www.paypalobjects.com/fr_CA/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<?php } ?>
<?php if($montantapayer == '140'){ ?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="7QG7VCT3F4GHG">
<input type="image" src="https://www.paypalobjects.com/fr_CA/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<?php } ?>
<?php if($montantapayer == '150'){ ?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="VBRGZBWDJ9R2J">
<input type="image" src="https://www.paypalobjects.com/fr_CA/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<?php } ?>
<?php if($montantapayer == '160'){ ?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="KPN5H6FD4KJ3G">
<input type="image" src="https://www.paypalobjects.com/fr_CA/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<?php } ?>
<?php if($montantapayer == '170'){ ?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="F5UYHRAUJFTK8">
<input type="image" src="https://www.paypalobjects.com/fr_CA/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<?php } ?>
<?php if($montantapayer == '180'){ ?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="FH3RWHUVMYEVU">
<input type="image" src="https://www.paypalobjects.com/fr_CA/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<?php } ?>
<?php if($montantapayer == '190'){ ?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="AER9LAAXV4MZL">
<input type="image" src="https://www.paypalobjects.com/fr_CA/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<?php } ?>
<?php if($montantapayer == '200'){ ?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="7YY25XPJXGK4E">
<input type="image" src="https://www.paypalobjects.com/fr_CA/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<?php } ?>














<?php } ?>
<br /><br /><br /><br />
</html>
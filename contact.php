<?php /* Derniere modification le 09/04/14 */ ?>

<?php
$modif_nom = NULL;
$modif_message = NULL;

$value_nom = NULL;
$value_mail = NULL;
$value_tel = NULL;
$value_message = NULL;

$valid_form = true;

if (isset($_POST['nom'])) //On verifie si le formulaire a déja ete envoyé
{
	$_POST['nom'] = htmlspecialchars($_POST['nom']);
	$_POST['mail'] = htmlspecialchars($_POST['mail']);
	$_POST['tel'] = htmlspecialchars($_POST['tel']);
	$_POST['message'] = htmlspecialchars($_POST['message']);
	
	$value_nom = ' value="'.$_POST['nom'].'" ';
	$value_mail = ' value="'.$_POST['mail'].'" ';
	$value_message = $_POST['message'];

	//Verification du nom
	if ($_POST['nom'] == '')
	{
	
		$modif_nom = 'border: 2px solid red;';
		$value_nom = "";
		$valid_form = false;
	}
	//Fin de la verification du nom
	
	
	//Verification du message
	if ($_POST['message'] == '')
	{
	
		$modif_message = 'border: 2px solid red;';
		$value_message = "";
		$valid_form = false;
	}
	//Fin de la verification du message
	
	//Verification du mail
	if (!(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail'])))
	{
		$modif_mail = 'border: 2px solid red;';
		$value_mail = "";
		$valid_form = false;
	}
	//Fin de la verification du mail
	
	
}
else
{
	$valid_form = false;
	$post_choix = NULL;
}

if ($valid_form) //Si le formulaire est valide
{ 
	
	//Envoie du mail
	
	$headers ='From: "' . $nom_site . '"'."\n";
	$headers .='Content-Type: text/html; charset="iso-8859-15"'."\n";
	$headers .='Content-Transfer-Encoding: 8bit';

	$message ='
	De : '.$_POST['nom'].'<br />
	Mail : '.$_POST['mail'].'<br />
	Tel : '.$_POST['tel'].'<br /><br />
	'.$_POST['message'].'	
	';

	mail('v.gazelot@gmail.com', 'Message eFolio', $message, $headers);

}

?>

<div id="contactForm" style="font-family:Montserrat">
  	<h2 id="sayHello">SAY 'HELLO !' </h2>
  	
  <form id="form"action ="#" method="POST">
		<input id="Cnom" type="text" name="nom" placeholder="Name" style="font-family:Montserrat;<?php echo $modif_nom ?>" <?php echo $value_nom ?> /> 
		<input id="Cmail" type="text" name="mail" placeholder="email" style="font-family:Montserrat;<?php echo $modif_nom ?>" <?php echo $value_mail ?> />
		<textarea id="Ccont" type="text" name="message" style="font-family:Montserrat;<?php echo $modif_message ?>" placeholder="Enter your text" ><?php echo $value_message ?> </textarea>
		<input id="submit" type="submit" value="Envoyer"/>
	</form>
	<?php if($valid_form) echo("<span id="notifMailOK"> Message envoyé !</span>") ?>

  </div>


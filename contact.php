<?php 
	$dest = 'v.gazelot@gmail.com';
	$sub = 'Mail Portfolio';
	$header = "From: \"WeaponsB\"".$_POST['mail'];
	$mailsend ='none';

	if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $_POST['mail']))
	{
		$passage_ligne = "\r\n";
	}
	else
	{
		$passage_ligne = "\n";
	}
	$header = "From: \"EXPEDITEUR\"v.gazelot@gmail.com".$passage_ligne;
	$header.= "Reply-to: \"RETOUR\" v.gazelot@gmail.com".$passage_ligne; 
	$header.= "MIME-Version: 1.0".$passage_ligne; 
	$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
	if (isset($_POST['message']))
	{
		$message = wordwrap($message, 70, "\r\n");
		$message = str_replace("\n.", "\n..", $text);
		if (mail($mail,$sub,$_POST['message'],$header))
		{
			$mailsend='true';
		}
		else 
		{
			$mailsend='false';
		}

	}
	

	
?>

  <div id="contactForm" style="font-family:Montserrat">
  	<h2 id="sayHello">SAY 'HELLO !' </h2>
  <form id="form"action ="#" method="POST">
		<input id="Cnom" type="text" name="nom" placeholder="Name" style="font-family:Montserrat" value="<?php if (isset($_POST['nom'])) echo $_POST['nom']; ?>"
		/> 
		<input id="Cmail" type="text" name="mail" placeholder="email" style="font-family:Montserrat"
		value="<?php if (isset($_POST['mail'])) echo $_POST['mail']; ?>">
		<textarea id="Ccont" type="text" name="message" style="font-family:Montserrat" placeholder="Enter your text"><?php if (isset($_POST['message'])) echo $_POST['message']; ?></textarea>
		<input id="submit" type="submit" value="Envoyer"/>
	</form>
	<?php if ($mail ==='true') { echo' <p id="notifMailOK">*Mail envoyé !</p>'; }
		else if($mail ==='false') { echo '<p id="notifMailErr"> Erreur de saisie </p>';}
?>

  </div>
<?php include ('index_corps.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <link rel="stylesheet" media="screen" type="text/css" title="Style" href="Css/Style.css" />
  <link rel="stylesheet" media="screen" type="text/css" title="Style" href="Css/reset.css" />
  <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

  <!--
  <link rel="shortcut icon" href="images/icon.gif" />
  <meta http-equiv="Content-Type" content="text/html; charset-unicode;" />-->
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="lang" content="fr" />
  <meta name="author" content="Vincent GAZELOT" />
  <meta name="copyright" content="Vincent Gazelot © 2014" />
  <meta name="description" content="ePortefolio de Vincent Gazelot, étudiant en IUT informatique" />
  <meta name="keywords" content="Vincent Gazelot,vincent,gazelot,VINCENT GAZELOT, CV, efolio, ePortefolio, dut informatique, iut villetaneuse, universite paris 13" />



  <title>Vincent Gazelot-PortFolio</title>
</head>

<header>

    <div id="Container_header">
    
        <div id="Menu">
            <nav>
                <div id="bMenu">
                    <div id="bMenu1">
                    </div>
                    <div id="bMenu2">
                    </div>
                    <div id ="bMenu3">
                    </div>
                </div>

                <ul id="listeRebrique">
                
                    <li id="accueil" style="font-family:Montserrat"> <a href="index.php?p=accueil">Accueil</a> </li> 
                    <li id="cv" style="font-family:Montserrat"> <a href="index.php?p=cv">Cv</a> </li>
                    <li id="projets" style="font-family:Montserrat"> <a href="index.php?p=projets" >Projets</a> </li>
                    <li id="Contact" style="font-family:Montserrat"> <a href="index.php?p=contact" >Contacter</a> </li>
            
        </ul>
            </nav>
        </div>
    </div>
</header>
<body> 
        <?php require ($p.'.php');?> 
</body>

<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/scripts.js"></script>



</html>
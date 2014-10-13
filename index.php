<?php include ('index_corps.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <link rel="stylesheet" media="screen" type="text/css" title="Style" href="Css/Style.css" />
  <link rel="stylesheet" media="screen" type="text/css" title="Style" href="Css/reset.css" />
  <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="js/slider/themes/defaults/style.css" type="text/css" media="screen">

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

                <ul>
                
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
<script type="text/javascript" src="./js/slider/jquery.slider.js"></script>
<!--<script>
  var aclicked=false;
  var element = document.getElementById('bMenu');

  element.onclick = function() {
    if(aclicked == false)
    {
    var elem=document.getElementById('accueil');

    elem.style.display='inline-block';
    elem.style.opacity='1';

    elem=document.getElementById('cv');

    elem.style.display='inline-block';
    elem.style.opacity='1';
    elem=document.getElementById('projets');

    elem.style.display='inline-block';
    elem.style.opacity='1';
    elem=document.getElementById('Contact');

    elem.style.display='inline-block';
    elem.style.opacity='1';
    aclicked=true;
    }
    else
    {
    var elem=document.getElementById('accueil');

    elem.style.display='none';
    elem.style.opacity='0';

    elem=document.getElementById('cv');

    elem.style.display='none';
    elem.style.opacity='0';
    elem=document.getElementById('projets');

    elem.style.display='none';
    elem.style.opacity='0';
    elem=document.getElementById('Contact');

    elem.style.display='none';
    elem.style.opacity='0';
    aclicked=false;
    }
  }

</script>
-->
</html>
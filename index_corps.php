
<?php

  $page_ok = array (
    'contact',
    'cv',
    'projets',
    'accueil'
  );

  if (isset($_GET['p'])) {
    $p = htmlspecialchars($_GET['p']);
  
    if (!(in_array($p, $page_ok))) {
      $p = 'accueil';
    } 
  }
  else {
        $p = 'accueil';
  }
?>

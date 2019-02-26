<?php

require '../App/Autoloader.php';

App\Autoloader::register();

$p=isset($_GET['p']) ? $_GET['p']:"aceuil";




ob_start();


if($p === 'aceuil'){
    require '../pages/aceuil.php';
}
elseif ($p === 'numerique') {
   require '../pages/numerique.php';
}
elseif ($p === 'delta') {
    require '../pages/delta.php';
 }
else{
    require '../pages/erro404.php';
}

 
$content=ob_get_clean();

require '../pages/templates/default.php';

?>
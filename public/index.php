<?php


require '../App/Autoloader.php';

App\Autoloader::register();

$p=isset($_GET['p']) ? $_GET['p']:"aceuil";

$post= App\App::getTable('categories');
var_dump($post);

ob_start();


if($p === 'aceuil'){
    require '../pages/aceuil.php';
}
elseif ($p === 'numerique') {
   require '../pages/numerique.php';
}
elseif ($p === 'affiche') {
    require '../pages/affiche.php';
 }
elseif ($p === 'article') {
    require '../pages/single.php';
}
elseif ($p === 'delta') {
    require '../pages/delta.php';
 }
else{
    require '../pages/error404.php';
}

 
$content=ob_get_clean();

require '../pages/templates/default.php';

?>
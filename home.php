<?php 
$smarty = new Template();
$smarty->display('home.tpl');

$smarty->assign('BANNER',Rotas::ImageLink('banner.jpg',750,230));

include_once Rotas::get_Pasta_Controller(). '/produtos.php';

 ?>
<?php 
$smarty = new Template();

$smarty->assign('CONTATO','PAGINA DE CONTATOS');
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());

$smarty->display('contato.tpl');

 ?>
<?php

$smarty = new Template();

$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());

if(isset($_POST['cupom_codigo']) && isset($_POST['cupom_valor'])){    
    	echo '<div class="alert alert-danger">Erro ao cadastrar cupom</div>';
}

$smarty->display('adm_cupons.tpl');
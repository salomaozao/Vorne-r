<?php 

require'../lib/autoload.php';

date_default_timezone_set('America/Sao_Paulo');

if(!isset($_SESSION)){
	session_start();
}

$smarty = new Template();

if(isset($_POST['txt_logar']) && isset($_POST['txt_email'])){

    $user = $_POST['txt_email'];
    $senha = $_POST['txt_senha'];
    $login = new Login();
    if($login->GetLoginADM($user, $senha)){     
        Rotas::Redirecionar(0, 'adm_principal');
        exit();
    }
}

$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_RECOVERY', Rotas::pag_RecoveryADM());

$smarty->display('adm_login.tpl');
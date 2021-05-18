<?php 

$smarty = new Template();

$login = new Login();

if(isset($_POST['txt_email']) && (isset($_POST['txt_senha']))){
	$user = $_POST['txt_email'];
	$senha = $_POST['txt_senha'];
	$login->GetLogin($user, $senha);
}
$smarty->assign('USER', '');

if(Login::Logado()){
	$smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
	$smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
	Login::MenuCliente();
}

$smarty->assign('LOGADO', Login::Logado());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_CONTA', Rotas::pag_MinhaConta());
$smarty->assign('PAG_CLIENTE_PEDIDOS', Rotas::pag_ClientePedidos());
$smarty->assign('PAG_CADASTRO', Rotas::pag_ClienteCadastro());
$smarty->assign('PAG_RECOVERY', Rotas::pag_ClienteRecovery());
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());

$smarty->display('login.tpl');


<?php 

$smarty = new Template();

$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());

Login::MenuCliente();

if(isset($_POST['cli_senha_atual']) and isset($_POST['cli_senha'])){

	$email = $_SESSION['CLI']['cli_email'];
	$senha_atual = md5($_POST['cli_senha_atual']);
	$senha_nova = $_POST['cli_senha'];

	if($senha_atual != $_SESSION['CLI']['cli_pass']){
		echo '<div class="alert alert-danger"><p>A senha digitada não confere com a senha atual do usúario</p></div>';
		Rotas::Redirecionar(3, Rotas::pag_ClienteSenha());
		exit();
	}

	$clientes = new Clientes();
	$clientes->SenhaUpdate($senha_nova, $email);

	echo '<div class="alert alert-sucess"><p>A sua senha foi alterada com sucesso</p></div>';

	$login = new Login();
    $login->GetLogin($email, $senha_nova);
	Rotas::Redirecionar(0, Rotas::pag_MinhaConta());

}
else{

	$smarty->display('cliente_senha.tpl');
}

 ?>
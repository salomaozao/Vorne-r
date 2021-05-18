<?php 

$smarty = new Template();

$cliente = new Clientes();

if(isset($_POST['cli_email'])){
	$cliente->setCli_email($_POST['cli_email']);

	if($cliente->GetClienteEmail($cliente->getCli_email()) > 0){
		$novasenha = Sistema::GerarSenha();
		$cliente->SenhaUpdate($novasenha, $cliente->getCli_email());

		$email = new EnviarEmail();
     	$assunto = ' Loja Vorne - Nova Senha '.Config::SITE_NOME;
     	$msg = "Olá cliente de Loja Vorne, uma nova senha foi solicitada, acesse o site " .  
     	Config::SITE_NOME;
     	$msg .= " Sua nova senha é " . $novasenha ;
     	$destinatarios = array($cliente->getCli_email(), Config::SITE_EMAIL_ADM);
     	$email->Enviar($assunto, $msg, $destinatarios);

     	echo '<div class="alert alert-sucess"><p>Uma nova senha foi enviada a seu email cadastrado</p></div>';

     	Rotas::Redirecionar(3, Rotas::pag_ClienteLogin());
	}
	else{
		echo '<h4>Não há cadastros efetuados com este email na loja</h4>';

		Rotas::Redirecionar(3, Rotas::pag_ClienteRecovery());
	}
}
else{
	$smarty->display('clientes_recovery.tpl');
}

 ?>
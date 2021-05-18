<?php 		
$smarty = new Template();
$clientes = new Clientes();

$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());


if(isset($_POST['cli_nome']) and isset($_POST['cli_email']) and isset($_POST['cli_cpf'])){

	if($_POST['cli_senha'] != $_POST['cli_verificarsenha'] ){
		echo '<script>alert("As senhas não correspondem!!")</script>';;
		Rotas::Redirecionar(1.5,Rotas::pag_ClienteCadastro());
		exit();
	}
	 

	 $cli_nome      = $_POST['cli_nome'];
	 $cli_sobrenome = $_POST['cli_sobrenome'];
	 $cli_endereco  = $_POST['cli_endereco'];
	 $cli_numero    = $_POST['cli_numero'];
	 $cli_bairro    = $_POST['cli_bairro'];
	 $cli_cidade    = $_POST['cli_cidade'];
	 $cli_uf        = $_POST['cli_estado'];
	 $cli_cep       = $_POST['cli_cep'];
	 $cli_cpf       = $_POST['cli_cpf'];
	 $cli_ddd       = $_POST['cli_ddd'];
	 $cli_celular   = $_POST['cli_celular']; 
	 $cli_email     = $_POST['cli_email'];
	 $cli_senha     = $_POST['cli_verificarsenha'];
     $cli_data_nasc = $_POST['cli_data_nasc'];     
     $cli_data_cad  = Sistema::DataAtualUS();
     $cli_hora_cad  = Sistema::HoraAtual();


     $clientes->Preparar($cli_nome, $cli_sobrenome,  $cli_endereco, $cli_numero, $cli_bairro, $cli_cidade,  $cli_uf, $cli_cep, $cli_cpf, $cli_ddd, $cli_celular, $cli_email, $cli_senha, $cli_data_nasc,  $cli_data_cad,  $cli_hora_cad);
     $clientes->Inserir();

     $smarty->assign('NOME', $cli_nome);
     $smarty->assign('SITE', Config::SITE_NOME);
     $smarty->assign('EMAIL', $cli_email );
     $smarty->assign('SENHA', $cli_senha);
     $smarty->assign('PAG_MINHA_CONTA',Rotas::pag_ClienteConta());

     $email = new EnviarEmail();
     $assunto = 'Cadastro Efetuado em - '.Config::SITE_NOME;
     $msg = $smarty->fetch('email_cliente_cadastro.tpl');
     $destinatarios = array($cli_email, Config::SITE_EMAIL_ADM);
     $email->Enviar($assunto, $msg, $destinatarios);
     
     echo '<script>alert("Cadastro efetuado com sucesso!")</script>';
     Rotas::Redirecionar(10, Rotas::pag_ClienteLogin());
}
else{
	$smarty->display('cadastro.tpl');

}


 ?>

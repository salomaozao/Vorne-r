<?php 

if (!Login::Logado()) {
	Login::AcessoNegado();
	Rotas::Redirecionar(2, Rotas::pag_ClienteLogin());
}
else{
	if(isset($_SESSION['PRO'])){

	$smarty= new Template();
	$carrinho = new Carrinho();
	$produtos = new Produtos();


	$ref_cod_pedido = date('ymdHs').$_SESSION['CLI']['cli_id'];
	if(!isset($_SESSION['PED']['pedido'])){
		$_SESSION['PED']['pedido'] = $ref_cod_pedido;
	} 
	if(!isset($_SESSION['PED']['ref'])){
		$_SESSION['PED']['ref'] = $ref_cod_pedido;
	} 

	$smarty->assign('PRO', $carrinho->GetCarrinho());
	$smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
	$smarty->assign('PAG_CONFIRMAR', Rotas::pag_PedidoConfirmar());
	$smarty->assign('PAG_FINALIZAR', Rotas::pag_PedidoFinalizar());
	$smarty->assign('NOME_CLIENTE', $_SESSION['CLI']['cli_nome']);
	$smarty->assign('SITE_NOME', Config::SITE_NOME);
	$smarty->assign('SITE_HOME', Rotas::get_SiteHOME());
	$smarty->assign('PAG_MINHA_CONTA', Rotas::pag_ClienteConta());
	$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());

	$pedido = new Pedidos();
	$cliente = $_SESSION['CLI']['cli_id'];
	$cod = $_SESSION['PED']['pedido'];
	$ref = $_SESSION['PED']['ref'];
    $valor = Sistema::MoedaBR($carrinho->GetTotal());

	$email = new EnviarEmail();
	
	$destinatarios = array(Config::SITE_EMAIL_ADM,$_SESSION['CLI']['cli_email']);
	$assunto = 'Pedido da Loja Vorne';
	$msg = $smarty->fetch('email_compra.tpl');
	
	$email->Enviar($assunto, $msg, $destinatarios);

	$estoque = 10;

	$pedido->PedidoGravar($cliente, $cod, $ref, $valor);
	
		/*$pag = new PagamentoPS();
      
            $pag->Pagamento($_SESSION['CLI'], $_SESSION['PED'], $carrinho->GetCarrinho());
            
          //  var_dump($pag);
            
              // passando para o template dados do PS
              $smarty->assign('PS_URL', $pag->psURL);            
              $smarty->assign('PS_COD', $pag->psCod);
			  $smarty->assign('PS_SCRIPT', $pag->psURL_Script);*/
			  
		$pedido->LimparSessoes();
	
	//var_dump($carrinho->GetCarrinho());
	$smarty->display('pedido_finalizar.tpl');
	}
	else{
		echo '<h4>Não há produtos no carrinho</h4>';
	}
}
 ?>
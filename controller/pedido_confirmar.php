<?php 


if(isset($_SESSION['PRO'])){

	$smarty= new Template();
	$carrinho = new Carrinho();

	$smarty->assign('PRO', $carrinho->GetCarrinho());
	$smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
	$smarty->assign('PAG_CARRINHO_ALTERAR', Rotas::pag_CarrinhoAlterar());
	$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
	$smarty->assign('PAG_CONFIRMAR', Rotas::pag_PedidoConfirmar());
	$smarty->assign('PAG_FINALIZAR', Rotas::pag_PedidoFinalizar());
	$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
	

	//var_dump($carrinho->GetCarrinho());
	$smarty->display('pedido_confirmar.tpl');
}
else{
	echo '<h4>Não há produtos no carrinho</h4>';
}
 ?>

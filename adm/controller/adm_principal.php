<?php 

$smarty = new Template();

$pedidos = new Pedidos();

$pedidos->GetPedidosCliente();

$smarty->assign('PEDIDOS', $pedidos->GetItens());
$smarty->assign('PAG_ITENS', Rotas::pag_ItensADM());

$smarty->display('adm_principal.tpl');
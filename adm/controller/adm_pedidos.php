<?php 

$smarty = new Template();

$pedidos = new Pedidos();

if(isset($_POST['ped_apagar'])){
    $ped_cod = $_POST['cod_pedido'];
    if($pedidos->Apagar($ped_cod)){
        echo '<div>Pedido Excluído</div>';
        Rotas::Redirecionar(1, Rotas::pag_ClientesADM());
        exit();
    }
}

if(isset(Rotas::$pag[1])){
    $id = Rotas::$pag[1];
    $pedidos->GetPedidosCliente($id);
    
    if(isset($_POST['data_ini']) and isset($_POST['data_fim'])){
        $pedidos->GetPedidosData($_POST['data_ini'], $_POST['data_fim'],$id);
    }
    if(isset($_POST['txt_ref'])){  
        $ref = filter_var($_POST['txt_ref'], FILTER_SANITIZE_STRING);
        $pedidos->GetPedidosRef($_POST['txt_ref']);
    }
}

else{
    $pedidos->GetPedidosCliente();
}

$smarty->assign('PEDIDOS', $pedidos->GetItens());
$smarty->assign('PAG_ITENS', Rotas::pag_ItensADM());
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAGINAS', $pedidos->ShowPaginacao());

if($pedidos->TotalDados() > 0){
    $smarty->display('adm_pedidos.tpl');
}
else{
    echo '<div class="alert alert-danger">Este cliente ainda não efetuou pedidos. </div>';
}
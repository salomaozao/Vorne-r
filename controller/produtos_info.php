<?php 

$smarty = new Template();

$produtos = new Produtos();
$produtos->GetProdutosID(Rotas::$pag[1]);
//var_dump($produtos->GetItens());

$image = new ProdutosImages();
$image->GetImagesPRO(Rotas::$pag[1]);

$ativos = new Ativo();
$ativos->GetAtivosRef(Rotas::$pag[3]);

$atv = $ativos->GetItens();
//var_dump($atv);

$array = Array();

$ativo_tamanho_p = $atv[1]['Ativo_tamanho_p'];
$ativo_tamanho_pp = $atv[1]['Ativo_tamanho_pp'];
$ativo_tamanho_m = $atv[1]['Ativo_tamanho_m'];
$ativo_tamanho_g = $atv[1]['Ativo_tamanho_g'];
$ativo_tamanho_gg = $atv[1]['Ativo_tamanho_gg'];
$ativo_tamanho_xgg = $atv[1]['Ativo_tamanho_xgg'];
$ativo_modelo = $atv[1]['Ativo_modelo'];



if($ativo_tamanho_p != "NAO"){
    array_push($array, $ativo_tamanho_p);
}
if($ativo_tamanho_pp != "NAO"){
    array_push($array, $ativo_tamanho_pp);
}
if($ativo_tamanho_m != "NAO"){
    array_push($array, $ativo_tamanho_m);
}
if($ativo_tamanho_g != "NAO"){
    array_push($array, $ativo_tamanho_g);
}
if($ativo_tamanho_gg != "NAO"){
    array_push($array, $ativo_tamanho_gg);
}
if($ativo_tamanho_xgg != "NAO"){
    array_push($array, $ativo_tamanho_xgg);
}










$smarty->assign('PRO',$produtos->GetItens());
$smarty->assign('IMAGES',$image->GetItens());
$smarty->assign('ATIVOS',$array);
$smarty->assign('MODELO',$ativo_modelo);
$smarty->assign('PAG_COMPRAR', Rotas::pag_CarrinhoAlterar());
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());


$ID = Rotas::$pag[1];

$smarty->display('produtos_info.tpl');


 ?>
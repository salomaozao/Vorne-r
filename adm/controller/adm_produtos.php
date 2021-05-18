<?php 

$smarty = new Template();
$produtos = new Produtos();
$categorias = new Categorias();
$categorias->GetCategorias();

if(isset(Rotas::$pag[1])){
	$produtos->GetProdutosCatID(Rotas::$pag[1]);
}
else{
	$produtos->GetProdutos();
}

$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('PRO_INFO',Rotas::pag_ProdutosInfo());
$smarty->assign('PRO_TOTAL', $produtos->TotalDados());
$smarty->assign('PAGINAS', $produtos->ShowPaginacao());
$smarty->assign('PAG_PRODUTO_NOVO', Rotas::pag_NovosProdutosADM());
$smarty->assign('PAG_PRODUTO_EDITAR', Rotas::pag_EditarProdutosADM());
$smarty->assign('PAG_PRODUTO_IMG', Rotas::pag_ImgProdutosADM());


$smarty->display('adm_produtos.tpl');
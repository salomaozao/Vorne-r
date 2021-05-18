<?php 

$smarty = new Template();
$produtos = new Produtos();
$categorias = new Categorias();
$categorias->GetCategorias();


if(isset(Rotas::$pag[1]) && !isset($_POST['txt_buscar'])){
	$produtos->GetProdutosCatID(Rotas::$pag[1]);
}
elseif(isset($_POST['txt_buscar'])){  
        $nome = filter_var($_POST['txt_buscar'], FILTER_SANITIZE_STRING);
        $produtos->GetProdutosNome($nome);
}
elseif(isset($_POST['txt_buscar']) && isset(Rotas::$pag[1])){  
	$nome = filter_var($_POST['txt_buscar'], FILTER_SANITIZE_STRING);
	$produtos->GetProdutosNome($nome);
}

else{	
	$produtos->GetProdutos();
}

$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('PRO_INFO',Rotas::pag_ProdutosInfo());
$smarty->assign('PRO_TOTAL', $produtos->TotalDados());
$smarty->assign('PAGINAS', $produtos->ShowPaginacao());
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());

$smarty->display('produtos.tpl');


 ?>
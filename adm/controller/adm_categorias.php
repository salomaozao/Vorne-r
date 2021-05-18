<?php 

$smarty = new Template();

$categorias = new Categorias();

$categorias->GetCategorias();

if(isset($_POST['cat_nova'])){
    
    $cat_nome = $_POST['cat_nome'];
  
    if($categorias->Inserir($cat_nome)){
        echo '<div class= "alert alert-sucess"> Categoria inserida com sucesso!! </div>';
    }
    Rotas::Redirecionar(0,Rotas::pag_CategoriasADM());
}

if(isset($_POST['cat_editar'])){
    
    $cat_nome = $_POST['cat_nome'];
    $cat_id = $_POST['cat_id'];
    if($categorias->Editar($cat_id,$cat_nome)){
        echo '<div class= "alert alert-sucess"> Categoria editada com sucesso!! </div>';
    }
    Rotas::Redirecionar(0,Rotas::pag_CategoriasADM());
}

if(isset($_POST['cat_apagar'])){

    $cat_id = $_POST['cat_id'];
    if($categorias->Apagar($cat_id)){
        echo '<div class= "alert alert-sucess"> Categoria apagada com sucesso!! </div>';
    }
    Rotas::Redirecionar(0,Rotas::pag_CategoriasADM());
}

$smarty->assign('CATEGORIAS', $categorias->GetItens());

$smarty->display('adm_categorias.tpl');
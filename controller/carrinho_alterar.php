<?php  

if (!isset($_POST['pro_id'])or ($_POST['pro_id'] < 1)) {
	echo '<h4>Erro na Operação</h4>';
	Rotas::Redirecionar(1,Rotas::pag_Carrinho());
	exit();
}
$id = (int)$_POST['pro_id'];

$carrinho = new Carrinho();
$tamanho = $_POST['pro_tamanho'];
$modelo = $_POST['pro_modelo'];
	
try{
	$carrinho->CarrinhoADD($id, $tamanho, $modelo);
}
catch(Exception $e){
	echo '<h4>Erro na Operação</h4>';
}


Rotas::Redirecionar(0,Rotas::pag_Carrinho());



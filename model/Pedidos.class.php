<?php  

Class Pedidos extends Conexao{

	function __construct(){
		parent::__construct();
	}

	function PedidoGravar($cliente, $cod, $ref, $valor, $freteValor = null, $freteTipo=null){

		$retorno = false;

		$query = "INSERT INTO ".$this->prefix."pedidos ";
		$query.= "(ped_data, ped_hora, ped_cliente, ped_cod, ped_ref, ped_valor, ped_frete_valor, ped_frete_tipo)";
		$query.= " VALUES ";
		$query.= "(:data, :hora, :cliente, :cod, :ref, :valor, :frete_valor, :frete_tipo)";

		$params = array(
			':data' => Sistema::DataAtualUS(),
			':hora' => Sistema::HoraAtual(),
			':cliente' => (int)$cliente,
			':cod' => $cod,
			':ref' => $ref,
            ':valor' => $valor,
			':frete_valor' => $freteValor,
			':frete_tipo' => $freteTipo
		);

		$this->ExecuteSQL($query, $params);
		
		$this->ItensGravar($cod);

		//$this->AtualizarEstoque($estoque);

		$retorno = true;
		return $retorno;
	}

	function GetPedidosCliente($cliente=null){
		$query = "SELECT * FROM {$this->prefix}pedidos p INNER JOIN  {$this->prefix}clientes c";
		$query.= " ON p.ped_cliente = c.cli_id";

		if($cliente != null){
			$cli = (int)$cliente;
			$query.= " WHERE ped_cliente = {$cli}";
			$query .= " ORDER BY ped_id DESC";

			$query .= $this->PaginacaoLinks("ped_id", $this->prefix."pedidos WHERE ped_cliente =" .(int)$cli);
		}
		else{
			$query .= $this->PaginacaoLinks("ped_id", $this->prefix."pedidos");
		}
		$this->ExecuteSQL($query);
		$this->GetLista();
	}

	private function GetLista(){
		$i = 1;
		while ($lista = $this->ListarDados()):
		$this->itens[$i] = array(
			'ped_id' => $lista['ped_id'],
			'ped_data' => Sistema::Fdata($lista['ped_data']), 
			'ped_data_us' => $lista['ped_data'],
			'ped_hora' => $lista['ped_hora'],
			'ped_cliente' => $lista['ped_cliente'],
			'ped_cod' => $lista['ped_cod'],
			'ped_ref' => $lista['ped_ref'],
            'ped_valor' => $lista['ped_valor'],
			'ped_pag_status' => $lista['ped_pag_status'],
			'ped_pag_forma' => $lista['ped_pag_forma'],
			'ped_pag_tipo' => $lista['ped_pag_tipo'],
			'ped_pag_codigo' => $lista['ped_pag_codigo'],
			'ped_frete_valor' => $lista['ped_frete_valor'],
			'ped_frete_tipo' => $lista['ped_frete_tipo'],
			'cli_nome'=> $lista['cli_nome'],
			'cli_sobrenome'=> $lista['cli_sobrenome'],

		   );
			
		$i++;

		endwhile;
	}
	

	function ItensGravar($codpedido){
		$carrinho = new Carrinho;

		foreach ($carrinho->GetCarrinho() as $item) {

			$query = "INSERT INTO ".$this->prefix."pedidos_itens ";
			$query.= "(item_produto, item_valor, item_tamanho, item_modelo, item_qtd, item_ped_cod)";
			$query.= " VALUES ";
			$query.= "(:produto, :valor, :tamanho, :modelo, :qtd, :cod)";

			$params = array(
				':produto' => $item['pro_id'],
				':tamanho' => $item['pro_tamanho'],
				':modelo' => $item['pro_modelo'],
				':valor' => $item['pro_valor_us'],
				':qtd' => (int)$item['pro_qtd'],
				':cod' => $codpedido
			);

			$this->ExecuteSQL($query, $params);
			
		}
	}

	function AtualizarEstoque($estoque){
		$carrinho = new Carrinho;

		foreach ($carrinho->GetCarrinho() as $item) {

			$qtd = (int)$item['pro_qtd'];
			$novoestoque = $estoque - $qtd;

			$query = " UPDATE {$this->prefix}produtos SET pro_estoque=:pro_estoque" ;
			$query.= " WHERE pro_id = :pro_id";
			
			$params = array(
			':pro_id'=> $item['pro_id'],
			':pro_estoque'=> $novoestoque                 
        	);

			$this->ExecuteSQL($query, $params);
			
		}
	}

	function  Apagar($ped_cod){
        
        // apagando o PEDIDO  
        
        // monto a minha SQL de apagar o pedido 
        $query =  " DELETE FROM {$this->prefix}pedidos WHERE ped_cod = :ped_cod";        
        // parametros
        $params = array(':ped_cod'=>$ped_cod);
        // executo a minha SQL
        $this->ExecuteSQL($query, $params);
        
        /// apos apagar o pedido apaga ITENS DO PEDIDO  
        
                    // monto a minha SQL de apagar os items 
                 $query =  " DELETE FROM {$this->prefix}pedidos_itens WHERE item_ped_cod = :ped_cod";

                 // parametros
                 $params = array(':ped_cod'=>$ped_cod);
                 // executo a minha SQL
                 if($this->ExecuteSQL($query, $params)):
                     return TRUE;
                 endif;
        
	}
	
	function GetPedidosRef($ref){
        
		// monto a SQL
	  $query = "SELECT * FROM {$this->prefix}pedidos p INNER JOIN {$this->prefix}clientes c";
	  $query.= " ON p.ped_cliente = c.cli_id";        
	  $query .= " WHERE ped_ref = :ref";
	  $query .= $this->PaginacaoLinks("ped_id", $this->prefix."pedidos WHERE ped_ref = :ref".$ref);
	  
	  // passando parametros
	  $params = array(':ref'=>$ref);
	 // executando a SQL                      
	  $this->ExecuteSQL($query,$params);
	  // trazendo a listagem 
	  $this->GetLista();
  }



   function GetPedidosData($data_ini,$data_fim, $cliente = null){
	  
	   // montando a SQL
	  $query = "SELECT * FROM {$this->prefix}pedidos p INNER JOIN {$this->prefix}clientes c";
	  $query.= " ON p.ped_cliente = c.cli_id";
	  
	  $query.= " WHERE ped_data between :data_ini AND :data_fim";

	  $query .= $this->PaginacaoLinks("ped_id", $this->prefix."ped_data between " . $data_ini. " AND " .$data_fim);
		
	 // passando os parametros  
	  $params = array(':data_ini'=>$data_ini, ':data_fim'=>$data_fim);
	  
	  // executando a SQL
	  $this->ExecuteSQL($query,$params);
	  
	  $this->GetLista();
  }

	function LimparSessoes(){
		unset($_SESSION['PRO']);
		unset($_SESSION['PED']['pedido']);
		unset($_SESSION['PED']['ref']);
	}
}
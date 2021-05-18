<?php 

Class Carrinho{

	private $total_valor;
	private $itens = array();

	function GetCarrinho($sessao=null){

		$i = 1; $sub = 1.00; $tamanho = ''; 


		foreach ($_SESSION['PRO'] as $lista){

			$sub = ($lista['VALOR_US'] * $lista['QTD']);
			$this->total_valor += $sub;

			$this->itens[$i] = array(
				'pro_id' => $lista['ID'],
				'pro_nome' => $lista['NOME'],
				'pro_valor' => $lista['VALOR'],
				'pro_valor_us' => $lista['VALOR_US'],
				'pro_tamanho' => $lista['TAMANHO'],
				'pro_modelo' => $lista['MODELO'],
				'pro_qtd' => $lista['QTD'],
				'pro_img' => $lista['IMG'],
				'pro_link' => $lista['LINK'],
				'pro_subtotal' => Sistema::MoedaBR($sub),
				'pro_subtotal_us' => $sub
			);
			$i++;
		}

		if(count($this->itens) > 0){
			return $this->itens;
		}
		else{
			echo '<h4>Não há itens no carrinho</h4>';
			exit();
		}
	}

	function GetTotal(){
		return $this->total_valor;
	}

	function CarrinhoADD($id, $tamanho, $modelo){
		$produtos = new Produtos();
		$produtos->GetProdutosID($id);
		foreach ($produtos->GetItens() as $pro){
			$ID = $pro['pro_id'];
			$NOME = $pro['pro_nome'];
			$VALOR_US = $pro['pro_valor_us'];
			$VALOR = $pro['pro_valor'];
			$TAMANHO = $tamanho;
			$MODELO = $modelo;
			$ESTOQUE = $pro['pro_estoque'];
			$QTD = 1;
			$IMG = $pro['pro_img_p'];
			$LINK = Rotas::pag_ProdutosInfo().'/'.$ID.'/'.$pro['pro_slug'];
			$ACAO = $_POST['acao'];

		}
		switch ($ACAO) {

			case 'adicionar':
				if(isset($_SESSION['PRO'][$ID]['ID']))
					{
						$_SESSION['PRO'][$ID]['ID'] = $ID;
						$_SESSION['PRO'][$ID]['NOME'] = $NOME;
						$_SESSION['PRO'][$ID]['VALOR'] = $VALOR;
						$_SESSION['PRO'][$ID]['VALOR_US'] = $VALOR_US;
						$_SESSION['PRO'][$ID]['TAMANHO'] = $TAMANHO;
						$_SESSION['PRO'][$ID]['MODELO'] = $MODELO;
						$_SESSION['PRO'][$ID]['QTD'] = $QTD;
						$_SESSION['PRO'][$ID]['IMG'] = $IMG;
						$_SESSION['PRO'][$ID]['LINK'] = $LINK;
					}
					elseif(isset($_SESSION['PRO'][$ID]['ID']) and $_SESSION['PRO'][$ID]['TAMANHO'] != $tamanho){
						$ID = 
						$_SESSION['PRO'][$ID]['ID'] = $ID;
						$_SESSION['PRO'][$ID]['NOME'] = $NOME;
						$_SESSION['PRO'][$ID]['VALOR'] = $VALOR;
						$_SESSION['PRO'][$ID]['VALOR_US'] = $VALOR_US;
						$_SESSION['PRO'][$ID]['TAMANHO'] = $TAMANHO;
						$_SESSION['PRO'][$ID]['MODELO'] = $MODELO;
						$_SESSION['PRO'][$ID]['QTD'] = $QTD;
						$_SESSION['PRO'][$ID]['IMG'] = $IMG;
						$_SESSION['PRO'][$ID]['LINK'] = $LINK;
					}
					else{
						$_SESSION['PRO'][$ID]['QTD'] += $QTD;
					}

					//echo '<h4>Produto adicionado ao carrinho</h4>';
				break;
			case 'add':
					if(!isset($_SESSION['PRO'][$ID]['ID']))
					{
						$_SESSION['PRO'][$ID]['ID'] = $ID;
						$_SESSION['PRO'][$ID]['NOME'] = $NOME;
						$_SESSION['PRO'][$ID]['VALOR'] = $VALOR;
						$_SESSION['PRO'][$ID]['VALOR_US'] = $VALOR_US;
						$_SESSION['PRO'][$ID]['TAMANHO'] = $TAMANHO;
						$_SESSION['PRO'][$ID]['MODELO'] = $MODELO;
						$_SESSION['PRO'][$ID]['QTD'] = $QTD;
						$_SESSION['PRO'][$ID]['IMG'] = $IMG;
						$_SESSION['PRO'][$ID]['LINK'] = $LINK;
					}
					else{
						$_SESSION['PRO'][$ID]['QTD'] += $QTD;
					}

					//echo '<h4>Produto adicionado ao carrinho</h4>';
				break;
			
			case 'del1':
				if($_SESSION['PRO'][$ID]['QTD'] <= 1){
				$this->CarrinhoDel($id);
				echo '<h4>Produto removido do carrinho</h4>';				}
				else{
					$_SESSION['PRO'][$ID]['QTD']-= $QTD;
				}			
				
				break;

			case 'delall':
				$this->CarrinhoDel($id);
				echo '<h4>Produto removido do carrinho</h4>';
				break;
		
			case 'limpar':
				$this->CarrinhoLimpar();
				echo '<h4>Produtos removidos</h4>';
				break;
				//limpa o carrinho inteiro

		}

	}

	function CarrinhoDel($id){
		unset($_SESSION['PRO'][$id]);
		
	}

	function CarrinhoLimpar(){
		unset($_SESSION['PRO']);
	}




}
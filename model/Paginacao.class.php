<?php  

Class Paginacao extends Conexao{
	
	public $limite;
	public $inicio;
	public $totalpags;
	public $link= array();

	function GetPaginacao($campo, $tabela){
		$query = "SELECT {$campo} FROM {$tabela}";
		$this->ExecuteSQL($query);
		$total = $this->TotalDados();

		$this->limite = Config::BD_LIMITE_POR_PAG;
		$paginas = ceil($total / $this->limite);
		$this->totalpags = $paginas;

		$p = (int)isset($_GET['p']) ? $_GET['p'] : 1;

		if ($p > $paginas){
			$p = $paginas;
		}

		//testar na pratica
		$this->inicio = ($p * $this->limite) - $this->limite;

		$tolerancia = 1;//numeros paginas mostradas
		$mostrar= $p + $tolerancia;

		if($mostrar > $paginas){
			$mostrar = $paginas;
		}

		for($i = ($p - $tolerancia); $i <= $mostrar; $i++):
			if($i < 1){
				$i=1;
			}
			array_push($this->link, $i);

		endfor;

	}
}
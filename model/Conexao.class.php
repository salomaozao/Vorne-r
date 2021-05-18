<?php 
Class Conexao extends Config{
	private $host;
	private $user;
	private $senha;
	private $banco;
	protected $obj;
	protected $itens = array();
	protected $prefix;
	public $paginacao_links;
	public $totalpags;
	public $limite;
	public $inicio;




	function __construct(){
		$this->host = self::BD_HOST;
		$this->user = self::BD_USER;
		$this->senha= self::BD_SENHA;
		$this->banco = self::BD_BANCO;
		$this->prefix = self::BD_PREFIXO;
		
		try {
			if($this->Conectar() == null){
				$this->Conectar();
			}
			
		} 
		catch (Exception $e) {
			exit($e->getMessage(). '<h2>Erro ao conectar ao banco de dados</h2>');
		}
	}

	private function Conectar(){

		$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
		$link = new PDO("mysql:host={$this->host};dbname={$this->banco}" , $this->user, $this->senha, $options);
		return $link;
		var_dump($link);
	}


	function ExecuteSQL($query, array $parametros = null){
		$this->obj = $this->Conectar()->prepare($query);

		if(is_array($parametros) && count($parametros) > 0){
			foreach ($parametros as $key => $value){
				$this->obj->bindvalue($key, $value);
			}
		}

		return $this->obj->execute();
	}

	function ListarDados(){
		return $this->obj->fetch(PDO::FETCH_ASSOC);
	}

	function TotalDados(){
		return $this->obj->rowCount();
	}

	function GetItens(){
		return $this->itens;
	}

	function PaginacaoLinks($campo, $tabela){
		$pag = new Paginacao();
		$pag->GetPaginacao($campo, $tabela);
		$this->paginacao_links = $pag->link;

		$this->totalpags = $pag->totalpags;
		$this->limite = $pag->limite;
		$this->inicio = $pag->inicio;

		$inicio = $pag->inicio;
		$limite = $pag->limite;

		if($this->totalpags > 0){
			return " limit {$inicio}, {$limite}";
		}
		else{
			return " ";
		}

	}

	protected function Paginacao($paginas=array()){
		$pag = '<ul class "pagination">';

		foreach ($paginas as $p):
			$pag .=	'<li><a href="?p='.$p.'">'.$p.' </a></li>';
			endforeach;

		if (!$paginas = $this->totalpags) {
			$pag.= '<li><a href="?p='. $this->totalpags .'"> ...'. $this->totalpags .' </a></li>';
		}
		
		

		$pag .= '</ul>';
		if($this->totalpags > 1){
			return $pag;	
		}	
	}

	function ShowPaginacao(){
		return $this->Paginacao($this->paginacao_links);
	}

}
 ?>





 







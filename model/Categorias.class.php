<?php 

Class Categorias extends Conexao{
	
	private $cat_id;
	private $cat_nome;
	private $cat_slug;

	function __construct(){
		parent::__construct();
	}

	function GetCategorias(){
		$query = "SELECT * FROM {$this->prefix}categorias";

		$this->ExecuteSQL($query);

		$this->GetLista();
	}

	private function GetLista(){
		$i = 1;
		while ($lista = $this->ListarDados()):
		$this->itens[$i] = array(
			'cat_id' => $lista['cat_id'],
			'cat_nome' => $lista['cat_nome'], 
			'cat_slug' => $lista['cat_slug'],
			'cat_link' => Rotas::pag_Produtos().'/'.$lista['cat_id'].'/'.$lista['cat_slug'],
            
		   );
			
		$i++;

		endwhile;
	}
    
    function Inserir($cat_nome){
        
        // trato os campos
        $this->setCat_nome($cat_nome);
        $this->setCat_slug($cat_nome);
        
        // monto a SQL
        $query = " INSERT INTO {$this->prefix}categorias (cat_nome, cat_slug )";
        $query.= " VALUES (:cat_nome, :cat_slug )";
        // passo so parametros
        $params = array(':cat_nome' => $this->getCat_nome(),
                        ':cat_slug' => $this->getCat_slug(),
                      
            );
        // executo a minha SQL
            if($this->ExecuteSQL($query, $params)):
                return TRUE;
                
            else:
                return FALSE;
                
            endif;       
    }
    
    function Editar($cat_id,$cat_nome){
        
        // trato os campos
        $this->setCat_nome($cat_nome);
        $this->setCat_slug($cat_nome);
        
        // monto a SQL
        $query = " UPDATE {$this->prefix}categorias ";
        $query.= " SET cat_nome = :cat_nome, cat_slug = :cat_slug ";
        $query.= " WHERE cat_id = :cat_id ";
        // passo so parametros
        $params = array(':cat_nome' => $this->getCat_nome(),
                        ':cat_slug' => $this->getCat_slug(),
                        ':cat_id'   => (int)$cat_id,
            );
        // executo a minha SQL
            if($this->ExecuteSQL($query, $params)):
                return TRUE;
                
            else:
                return FALSE;
                
            endif;
        
        
    }
    
    function Apagar($cat_id){
        
          // verifico se  tenho itens antes de apagar a categoria
          $pro = new Produtos();
          $pro->GetProdutosCatID($cat_id);
          
        if( $pro->TotalDados() > 0):
              echo '<div class="alert alert-danger" > Esta categoria tem: ';
              echo $pro->TotalDados();
              echo ' produtos. Não pode ser apagada, para apagar precisa primeiro apagar os produtos dela </div>';
     
              // se nao tiver produtos nela  eu apago 
         else:
            
                 // monto a SQL
        $query = " DELETE FROM {$this->prefix}categorias";
        $query.= " WHERE cat_id = :id";
        
        // passo os parametros
        $params = array(':id' => (int)$cat_id);
        // executo a SQL
    
         if($this->ExecuteSQL($query, $params)):
                return TRUE;
                
            else:
                return FALSE;
                
            endif;
        
        endif;
     
        
    }


    
    function getCat_nome() {
        return $this->cat_nome;
    }

    function getCat_slug() {
        return $this->cat_slug;
    }

    function setCat_nome($cat_nome) {
        $this->cat_nome = filter_var($cat_nome, FILTER_SANITIZE_STRING);
    }

    function setCat_slug($cat_slug) {
        $this->cat_slug = Sistema::GetSlug($cat_slug);
    }




    

}





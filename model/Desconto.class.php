<?php 

Class Desconto extends Conexao {

    private $cupom_codigo;
    private $cupom_tipo;
    private $cupom_valor;
    private $cupom_ativo;

    function __construct(){
		parent::__construct();
	}

    function Preparar($cupom_codigo,$cupom_tipo,$cupom_valor,$cupom_ativo=true){   
       
        $this->setCupom_codigo($cupom_codigo);
        $this->setCupom_tipo($cupom_tipo);
        $this->setCupom_valor($cupom_valor);
        $this->setCupom_ativo($cupom_ativo);
    }

    function InserirCupom(){

        $query = "INSERT INTO ".$this->prefix."cupons ";
        $query.= "(cupom_codigo, cupom_tipo, cupom_valor, cupom_ativo)";
        $query.= " VALUES ";
        $query.= "(:cupom_codigo, :cupom_tipo, :cupom_valor, :cupom_ativo)";
    
        $params = array(
        ':cupom_codigo'=> $this->getCupom_codigo(),  
        ':cupom_tipo'=> $this->getCupom_tipo(),  
        ':cupom_valor'=> $this->getCupom_valor(),
        ':cupom_ativo'=> $this->getCupom_ativo(), 
        );
    
        // executo a SQL
        if($this->ExecuteSQL($query, $params)):
               
            return TRUE;
        
        else:
            
            return FALSE; 
        
        endif;
    }

    function AlterarCupom($id){
          
        $query = " UPDATE {$this->prefix}cupons SET cupom_codigo = :cupom_codigo, cupom_tipo = :cupom_tipo, cupom_valor = :cupom_valor, cupom_ativo = :cupom_ativo " ;
        $query.= " WHERE cupom_id = :cupom_id";
        
        $params = array(
        ':cupom_codigo'=> $this->getCupom_codigo(),  
        ':cupom_tipo'=> $this->getCupom_tipo(),  
        ':cupom_valor'=> $this->getCupom_valor(),
        ':cupom_ativo'=> $this->getCupom_ativo(),                 
        ':cupom_id'=> (int)$id,   
                     
        );
        
           // executo a SQL
           if($this->ExecuteSQL($query, $params)):
               
                   return TRUE;
               
               else:
                   
                   return FALSE; 
               
           endif; 
           
    }

    function Apagar($id){
        $query  = "DELETE FROM {$this->prefix}cupons";
        $query .= " WHERE cupom_id = :cupom_id";
        $params = array(
        ':cupom_id' => (int)$id
        );
            
        if($this->ExecuteSQL($query, $params)):
               
                return TRUE;
               
            else:
                   
                return FALSE; 
               
        endif;
    
    }

    function setCupom_codigo($cupom_codigo){
        $this->cupom_codigo = $cupom_codigo;
    }

    function setCupom_tipo($cupom_tipo){
        $this->cupom_tipo = $cupom_tipo;
    }

    function setCupom_valor($cupom_valor){
        $this->cupom_valor = $cupom_valor;
    }

    function setCupom_ativo($cupom_ativo){
        $this->cupom_ativo = $cupom_ativo;
    }

    function getCupom_codigo(){
        return $this->cupom_codigo; 
    }

    function getCupom_tipo(){
        return $this->cupom_tipo;
    }

    function getCupom_valor(){
        return $this->cupom_valor;
    }

    function getCupom_ativo(){
        return $this->cupom_ativo;
    }
    

}
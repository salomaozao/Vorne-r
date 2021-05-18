<?php

Class Ativo extends Conexao{

  private $Ativo_produto;
  private $Ativo_modelo;
  private $Ativo_tamanho_p;
  private $Ativo_tamanho_pp;
  private $Ativo_tamanho_m;
  private $Ativo_tamanho_g;
  private $Ativo_tamanho_gg;
  private $Ativo_tamanho_xgg;


  function __construct(){
	parent::__construct();
  }
    
  function GetAtivosRef($pro){

		$query = "SELECT * FROM {$this->prefix}ativos WHERE ativo_produto = :pro";
		//add nome e idprod da imagem no bd
		$parametros = array(':pro'=>$pro);

		$this->ExecuteSQL($query,$parametros);

		$this->GetLista();
	}

 

  function Preparar($Ativo_produto, $Ativo_modelo, $Ativo_tamanho_p, $Ativo_tamanho_pp, $Ativo_tamanho_m, $Ativo_tamanho_g, $Ativo_tamanho_gg, $Ativo_tamanho_xgg) {
    $this->setAtivo_produto($Ativo_produto);
    $this->setAtivo_modelo($Ativo_modelo);
    $this->setAtivo_tamanho_p($Ativo_tamanho_p);
    $this->setAtivo_tamanho_pp($Ativo_tamanho_pp);
    $this->setAtivo_tamanho_m($Ativo_tamanho_m);
    $this->setAtivo_tamanho_g($Ativo_tamanho_g);
    $this->setAtivo_tamanho_gg($Ativo_tamanho_gg);
    $this->setAtivo_tamanho_xgg($Ativo_tamanho_xgg);

  }

  function InserirAtivos(){
      $query = "INSERT INTO {$this->prefix}ativos (ativo_produto, ativo_modelo, ativo_tamanho_p, ativo_tamanho_pp, ativo_tamanho_m, ativo_tamanho_g, ativo_tamanho_gg, ativo_tamanho_xgg)" ;
      $query.= " VALUES ";
      $query.= " ( :ativo_produto, :ativo_modelo, :ativo_tamanho_p, :ativo_tamanho_pp, :ativo_tamanho_m, :ativo_tamanho_g, :ativo_tamanho_gg, :ativo_tamanho_xgg)";
      
      $params = array(

      ':ativo_produto'=> $this->getAtivo_produto(),   
      ':ativo_modelo'=> $this->getAtivo_modelo(),   
      ':ativo_tamanho_p'=> $this->getAtivo_tamanho_p(),
      ':ativo_tamanho_pp'=> $this->getAtivo_tamanho_pp(),
      ':ativo_tamanho_m'=> $this->getAtivo_tamanho_m(),
      ':ativo_tamanho_g'=> $this->getAtivo_tamanho_g(),
      ':ativo_tamanho_gg'=> $this->getAtivo_tamanho_gg(),
      ':ativo_tamanho_xgg'=> $this->getAtivo_tamanho_xgg() 

      );


        if($this->ExecuteSQL($query, $params)):
            
                return TRUE;
            
            else:
                
                return FALSE; 
            
        endif;
    
    
  }

  function Alterar($ref){
          
    $query = " UPDATE {$this->prefix}ativos SET ativo_modelo=:ativo_modelo, ativo_tamanho=:ativo_tamanho" ;
    $query.= " WHERE ativo_produto=:ativo_produto ";
    
    $params = array(
      ':ativo_produto'=> $ref,
      ':ativo_modelo'=> $this->getAtivo_modelo(),   
      ':ativo_tamanho_p'=> $this->getAtivo_tamanho_p(),
      ':ativo_tamanho_pp'=> $this->getAtivo_tamanho_pp(),
      ':ativo_tamanho_m'=> $this->getAtivo_tamanho_m(),
      ':ativo_tamanho_g'=> $this->getAtivo_tamanho_g(),
      ':ativo_tamanho_gg'=> $this->getAtivo_tamanho_gg(),
      ':ativo_tamanho_xgg'=> $this->getAtivo_tamanho_xgg()           
    );
    
       
    
       // executo a SQL
       if($this->ExecuteSQL($query, $params)):
           
               return TRUE;
           
           else:
               
               return FALSE; 
           
       endif;    
       
  }

  function Apagar($ref){
    
    $query  = "DELETE FROM {$this->prefix}ativos";
    $query .= " WHERE ativo_produto = :ativo_produto";
    $params = array(
    ':ativo_produto' => (int)$ref
    );
        
    if($this->ExecuteSQL($query, $params)):
           
            return TRUE;
           
        else:
               
            return FALSE; 
           
    endif;

  }


  private function GetLista(){
    
    $i = 1;
		while ($lista = $this->ListarDados()):
		$this->itens[$i] = array(
			'Ativo_produto' => $lista['ativo_produto'],
			'Ativo_modelo'  => $lista['ativo_modelo'], 
      'Ativo_tamanho_p' => $lista['ativo_tamanho_p'],
      'Ativo_tamanho_pp' => $lista['ativo_tamanho_pp'],
      'Ativo_tamanho_m' => $lista['ativo_tamanho_m'],
      'Ativo_tamanho_g' => $lista['ativo_tamanho_g'], 
      'Ativo_tamanho_gg' => $lista['ativo_tamanho_gg'],  
      'Ativo_tamanho_xgg' => $lista['ativo_tamanho_xgg'],         
      );	
      		
    $i++;
    
		endwhile;
  }

  /*function VerificarAtivo($ativo, $array){
    if ($ativo !== 'NAO'){
      return array_push($array, $ativo);
    }
    else{
      return;
    }
  }*/
    
  function setAtivo_produto($Ativo_produto){
    $this->Ativo_produto = $Ativo_produto;
  }
  function setAtivo_modelo($Ativo_modelo) {
    $this->Ativo_modelo = $Ativo_modelo;
  }
  function setAtivo_tamanho_p($Ativo_tamanho_p) {
    $this->Ativo_tamanho_p = $Ativo_tamanho_p;
  }
  function setAtivo_tamanho_pp($Ativo_tamanho_pp) {
    $this->Ativo_tamanho_pp = $Ativo_tamanho_pp;
  }
  function setAtivo_tamanho_m($Ativo_tamanho_m) {
    $this->Ativo_tamanho_m = $Ativo_tamanho_m;
  }
  function setAtivo_tamanho_g($Ativo_tamanho_g) {
    $this->Ativo_tamanho_g = $Ativo_tamanho_g;
  }
  function setAtivo_tamanho_gg($Ativo_tamanho_gg) {
    $this->Ativo_tamanho_gg = $Ativo_tamanho_gg;
  }
  function setAtivo_tamanho_xgg($Ativo_tamanho_xgg) {
    $this->Ativo_tamanho_xgg = $Ativo_tamanho_xgg;
  }

  function getAtivo_produto(){
    return $this->Ativo_produto;
  }
  function getAtivo_modelo() {
    return $this->Ativo_modelo;
  }
  function getAtivo_tamanho_p() {
    return $this->Ativo_tamanho_p;
  }
  function getAtivo_tamanho_pp() {
    return $this->Ativo_tamanho_pp;
  }
  function getAtivo_tamanho_m() {
    return $this->Ativo_tamanho_m;
  }
  function getAtivo_tamanho_g() {
    return $this->Ativo_tamanho_g;
  }
  function getAtivo_tamanho_gg() {
    return $this->Ativo_tamanho_gg;
  }
  function getAtivo_tamanho_xgg() {
    return $this->Ativo_tamanho_xgg;
  }



}
<?php 

Class Template extends SmartyBC{

	function __construct(){
		parent:: __construct();
		$this->setTemplateDir('view/');//seta o diretório do arquivo
		$this->setCompileDir('view/compile/');//diretório compiladores
		$this->setCacheDir('view/cache/');//pasta pra guardar em cache
	}
}
 ?>
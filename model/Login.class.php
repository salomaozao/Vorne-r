<?php  

Class Login extends Conexao{

	private $user;
	private $senha;

	function __construct(){
		parent::__construct();
	}

	function GetLogin($user, $senha){
		$this->setUser($user);
		$this->setSenha($senha);

		$query = "SELECT * FROM {$this->prefix}clientes WHERE cli_email = :email AND cli_pass = :senha";

		$params = array(
			':email' => $this->getUser(),
			':senha' => $this->getSenha()
		);

		$this->ExecuteSQL($query, $params);

		if($this->TotalDados() > 0){
			$lista = $this->ListarDados();
			
			$_SESSION['CLI']['cli_id'] = $lista['cli_id'];
			$_SESSION['CLI']['cli_nome'] = $lista['cli_nome'];
			$_SESSION['CLI']['cli_sobrenome'] = $lista['cli_sobrenome'];
			$_SESSION['CLI']['cli_endereco'] = $lista['cli_endereco'];
			$_SESSION['CLI']['cli_numero'] = $lista['cli_numero'];
			$_SESSION['CLI']['cli_bairro'] = $lista['cli_bairro'];
			$_SESSION['CLI']['cli_cidade'] = $lista['cli_cidade'];
			$_SESSION['CLI']['cli_uf'] = $lista['cli_uf'];
			$_SESSION['CLI']['cli_cep'] = $lista['cli_cep'];
			$_SESSION['CLI']['cli_cpf'] = $lista['cli_cpf'];
			$_SESSION['CLI']['cli_ddd'] = $lista['cli_ddd'];
			$_SESSION['CLI']['cli_celular'] = $lista['cli_celular'];
			$_SESSION['CLI']['cli_email'] = $lista['cli_email'];
			$_SESSION['CLI']['cli_pass'] = $lista['cli_pass'];
			$_SESSION['CLI']['cli_data_nasc'] = $lista['cli_data_nasc'];
			$_SESSION['CLI']['cli_data_cad'] = $lista['cli_data_cad'];
			$_SESSION['CLI']['cli_hora_cad'] = $lista['cli_hora_cad'];

			Rotas::Redirecionar(0,Rotas::pag_ClienteLogin());
		}
		else{
				
			$query = "SELECT * FROM {$this->prefix}clientes WHERE cli_email = :email";
			$params = array(
				':email' => $this->getUser()
			);

			$this->ExecuteSQL($query, $params);

			if($this->TotalDados() > 0){
				//echo '<h4>Senha não corresponde ao usuario</h4>';
			}
			else{
				//echo '<h4>Este usuario não possui cadastro neste site</h4>';
			}			
		}

	}

	function GetLoginADM($user,$senha){
        
        $this->setUser($user);
        $this->setSenha($senha);
        
        $query = "SELECT * FROM {$this->prefix}user WHERE user_email = :email AND user_pw = :senha";
        
        $params = array(':email'=>  $this->getUser(),
                        ':senha'=>  $this->getSenha());
        
           $this->ExecuteSQL($query,$params);
           
           // caso o login seja efetivado com exito 
           if($this->TotalDados() > 0):
               
             $lista = $this->ListarDados();
               
             $_SESSION['ADM']['user_id']     =  $lista['user_id'];
             $_SESSION['ADM']['user_nome']   =  $lista['user_nome'];
             $_SESSION['ADM']['user_email']  =  $lista['user_email'];
             $_SESSION['ADM']['user_pw']     =  $lista['user_pw'];
             $_SESSION['ADM']['user_data']     = Sistema::DataAtualBR();
             $_SESSION['ADM']['user_hora']     = Sistema::HoraAtual();

             return TRUE;
           // caso o login seja incorreto 
           else:    
               
               
                //echo '<h4 class="alert alert-danger"> O login incorreto </h4>';  
                //  Rotas::Redirecionar(1,  Rotas::pag_ClienteLogin() );
           
                return FALSE;
           endif;

    }
	
	static function AcessoNegado(){
		//echo '<div class="alert alert-danger">Faça o login</div>';
	}

	static function Logado(){
		if (isset($_SESSION['CLI']['cli_email']) && isset($_SESSION['CLI']['cli_id'])) {
			return true;
		}
		else{
			return false;
		}
	}

	static function LogadoADM(){
		if (isset($_SESSION['ADM']['user_nome']) && isset($_SESSION['ADM']['user_id'])) {
			return true;
		}
		else{
			return false;
		}
	}

	static function Logoff(){
		unset($_SESSION['CLI']);
		echo '<h4> Saiu </h4>';
		Rotas::Redirecionar(1,Rotas::get_SiteHome());
	}

	static function LogoffADM(){
		unset($_SESSION['ADM']);
		Rotas::Redirecionar(0,'login.php');
	}

	static function MenuCliente(){
		if (!self::Logado()) :

			self::AcessoNegado();
			Rotas::Redirecionar(0,Rotas::pag_ClienteLogin());

		exit();

		else:
			
			$smarty = new Template();

			$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
			$smarty->assign('PAG_CONTA', Rotas::pag_ClienteConta());
			$smarty->assign('PAG_CARRINHO',Rotas::pag_Carrinho());
			$smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
			$smarty->assign('PAG_CLIENTE_PEDIDOS', Rotas::pag_ClientePedidos());
			$smarty->assign('PAG_CLIENTE_DADOS', Rotas::pag_ClienteDados());
			$smarty->assign('PAG_CLIENTE_SENHA', Rotas::pag_ClienteSenha());
			$smarty->assign('USER', $_SESSION['CLI']['cli_nome']);

			$smarty->display('menu_cliente.tpl');

		endif;
	}

	private function setUser($user){
		$this->user = $user;
	}

	private function setSenha($senha){
		$this->senha = md5($senha);//passar criptografia depois
	}

	function getUser(){
		return $this->user;
	}

	function getSenha(){
		return $this->senha;
	}
}



<?php 
Class Config{

	//endereços que podem mudar quando upar o site
	const SITE_URL = "http://localhost";
	const SITE_PASTA = "vorne";
	const SITE_NOME = "Loja Vorne";
	const SITE_EMAIL_ADM = "victor08silva08@gmail.com";

	//informações do banco de dados
	const BD_HOST = "localhost";
	const BD_USER = "root";
	const BD_SENHA = "";
	const BD_BANCO = "vorne";
	const BD_PREFIXO = "vr_";
	const BD_LIMITE_POR_PAG = 9;//numero de limite de produtos/pagina

	//informações para php mailer
	const EMAIL_HOST = "smtp.gmail.com";
	const EMAIL_USER = "vornecompany@gmail.com";
	const EMAIL_NOME = "Contato Loja Vorne";
	const EMAIL_SENHA = "21013000";
	const EMAIL_PORTA = 587;
	const EMAIL_SMTPAUTH = true;
	const EMAIL_SMTPSECURE= "tls";
	const EMAIL_COPIA = "vornecompany@gmail.com";

	//constantes pagseguro
	const PS_EMAIL  = "meuemail@teste.com"; // email pagseguro
    const PS_TOKEN  = "0DFD654F368810BBB"; // token para testes
    const PS_TOKEN_SBX = "0187D7A3BA7F";  // token de transações reais
    const PS_AMBIENTE = "production"; // production   /  sandbox

}
 ?>

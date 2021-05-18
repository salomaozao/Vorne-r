<?php
/* Smarty version 3.1.39, created on 2021-04-08 23:28:39
  from 'C:\xampp\htdocs\vorne\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606fbbd7f2a9e1_40366418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '792dc0c0e06b08f4b24f486dacd605e7bd1085aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vorne\\view\\contato.tpl',
      1 => 1617935317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606fbbd7f2a9e1_40366418 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Contato Vorne</title>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/contato/contato-r.css" />
		<link
			href="https://fonts.googleapis.com/icon?family=Material+Icons"
			rel="stylesheet"
		/>
	</head>
	<body>
		<div id="contato">
			<div id="image-bg">
				<div id="image-cover">
				<br>
					<div class="info">
						<h3>Endereço</h3>
						<p color="grey">Não possuimos loja Fisíca ainda.</p>
					</div>

					<div class="info">
						<h3>Telefone</h3>
						<p color="green">+55 11 94132-6819</p>
					</div>

					<div class="info">
						<h3>Email</h3>
						<p color="green">VorneCompany@gmail.com</p>
					</div>
				</div>
			</div>
			<form action="envio" method="get">
				<h1>Contate-nos!</h1>

				<div class="form-area">
					<label for="input-name">Nome:</label>
					<input id="nome" name="nome"/>
				</div>

				<div class="form-area">
					<label for="input-email">Email:</label>
					<input id="email" name="email"/>
				</div>

				<div class="form-area">
					<label for="input-msg">Mensagem:</label>
					<textarea id="mensagem" id="mensagem"></textarea>
				</div>
				<button type="submit">Enviar!</button>
			</form>
		</div>
	</body>
</html>
<?php }
}

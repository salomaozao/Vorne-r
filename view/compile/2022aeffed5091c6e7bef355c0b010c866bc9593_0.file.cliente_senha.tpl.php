<?php
/* Smarty version 3.1.39, created on 2021-05-06 01:03:15
  from 'C:\xampp\htdocs\vorne\view\cliente_senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60936a83b53d66_38826447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2022aeffed5091c6e7bef355c0b010c866bc9593' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vorne\\view\\cliente_senha.tpl',
      1 => 1620273793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60936a83b53d66_38826447 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/change_pw\change_pw.css" />
		<link
			href="https://fonts.googleapis.com/icon?family=Material+Icons"
			rel="stylesheet"
		/>
	</head>
	<body>
		<form class="change_pw">
			<h1 class="title">Alteração de senha de acesso</h1>
			<div>
				<label for="pw_old"><h5>Sua senha atual</h5></label>
				<input type="password" id="pw_old" x />
			</div>
			<div>
				<label for="pw_new"><h5>Sua senha nova</h5></label>
				<input type="password" id="pw_new" />
			</div>

			<button type="submit">Confirmar</button>
		</form>
	</body>
</html><?php }
}

<?php
/* Smarty version 3.1.39, created on 2021-05-05 20:52:07
  from 'C:\xampp\htdocs\vorne\view\menu_cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60932fa70f3560_87088076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb88a511ea80669915ddf6e631ea40186ff68d40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vorne\\view\\menu_cliente.tpl',
      1 => 1620258673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60932fa70f3560_87088076 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<link
			href="https://fonts.googleapis.com/icon?family=Material+Icons"
			rel="stylesheet"
		/>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/minha_conta\minha_conta.css" />
	</head>
	<body>
		<div id="minha_conta">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_PEDIDOS']->value;?>
">
				<button>
					<span class="material-icons">qr_code_2</span>
					<span class="content">Pedidos</span>
				</button>
			</a>

			<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_DADOS']->value;?>
">
				<button>
					<span class="material-icons">contact_page</span>
					<span class="content">Meus Dados</span>
				</button>
			</a>

			<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_SENHA']->value;?>
">
				<button class="alert">
					<span class="material-icons">info</span>
					<span class="content">Alterar Senha</span>
				</button>
			</a>

			<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
">
				<button class="danger">
					<span class="material-icons">logout</span>
					<span class="content">Sair!</span>
				</button>
			</a>
		</div>
	</body>
</html><?php }
}

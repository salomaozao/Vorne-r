<?php
/* Smarty version 3.1.39, created on 2021-05-05 20:37:54
  from 'C:\xampp\htdocs\vorne\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60932c52641de6_09748651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58bc71a9d1f70dc19659bf876415f8d6f67c4234' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vorne\\view\\index.tpl',
      1 => 1620257804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60932c52641de6_09748651 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
\lib\paginas\index\styles.css" rel="stylesheet" />

		<!-- Icons -->
		<link
			href="https://fonts.googleapis.com/icon?family=Material+Icons"
			rel="stylesheet"
		/>
	</head>
	<body>
		<div id="header">
			<div>
				<h2 id="minTitle">Vorne co.</h2>
				<a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
">
					<img
						class="timlogo"
						src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
\media\logo_transparent.png"
						onclick="location.reload"
					/>
				</a>
			</div>

			<div id="icons" class="headerStruture">
				<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHACONTA']->value;?>
">
					<div
						id="config"
						class="material-icons"
						href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHACONTA']->value;?>
"
						name="account_circle"
					></div>
				</a>

				<a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
">
					<div
						id="circle"
						class="material-icons"
						href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
"
						name="store"
					></div>
				</a>

				<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
">
					<div
						id="config"
						class="material-icons"
						href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
"
						name="shopping_cart"
					></div>
				</a>
			</div>
		</div>
		<div>
		<?php  Rotas::get_Pagina(); ?></div>
	</body>
</html><?php }
}

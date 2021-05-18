<?php
/* Smarty version 3.1.39, created on 2021-05-11 19:44:23
  from 'C:\xampp_v2\htdocs\vorne\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609b08c7134e15_69231943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfa493598ec3e9e9a886121894267a00b8c746ec' => 
    array (
      0 => 'C:\\xampp_v2\\htdocs\\vorne\\view\\login.tpl',
      1 => 1620772717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609b08c7134e15_69231943 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/login_adm/login-r.css" rel="stylesheet" />

		<link
			href="https://fonts.googleapis.com/icon?family=Material+Icons"
			rel="stylesheet"
		/>


		<?php echo '<script'; ?>
>
			const togglePw = (el) => {
				const input = document.getElementById("password")
				if (el.innerHTML == "visibility") {
					el.innerHTML = "visibility_off"
					input.type = "text"
				} else {
					el.innerHTML = "visibility"
					input.type = "password"
				}
			}
		<?php echo '</script'; ?>
>
	</head>
	<body>
		<div class="login">
			<div>
				<div>
					<form method="post">
						<div>
							<h1>Login</h1>
							<div class="inputs">
								<input
									type="email"
									id="email"
									name = "txt_email"
									placeholder="E-mail"
									required
								/>
								<div>
									<input
										type="password"
										id="password"
										name="txt_senha"
										placeholder="senha"
										required
									/>
									<span
										class="material-icons"
										onclick="togglePw(this)"
									>
										visibility
									</span>
								</div>
							</div>
						</div>
						<button type="submit" id="login_bttn">Login</button>
					</form>
				
				</div>
				<div>
					<span>Não possuí conta? <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value;?>
">Cadastre-se</a></span>
				</div>
			</div>
		</div>
	</body>
</html>
<?php }
}

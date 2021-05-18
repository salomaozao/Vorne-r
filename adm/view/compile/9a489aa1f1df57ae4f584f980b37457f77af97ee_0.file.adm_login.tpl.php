<?php
/* Smarty version 3.1.39, created on 2021-05-06 00:33:05
  from 'C:\xampp\htdocs\vorne\adm\view\adm_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60936371c564e6_90553765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a489aa1f1df57ae4f584f980b37457f77af97ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vorne\\adm\\view\\adm_login.tpl',
      1 => 1620271982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60936371c564e6_90553765 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/login_adm\login-r.css" rel="stylesheet" />

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
					<form method = "POST">
						<div>
							<h1>Administração</h1>
							<div class="inputs">
								<input
									type="email"
									id="email"
									name="txt_email"
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
						<button type="submit" id="login_bttn" name="txt_logar">Login</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
<?php }
}

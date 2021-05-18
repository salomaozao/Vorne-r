<?php
/* Smarty version 3.1.39, created on 2021-05-06 00:55:44
  from 'C:\xampp\htdocs\vorne\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609368c0a95440_13412978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76c0c563319b3772f678cd15405fd74917b2a9df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vorne\\view\\login.tpl',
      1 => 1620273342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609368c0a95440_13412978 (Smarty_Internal_Template $_smarty_tpl) {
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
					<p>Ou</p>
					<div id="alt_logins">
						<button id="fb">
							<span class="material-icons">facebook</span>Facebook
						</button>
						<button id="google">
							<span class="material-icons">circle</span>Google
						</button>
					</div>
				</div>
				<p>
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

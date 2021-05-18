<?php
/* Smarty version 3.1.39, created on 2021-05-05 20:57:46
  from 'C:\xampp\htdocs\vorne\view\cliente_dados.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609330faee6f60_74494859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9bd3f72b94cf6078184394514f2ea93f9d6044f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vorne\\view\\cliente_dados.tpl',
      1 => 1620259064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609330faee6f60_74494859 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Vorne Dados do cliente</title>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/cli_dados/cliente_dados-r.css" />
		<link
			href="https://fonts.googleapis.com/icon?family=Material+Icons"
			rel="stylesheet"
		/>
	</head>
	<body>
		<div id="cliente-dados">
			<h1>Cadastro</h1>
			<div style="flex-direction: row">
				<form id="input-row">
					<div class="input-column">
						<div class="input-area">
							<label for="name">Nome:</label>
							<input required type="text" id="name" />
						</div>

						<div class="input-area">
							<label for="name">Sobrenome :</label>
							<input required type="text" id="name" />
						</div>

						<div class="input-area">
							<label for="name">Nascimento:</label>
							<input required type="text" id="name" />
						</div>
						<div class="controls">
							<button disabled="true">
								<span class="material-icons"> arrow_left </span>
							</button>
							<span class="ctrl-page">1 de 4</span>
							<button onclick="changeFormCol(0, 1)">
								<span class="material-icons">
									arrow_right
								</span>
							</button>
						</div>
					</div>
					<div class="input-column">
						<div class="input-area">
							<label for="name">CPF:</label>
							<input required type="text" id="name" />
						</div>
						<div class="input-area">
							<label for="name">Email:</label>
							<input required type="text" id="name" />
						</div>
						<div class="input-area">
							<label for="name">N° de telefone:</label>
							<input required type="text" id="name" />
						</div>
						<div class="controls">
							<button onclick="changeFormCol(1, -1)">
								<span class="material-icons"> arrow_left </span>
							</button>
							<span class="ctrl-page">2 de 4</span>
							<button onclick="changeFormCol(1, 1)">
								<span class="material-icons">
									arrow_right
								</span>
							</button>
						</div>
					</div>
					<div class="input-column">
						<div class="input-area">
							<label for="name">Endereço:</label>
							<input required type="text" id="name" />
						</div>

						<div class="input-area">
							<label for="name">Número da casa:</label>
							<input required type="text" id="name" />
						</div>

						<div class="input-area">
							<label for="name">Bairro:</label>
							<input required type="text" id="name" />
						</div>

						<div class="controls">
							<button onclick="changeFormCol(2, -1)">
								<span class="material-icons"> arrow_left </span>
							</button>
							<span class="ctrl-page">3 de 4</span>
							<button onclick="changeFormCol(2, 1)">
								<span class="material-icons">
									arrow_right
								</span>
							</button>
						</div>
					</div>
					<div class="input-column">
						<div class="input-area">
							<label for="name">Cidade:</label>
							<input required type="text" id="name" />
						</div>

						<div class="input-area">
							<label for="name">UF:</label>
							<input type="text" id="name" />
						</div>

						<div class="input-area">
							<label for="name">CEP:</label>
							<input type="text" id="name" />
						</div>
						<div class="controls">
							<button onclick="changeFormCol(3, -1)">
								<span class="material-icons"> arrow_left </span>
							</button>
							<span class="ctrl-page">4 de 4</span>
							<button onclick="changeFormCol(3, 1)">
								<span class="material-icons"> done </span>
							</button>
						</div>
					</div>

					<div class="input-column confirm">
						<div class="input-area">
							<h3>Por razões de segurança. confirme sua senha</h3>
							<input type="text" id="name" />
							<button type="submit">
								<span>Confirmar!</span>
							</button>
						</div>
					</div>
				</form>
			</div>
			<button class="confirm" onclick="endform()">Confirmar</button>
		</div>
		<?php echo '<script'; ?>
>
			const changeFormCol = (id, val) => {
				document.getElementsByClassName("input-column")[
					id
				].style.display = "none"
				document.getElementsByClassName("input-column")[
					id + val
				].style.display = "flex"
			}
			const cols = document.getElementsByClassName("input-column")
			const endform = () => {
				for (let el of cols) {
					el.style.display = "none"
				}
				cols[cols.length - 1].style.display = "flex"
			}
		<?php echo '</script'; ?>
>
	</body>
</html><?php }
}

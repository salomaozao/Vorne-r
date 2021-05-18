<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<link
			href="https://fonts.googleapis.com/icon?family=Material+Icons"
			rel="stylesheet"
		/>
		<link rel="stylesheet" href="{$GET_SITE_HOME}/lib/paginas/minha_conta\minha_conta.css" />
	</head>
	<body>
		<div id="minha_conta">
			<a href="{$PAG_CLIENTE_PEDIDOS}">
				<button>
					<span class="material-icons">qr_code_2</span>
					<span class="content">Pedidos</span>
				</button>
			</a>

			<a href="{$PAG_CLIENTE_DADOS}">
				<button>
					<span class="material-icons">contact_page</span>
					<span class="content">Meus Dados</span>
				</button>
			</a>

			<a href="{$PAG_CLIENTE_SENHA}">
				<button class="alert">
					<span class="material-icons">info</span>
					<span class="content">Alterar Senha</span>
				</button>
			</a>

			<a href="{$PAG_LOGOFF}">
				<button class="danger">
					<span class="material-icons">logout</span>
					<span class="content">Sair!</span>
				</button>
			</a>
		</div>
	</body>
</html>
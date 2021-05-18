<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Contato Vorne</title>
		<link rel="stylesheet" href="{$GET_SITE_HOME}/lib/paginas/contato/contato-r.css" />
		<link
			href="https://fonts.googleapis.com/icon?family=Material+Icons"
			rel="stylesheet"
		/>
	</head>
	<body>
		<div id="contato">
			<div id="image-bg">
				<div id="image-cover">
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

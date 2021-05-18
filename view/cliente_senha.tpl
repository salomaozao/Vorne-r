<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
		<link rel="stylesheet" href="{$GET_SITE_HOME}/lib/paginas/change_pw\change_pw.css" />
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
</html>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link href="{$GET_SITE_HOME}/lib/paginas/login_adm\login-r.css" rel="stylesheet" />

		<link
			href="https://fonts.googleapis.com/icon?family=Material+Icons"
			rel="stylesheet"
		/>


		<script>
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
		</script>
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

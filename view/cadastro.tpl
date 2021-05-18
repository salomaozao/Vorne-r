<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />


		<link rel="stylesheet" href="{$GET_SITE_HOME}/lib/paginas/cadastro/cadastro.css" />
		<link
			href="https://fonts.googleapis.com/icon?family=Material+Icons"
			rel="stylesheet"
		/>

		<title>Cadastro</title>
	</head>
	<body>
		<div id="inputs" class="col cadastro text-ce">
			<h1 id="title" style="text-align-center">Cadastro Vorne</h1>
			<form method="POST" >
				<div class="formDiv" id="form-0" class="col">
					<div class="row">
						<div class="col">
							<label for="cli_nome">Nome:</label>
							<input required type="text" name="cli_nome" id="cli_nome" />
						</div>
						<div class="col">
							<label for="cli_sobrenome">Sobrenome:</label>
							<input
								required
								type="text"
								name="cli_sobrenome"
								id="cli_sobrenome"
							/>
						</div>
					</div>

					<div class="col">
						<label for="cli_data_nasc">Data de Nascimento:</label>
						<input
							required
							type="date"
							name="cli_data_nasc"
							id="cli_data_nasc"
						/>
					</div>

					<div class="col">
						<label for="cli_email">Email:</label>
						<input required type="text" name="cli_email" id="cli_email" />
					</div>

					<div class="row">
						<div class="col">
							<label for="cli_cpf">CPF</label>
							<input required type="text" name="cli_cpf" id="cli_cpf" />
						</div>
						<div class="col">
							<label for="cli_senha">Senha:</label>
							<input
								required
								type="text"
								name="cli_senha"
								id="cli_senha"
							/>
						</div>
					</div>

					<div class="col">
						<label for="cli_verificarsenha">Confirme a senha:</label>
						<input
							required
							type="text"
							name="cli_verificarsenha"
							id="cli_verificarsenha"
						/>
					</div>

					<div class="row">
						<div class="col">
							<label for="cli_ddd">DDD:</label>
							<input required type="text" name="cli_ddd" id="cli_ddd" />
						</div>
						<div class="col">
							<label for="cli_celular">cli_celular:</label>
							<input
								required
								type="text"
								name="cli_celular"
								id="cli_celular"
							/>
						</div>
					</div>

					<div class="btn_row">
						<button
							class="submit_btn"
							type="button"
							id="submit"
							disabled
						>
							Página anterior
						</button>

						<button
							class="submit_btn"
							type="button"
							id="submit"
							onclick="nextForm()"
						>
							Próxima página
						</button>
					</div>
				</div>

				<div class="formDiv" id="form-1" method="POST" class="col">
					<div class="row">
						<div class="col">
							<label for="cli_estado">Estado:</label>

							<div class="form-select">
								<select name="cli_estado" required id="cli_estado">
									<option value="AC">AC</option>
									<option value="AL">AL</option>
									<option value="AP">AP</option>
									<option value="AM">AM</option>
									<option value="BA">BA</option>
									<option value="ES">CE</option>
									<option value="DF">DF</option>
									<option value="GO">GO</option>
									<option value="MA">MA</option>
									<option value="MT">MT</option>
									<option value="MS">MS</option>
									<option value="MG">MG</option>
									<option value="PA">PA</option>
									<option value="PB">PB</option>
									<option value="PR">PR</option>
									<option value="PE">PE</option>
									<option value="PI">PI</option>
									<option value="RJ">RJ</option>
									<option value="RN">RN</option>
									<option value="RS">RS</option>
									<option value="RO">RO</option>
									<option value="RR">RR</option>
									<option value="SC">SC</option>
									<option value="SP">SP</option>
									<option value="SE">SE</option>
									<option value="TO">TO</option>
								</select>
								<span class="select-icon">
									<i class="zmdi zmdi-chevron-down"></i>
								</span>
							</div>
						</div>
						<div class="col">
							<label for="cli_cep">CEP:</label>
							<input required type="text" name="cli_cep" id="cli_cep" />
						</div>
					</div>

					<div class="col">
						<label for="cli_cidade">Cidade:</label>
						<input required type="text" name="cli_cidade" id="cli_cidade" />
					</div>

					<div class="col">
						<label for="cli_bairro">Bairro:</label>
						<input required type="text" name="cli_bairro" id="cli_bairro" />
					</div>

					<div class="col">
						<label for="cli_endereco">Endereço:</label>
						<input
							required
							type="text"
							name="cli_endereco"
							id="cli_endereco"
						/>
					</div>

					<div class="row">
						<div class="col" id="NúmeroCasa">
							<label for="cli_numero">N° da casa:</label>
							<input
								required
								type="text"
								name="cli_numero"
								id="cli_numero"
							/>
						</div>
						<div class="col">
							<label for="cli_complemento">Complemento (opc.):</label>
							<input
								required
								type="text"
								name="cli_complemento"
								id="cli_complemento"
							/>
						</div>
					</div>

					<div class="btn_row">
						<button
							class="submit_btn"
							type="button"
							id="submit"
							onclick="pastForm()"
						>
							Página anterior
						</button>

						<button class="submit_btn" type="submit" id="submit" 
						name="enviar"
						value = "enviar">
							Terminar cadastro
						</button>
					</div>
				</div>
			</form>
		</div>

		<script>
			document.getElementById("form-1").style.display = "none"
			function nextForm() {
				document.getElementById("form-0").style.display = "none"
				document.getElementById("form-1").style.display = "flex"
			}

			function pastForm() {
				document.getElementById("form-0").style.display = "flex"
				document.getElementById("form-1").style.display = "none"
			}
		</script>
	</body>
</html>
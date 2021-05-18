<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
		<link rel="stylesheet" href="{$GET_SITE_HOME}/lib/paginas/cupons/cupons&kits.css" />
		<link
			href="https://fonts.googleapis.com/icon?family=Material+Icons"
			rel="stylesheet"
		/>
	</head>
	<body>
		<div id="cuponsAndKits">
			<div id="cover">
				<div id="header">
					<h1 id="title">Criação de código promocional</h1>
					<div>
						<button onclick="toggleView()">Toggle</button>
					</div>
				</div>
				<div id="toggle-area">
					<div id="cuponsArea">
						<div class="row">
							<div id="inputArea">
								<label for="name">Nome do cupom</label>
								<input
									type="text"
									id="cup_name"
									class="bgWhite"
								/>
								<label for="type">Valor:</label>
								<div class="row bgWhite">
									<input type="number" id="cup_val" />

									<select type="text" id="cup_type">
										<option>%</option>
										<option>R$</option>
									</select>
								</div>
							</div>
							<div id="checkArea">
								<div class="row">
									<input
										type="radio"
										name="cup_type"
										id="all"
										checked
										onclick="promoCode.addBttn.disable()"
									/>
									<span>Todos os produtos</span>
								</div>
								<div class="row">
									<input
										type="radio"
										name="cup_type"
										id="selected"
										checked
										onclick="promoCode.addBttn.enable()"
									/>
									<span>Categoria</span>
								</div>
							</div>
						</div>
						<div id="prod_selector">
							<button
								type="text"
								id="cup_productAdd"
								class="material-icons"
								href="#"
								onclick="promoCode.prodSelect.show()"
							>
								add
							</button>
							<div id="prod_show">
								<div id="prod_select" class="row">
									<!-- ! for db -->
									<input
										type="text"
										id="prodId_input"
										placeholder="ID do produto"
									/>
									<button onclick="promoCode.prodAdd()">
										OK!
									</button>
									<button
										onclick="promoCode.prodSelect.hide()"
									>
										Cancelar
									</button>
								</div>
								<div
									id="products_added"
									class="products_show"
								></div>
							</div>
						</div>
						<button type="submit">Confirmar Cupom!</button>
					</div>
					<div id="kitsArea" class="col">
						<div class="row">
							<div id="kit_data">
								<div>
									<label for="kitName">Nome do kit:</label>
									<input type="text" id="kitName" />
								</div>
								<div>
									<label for="kitName">Valor</label>
									<input type="text" id="kitPrice" />
								</div>
							</div>
							<div class="col" id="idSubmit">
								<input
									type="text"
									id="kit_selectedId"
									placeholder="ID do produto"
								/>
								<button
									type="text"
									id="kit_productAdd"
									class="material-icons"
									href="#"
									onclick="kits.addProduct()"
								>
									add
								</button>
							</div>
						</div>
						<div id="kit-selectedProds" class="products_show"></div>
						<button type="submit">Confirmar criação de kit</button>
					</div>
				</div>
			</div>
		</div>
		<script>
			const toggleView = () => {
				if (
					document.getElementById("cuponsArea").style.display ===
					"none"
				) {
					document.getElementById("title").innerHTML =
						"Criação de códigos de desconto"
					document.getElementById("cuponsArea").style.display = "flex"
					document.getElementById("kitsArea").style.display = "none"
				} else {
					document.getElementById("title").innerHTML =
						"Criação de kits"
					document.getElementById("cuponsArea").style.display = "none"
					document.getElementById("kitsArea").style.display = "flex"
				}
			}

		</script>
	</body>
</html>

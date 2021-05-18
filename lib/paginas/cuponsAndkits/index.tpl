<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>

		<link rel="stylesheet" href=".\cupons&kits.css" />
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
							<div id="inputArea" class="col-6">
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
								<div id="prod_select" class="row" hidden="true">
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
						<button type="submit" class="submitBttn">
							Confirmar Cupom!
						</button>
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
						<button type="submit" class="submitBttn">
							Confirmar criação de kit
						</button>
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

			const getProduct = (id) => {
				return {
					name: "Loló",
					price: "199,00",
					imgRef: "https://i.pinimg.com/564x/ed/ce/10/edce1084dfe053817cc6636483b95a17.jpg",
				}
			}

			function showData(div, arr, page) {
				function productComponent(name, price, imgRef, count) {
					return `<div id="prod-${count}" class="row product"><img src=${imgRef} /><span>${name}, R$${price}</span> <a class="material-icons" onclick="${page}.prodRemove(${count})" href="#">remove</a></div>`
				}
				document.getElementById(div).innerHTML = ""

				arr.forEach((el) => {
					const data = getProduct(el.id)
					document.getElementById(div).innerHTML += productComponent(
						data.name,
						data.price,
						data.imgRef,
						el.count,
					)
				})
			}

			const kits = {
				selectedProducts: [],
				count: 0,

				prodRemove: (i) => {
					document
						.getElementById("kitsArea")
						.querySelector(`#prod-${i}`)
						.remove()
					kits.selectedProducts.pop(i)
				},

				addProduct: () => {
					const data = document
						.getElementById("kit_data")
						.querySelectorAll("input")

					kits.selectedProducts.push({
						id: data[0].value,
						count: kits.count++,
					})
					showData("kit-selectedProds", kits.selectedProducts, "kits")
				},
			}

			const promoCode = {
				prodSelect: {
					show: () => {
						document
							.getElementById("prod_select")
							.setAttribute("hidden", "false")
					},

					hide: () => {
						document
							.getElementById("prod_select")
							.setAttribute("hidden", "true")
					},
				},
				addBttn: {
					disable: () => {
						document.getElementById(
							"cup_productAdd",
						).disabled = true
						document.getElementById("prod_show").style.display =
							"none"
					},
					enable: () => {
						document.getElementById(
							"cup_productAdd",
						).disabled = false
						document.getElementById("prod_show").style.display =
							"flex"
					},
				},
				productComponentArr: [],
				count: 0,

				prodRemove: (i) => {
					console.log(promoCode.productComponentArr)
					document
						.getElementById("cuponsArea")
						.querySelector(`#prod-${i}`)
						.remove()
					promoCode.productComponentArr.pop(i)
				},
				prodAdd: () => {
					promoCode.prodSelect.hide()
					promoCode.count++
					console.log(promoCode.productComponentArr)
					function getData() {
						const prodData = document
							.getElementById("prod_select")
							.querySelectorAll("input")

						return {
							id: prodData[0].value,
							count: promoCode.count - 1,
						}
					}

					promoCode.productComponentArr.push(getData())
					showData(
						"products_added",
						promoCode.productComponentArr,
						"promoCode",
					)
				},
			}
		</script>
	</body>
</html>

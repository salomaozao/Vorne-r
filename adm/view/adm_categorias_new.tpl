<div class="justify-content-start text-center">
	<h2>Gerenciar Categorias</h2>
	<form
		name="categoriainsere"
		method="post"
		action=""
		class="w-25 container text-left my-4"
	>
		<span>Criar categoria</span>
		<div class="row" style="flex-wrap: nowrap">
			<input
				type="text"
				name="cat_nome"
				class="form-control w-100"
				required
			/>
			<button
				class="btn btn-success ml-2"
				name="cat_nova"
				value="cat_nova"
			>
				Criar!
			</button>
		</div>
	</form>

	<div>
		<h3>Suas Categorias</h3>
		<div class="bg-dark border rounded container">
			<!-- Prod-show -->
			<div class="row border-bottom py-2">
				<div class="col-12 text-left">
					<h2 class="text-white">Drop Verão 2020</h2>
					<a class="text-muted" href="#">Ver Produtos</a>
				</div>
			</div>
			<!-- Prod-show -->
			<div class="row border-bottom py-2">
				<div class="col-12 text-left">
					<h2 class="text-white">Drop Inverno 2021</h2>
				</div>
				<div class="col-12 row">
					<div class="col-4 p-2">
						<div
							class="card pt-2 px-2 rounded-lg"
							style="
								background-color: rgba(
									255,
									255,
									255,
									0.15
								) !important;
							"
						>
							<img
								class="card-img-top rounded-lg"
								src="https://w3uniformes.com.br/wp-content/uploads/2019/07/tecido-para-camisa-social.jpg"
								alt="Imagem"
							/>
							<div class="card-body text-left row">
								<div class="col">
									<h5 class="card-title">
										assistente da tim
									</h5>
									<p>R$19,99</p>
								</div>
								<div
									class="
										col
										d-flex
										align-items-center
										justify-content-center
									"
								>
									<button href="#" class="btn btn-danger">
										Remover
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Prod-show -->
		</div>
	</div>
</div>

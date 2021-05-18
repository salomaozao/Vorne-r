<html lang="en">
	<script
		src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		crossorigin="anonymous"
	></script>
	<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
		crossorigin="anonymous"
	></script>
	<script src="{$GET_SITE_HOME}/lib/paginas/novosprodutos_admin/dist/js/scripts.js"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
		crossorigin="anonymous"
	></script>
	<script src="{$GET_SITE_HOME}/lib/paginas/novosprodutos_admin/dist/assets/demo/chart-area-demo.js"></script>
	<script src="{$GET_SITE_HOME}/lib/paginas/novosprodutos_admin/dist/assets/demo/chart-bar-demo.js"></script>
	<script
		src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"
		crossorigin="anonymous"
	></script>
	<script
		src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"
		crossorigin="anonymous"
	></script>
	<script src="{$GET_SITE_HOME}/lib/paginas/novosprodutos_admin/dist/assets/demo/datatables-demo.js"></script>

<script src="https://cdn.tiny.cloud/1/nfz7gysmb7ap3aaauqhpe8oimg4f8ijn7ytdb69yx31023xi/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script>
		tinymce.init({
			selector: "#pro_desc",
			plugins:
				"a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker",
			toolbar:
				"a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table",
			toolbar_mode: "floating",
			tinycomments_mode: "embedded",
			tinycomments_author: "Author name",
		})
	</script>

	<h4 class="text-center">Adicionar novo produto</h4>
	<hr />

	<!-- começa os campos para form produto    -->
	<section class="container" id="camposproduto">
		<!--  enctype="multipart/form-data"  -->
		<form
			name="frm_produto"
			method="post"
			action=""
			enctype="multipart/form-data"
			class="row"
		>
			<div class="col-md-6">
				<label>Produto</label>
				<input
					type="text"
					name="pro_nome"
					id="pro_nome"
					class="form-control"
					required
				/>
			</div>

			<div class="col-md-4">
				<label>Categoria</label>

				<select
					name="pro_categoria"
					id="pro_categoria"
					class="form-control"
					required
				>
					<option value="teste">Escolha</option>
					{foreach from=$CATEGORIAS item=C}
					<option value="{$C.cat_id}">{$C.cat_nome}</option>

					{/foreach}
				</select>
			</div>

			<div class="col-md-2">
				<label>Ativo</label>
				<select
					name="pro_ativo"
					id="pro_cativo"
					class="form-control"
					required
				>
					<option value="">Escolha</option>
					<option value="NAO">Não</option>
					<option value="SIM">Sim</option>
				</select>
			</div>

			<div class="col-md-3">
				<label>Cor</label>
				<input
					type="text"
					name="pro_modelo"
					id="pro_modelo"
					class="form-control"
				/>
			</div>

			<div class="col-md-2">
				<label>Referencia</label>
				<input
					type="text"
					name="pro_ref"
					id="pro_ref"
					class="form-control"
				/>
			</div>

			<div class="col-md-2">
				<label>Valor</label>
				<input
					type="text"
					name="pro_valor"
					id="pro_valor"
					class="form-control"
					required
				/>
			</div>

			<div class="col-md-2">
				<label>Estoque</label>
				<input
					type="text"
					name="pro_estoque"
					id="pro_estoque"
					class="form-control"
					required
				/>
			</div>

			<div class="col-md-2">
				<label>Tamanho</label>
				<input
					type="text"
					name="pro_tamanho"
					id="pro_tamanho"
					class="form-control"
					required
				/>
			</div>

			<div class="col-md-12">
				<div class="col-md-3"></div>

				<div class="col-md-6">
					<hr />
					<label>Imagem Principal</label>
					<input
						type="file"
						name="pro_img"
						class="form-control"
						id="pro_img"
						requiredvitinsuavv
					/>
				</div>

				<div class="col-md-3"></div>
			</div>

			<div class="col-md-12">
				<label>Descrição</label>

				<textarea
					name="pro_desc"
					id="pro_desc"
					rows="5"
					class="form-control"
					placeholder="Descrição..."
				></textarea>
			</div>

			<div class="col-md-12">
				<label>Slug</label>
				<input
					type="text"
					readonly
					name="pro_slug"
					id="pro_slug"
					class="form-control"
				/>
			</div>

			<!-- botão gravar -->

			<div class="col-md-4"></div>

			<div class="col-md-4">
				<br />
				<button
					class="btn btn-success btn-block btn-lg"
					name="btn_gravar"
				>
					Gravar
				</button>
			</div>

			<div class="col-md-4"></div>
		</form>
	</section>

	<br />
	<br />
	<br />
	<br />
</html>

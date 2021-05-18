<head>
	<style>
		:root {
			--bg: ;
		}
		#items h2 {
			text-align: center;
		}
		#items > * {
			padding: 0;
			margin: 0 auto;
		}
		.text-center {
			text-align: center;
		}
		#items table {
			width: 80%;
			padding: 1em 2em;
			margin-top: 2em;
			border: 1px solid rgb(203, 203, 203);
			background-color: rgba(203, 203, 203, 0.5);
			border-radius: 0.25em;
		}
		#items td {
			border-left: 1px solid rgb(180, 180, 180);
			text-align: center;
		}
		#items td:last-child {
			border-right: 1px solid rgb(180, 180, 180);
		}
		#items tr.title > td {
			font-weight: 800;
		}
		#items img {
			width: 4em;
			height: 4em;
		}
	</style>
</head>
<body>
	<div id="items">
		<h2>Dados do pedido</h2>
		<table>
			<tr>
				<!--bg-green?-->
				<td><b>Data:</b> {$ITENS.1.ped_data}</td>

				<td><b>Hora:</b> {$ITENS.1.ped_hora}</td>

				<td><b>Ref:</b> {$ITENS.1.ped_ref}</td>

				<td><b>Status:</b> {$ITENS.1.ped_pag_status}</td>
			</tr>
		</table>

		<table id="listaitens">
			<tr class="title">
				<td>Produto</td>
				<td>Item</td>
				<td>Valor Uni</td>
				<td>X</td>
				<td>Sub</td>
			</tr>

			<!-- {foreach from=$ITENS item=P} -->
			<tr>
				<td><img src="{$P.item_img}" alt="Produto" /></td>
				<td>{$P.item_nome}</td>
				<td>{$P.item_valor}</td>
				<td>{$P.item_qtd}</td>
				<td>{$P.item_sub}</td>
			</tr>
			<!-- {/foreach} -->
		</table>

		<table id="resumo">
			<tr>
				<td class="text-danger">
					<b>Frete:</b> {$ITENS.1.ped_frete_valor}
				</td>

				<td class="text-danger"><b>Total:</b> {$TOTAL}</td>

				<td class="text-danger">
					<b>Final:</b> {$ITENS.1.ped_frete_valor+$TOTAL}
				</td>
			</tr>
		</table>
	</div>
</body>
<?php
/* Smarty version 3.1.39, created on 2021-05-05 21:04:14
  from 'C:\xampp\htdocs\vorne\adm\view\adm_itens.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6093327e972066_62791355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd98c9c09a50de4ab82ef14f702941270fe0dcd1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vorne\\adm\\view\\adm_itens.tpl',
      1 => 1620259452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6093327e972066_62791355 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
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
				<td><b>Data:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_data'];?>
</td>

				<td><b>Hora:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_hora'];?>
</td>

				<td><b>Ref:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_ref'];?>
</td>

				<td><b>Status:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'];?>
</td>
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

			<!-- <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ITENS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?> -->
			<tr>
				<td><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['item_img'];?>
" alt="Produto" /></td>
				<td><?php echo $_smarty_tpl->tpl_vars['P']->value['item_nome'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['P']->value['item_valor'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['P']->value['item_qtd'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['P']->value['item_sub'];?>
</td>
			</tr>
			<!-- <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> -->
		</table>

		<table id="resumo">
			<tr>
				<td class="text-danger">
					<b>Frete:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor'];?>

				</td>

				<td class="text-danger"><b>Total:</b> <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>

				<td class="text-danger">
					<b>Final:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor']+$_smarty_tpl->tpl_vars['TOTAL']->value;?>

				</td>
			</tr>
		</table>
	</div>
</body><?php }
}

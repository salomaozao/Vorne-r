<?php
/* Smarty version 3.1.39, created on 2021-05-04 22:48:01
  from 'C:\xampp\htdocs\vorne\adm\view\adm_clientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6091f951499b81_14127925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84de060f994fab9676b9553ff62230f8b8f2f503' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vorne\\adm\\view\\adm_clientes.tpl',
      1 => 1620179279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6091f951499b81_14127925 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
	<style>
		#adm_clientes {
			display: flex;
			align-items: center;
			flex-direction: column;
		}
	</style>
</head>
<div id="adm_clientes">
    <p>
	<h2 class="text-center">Gerenciar Clientes</h2>
    <p>
    <p>
	<section class="row">
		<table class="table table-bordered">
			<tr class="bg-success">
				<td>Pedidos</td>
				<td>Nome</td>
				<td>Email</td>
				<td>Fone</td>
				<td>Data cad</td>
				<td>Cpf</td>
				<td>Cidade</td>
			</tr>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CLIENTES']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>

			<tr>
				<td>
					<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PEDIDOS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
 " class="btn btn-info"
						>Pedidos</a
					>
				</td>
				<td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['C']->value['cli_sobrenome'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_email'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_celular'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_data_cad'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_cpf'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_cidade'];?>
</td>
			</tr>

			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
	</section>
</div>
<?php }
}

<?php
/* Smarty version 3.1.39, created on 2021-04-21 21:35:30
  from 'C:\xampp\htdocs\vorne\adm\view\adm_pedidos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6080c4d217b465_13178172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e140cd8da1763c8dc13c9740342592c6d7414fd8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vorne\\adm\\view\\adm_pedidos.tpl',
      1 => 1618734222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6080c4d217b465_13178172 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center"> Gerenciar Pedidos </h4>
<hr>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Pedidos
    </div>
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered"  width="100%" cellspacing="0">
        <hr>

        <thead>
            <tr>
                <th>Nome</th>
                <th>Nº Pedido</th>                                                                               
                <th>Valor do pedido</th>
                <th>Status de pagamento</th>
                <th>Data</th>
                <th>Horário</th>
                <th></th> 
                <th></th>
            </tr>
        </thead>
                                       
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PEDIDOS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['P']->value['cli_nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['P']->value['cli_sobrenome'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_ref'];?>
</td>          
                <td>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['ped_valor'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_data'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_hora'];?>
</td>
                <td><form name="itens" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">
                        <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
                        <button class="btn btn-info"><i class="glyphicon glyphicon-menu-hamburger"></i> Detalhes</button>
                    </form> 
                </td>
                <td>
                    <form name="deletar" method="post" action="">
                        <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
                        <button class="btn btn-danger" name="ped_apagar" value="ped_apagar"><i class="glyphicon glyphicon-menu-remove"></i> </button>
                    </form>      
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    </div>
    </div>
    <section id="paginacao" class="row">
    <center>
    <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

    </center>
    </section>
</div>
       
        

        
 <?php }
}

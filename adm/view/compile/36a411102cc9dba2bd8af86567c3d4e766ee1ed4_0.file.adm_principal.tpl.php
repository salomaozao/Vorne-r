<?php
/* Smarty version 3.1.39, created on 2021-04-20 15:42:06
  from 'C:\xampp\htdocs\vorne\adm\view\adm_principal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607f207e8d52f1_04775550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36a411102cc9dba2bd8af86567c3d4e766ee1ed4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vorne\\adm\\view\\adm_principal.tpl',
      1 => 1618734222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607f207e8d52f1_04775550 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
                       <center> <h1 class="mt-4">Gerenciamento</h1></center>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Visualizações</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Visualizar</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Renda Mensal</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Visualizar</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Estoque</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Visualizar</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cadastros</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Visualizar</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        Vendas Mensais
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                         Visualizações mensais
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
    
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Pedidos
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered"  width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Nº Pedido</th>                                                                               <th>Valor do pedido</th>
                                                <th>Status de pagamento</th>
                                                <th>Data</th>
                                                <th>Horário</th>
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
                                                </form> </td>
                                                
                                            </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><?php }
}

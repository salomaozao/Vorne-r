<?php
/* Smarty version 3.1.39, created on 2021-04-21 21:55:52
  from 'C:\xampp\htdocs\vorne\adm\view\adm_produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6080c99881a485_20935947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c356eebdd06f9aebfd87cb159dc82480e32efac0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vorne\\adm\\view\\adm_produtos.tpl',
      1 => 1618734223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6080c99881a485_20935947 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="en">
 <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos_admin/dist/js/scripts.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos_admin/dist/assets/demo/chart-area-demo.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos_admin/dist/assets/demo/chart-bar-demo.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos_admin/dist/assets/demo/datatables-demo.js"><?php echo '</script'; ?>
>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    
<h4 class="text-center" style="color: darkblue">Gerenciar Produtos</h4>
<hr>
<br>  
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Produtos
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr class="">
                                <th>Imagem</th>
                                <th>Nome Produto</th>                                          
                                <th>Categoria</th>
                                <th>Preço</th>
                                <th>Estoque</th>
                                <th>Editar</th>
                                <th>Imagens Sec.</th>
                                
                            </tr>
                        </thead>
                                       
                        <tbody>
                             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?> 
                            <tr>
                                <td><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_p'];?>
" alt="" height= "80" width="80" ></td>                           
                                <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['P']->value['cat_nome'];?>
</td>
                                <td>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</td> 
                                <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_estoque'];?>
</td>
                                <td>
                                    <form name="proeditar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_EDITAR']->value;?>
">
                                    <input type="hidden" name="pro_id" id="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                    <input type="hidden" name="pro_nome" id="pro_nome" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
">
                                    <button class="btn btn-info"> <i class="glyphicon glyphicon-pencil">
                                    </i></button>
                                    </form>  
                                </td> 
                                <td>
                                    <form name="proimg" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_IMG']->value;?>
">
                                    <input type="hidden" name="pro_id" id="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                    <input type="hidden" name="pro_nome" id="pro_nome" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
">
                                    <button class="btn btn-info"> <i class="glyphicon glyphicon-picture">
                                    </i></button>
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
        <section id="pagincao" class="row">
            <center>
                <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

            </center>
        </section>
    </div>

        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/index_admin/dist/js/scripts.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/index_admin/dist/assets/demo/chart-area-demo.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/index_admin/dist/assets/demo/chart-bar-demo.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/index_admin/dist/assets/demo/datatables-demo.js"><?php echo '</script'; ?>
>
<?php }
}

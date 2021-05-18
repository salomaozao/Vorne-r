<?php
/* Smarty version 3.1.39, created on 2021-05-04 23:56:54
  from 'C:\xampp\htdocs\vorne\adm\view\adm_produtos_img.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60920976560cb5_96018129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee8b9c1644d366689958232d4f8a11f0c17395b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vorne\\adm\\view\\adm_produtos_img.tpl',
      1 => 1618734222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60920976560cb5_96018129 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center"> Imagens secundárias do produto</h4>
<hr>

<!--- formulario de envio da foto -->
<section class="row" id="novaimg">
    
    <form name="nova" method="post" action=""  enctype="multipart/form-data">

        <div class="col-md-4"></div>

        <div class="col-md-4">

            <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value;?>
">

            <input type="file" name="pro_img"  class="form-control"  required>
            <br>

            

        </div>
        <div class="col-md-4">
            <button class="btn btn-success "> Enviar </button> 


        </div>
            
            
    </form> 
    
</section>

<hr>

<!-- listando as imagens que existem no produto-->
<section class="row" id="listarimg">
    
    <!-- formulario de apagar a foto ou varias -->
    <form name="deletar" method="post" action="">
      
    
        <ul style="list-style: none">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGES']->value, 'I');
$_smarty_tpl->tpl_vars['I']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
$_smarty_tpl->tpl_vars['I']->do_else = false;
?>

                      <li class="col-md-3 ">
                          <img src="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_nome'];?>
" alt="" width="100" height="100" class="thumbnail">

                          <label>Apagar?</label> 
                          <input type="checkbox" class=" input-lg" name="fotos_apagar[]" value="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_arquivo'];?>
">   
                      
                     
                      </li>

                      
                      
                      
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  
                      <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_pro_id'];?>
">
              </ul>
    
              
                <!--- botao de apagar fotos -->
                <br>
              <section class="col-md-12 text-center" id="apagar">
                <hr>
                
                  <button class="btn btn-danger"> Apagar Marcadas </button>
                  
                  
              </section>
              <br>
              <br>
              <br>
              
              
    </form>
</section>
              <section>
                  
                  <br>
                  <br>
                  <br>
                  <br>
              </section>   
<?php }
}

<?php
/* Smarty version 3.1.39, created on 2021-04-21 21:07:06
  from 'C:\xampp\htdocs\vorne\view\email_compra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6080be2a38f5d5_32269547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65b9f6eb5c831b8d8df7654e9aa8913f469dd8d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vorne\\view\\email_compra.tpl',
      1 => 1618734226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6080be2a38f5d5_32269547 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<style>
.tabela {
    border-collapse: collapse;
    width: 100%;
}

.tabela th, td {
    text-align: left;
    padding: 8px;
}

.tabela tr:nth-child(odd){
  background-color: #b2b2b2;
}

.sessao{
  
  padding:20px;
}


.total{
  text-align:right;
}




.textoinicio{
  text-align:center;
}

.minhaconta{
  text-align:center;
}


</style>

<p class="textoinicio"> Olá <?php echo $_smarty_tpl->tpl_vars['NOME_CLIENTE']->value;?>
 , obrigado pela sua compra em <?php echo $_smarty_tpl->tpl_vars['SITE_NOME']->value;?>
 <br>
<a href="<?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
 </a>
</p>


  <section class="row">
      <p class="minhaconta">
          Para acessar a sua conta e ter um histórico de seus pedidos acesse nosso site, e sua conta<br>
          Minha conta: <a  href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
" > <?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
 </a>
      
      </p>                 
                   
  </section>


<section class="row ">
   
    <center>
      
     
   <br>
        
    <table class="tabela" style="width: 95%;">
     
        <tr style="
            border: 1px solid #b2dba1; 
            text-align:center;
            background-color: #072339;
            color:#FFF;
            font-size:18px;" >
            <td colspan="5">Itens do seu pedido </td>
            
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
          
          <tr style="border: 1px solid #b2dba1">      
            <td> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt=" <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 "> </td> 
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
  </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
 </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
   </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subtotal'];?>
 </td>
        </tr>
        
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </table>
  
    </center>
        
           
</section><!-- fim da listagem itens -->


   <!-- botoes de baixo e valor total -->
        <div class="sessao">                            
              <p class="total">
               <h4>Total:</h4><h5>R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</h5>
               </p>
        </div>
               <br>
             <?php }
}

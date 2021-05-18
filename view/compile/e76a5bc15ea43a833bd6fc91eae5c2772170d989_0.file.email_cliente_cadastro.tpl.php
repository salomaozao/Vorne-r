<?php
/* Smarty version 3.1.39, created on 2021-04-05 16:55:31
  from 'C:\xampp\htdocs\vorne\view\email_cliente_cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606b6b33e4e9f0_36627415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e76a5bc15ea43a833bd6fc91eae5c2772170d989' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vorne\\view\\email_cliente_cadastro.tpl',
      1 => 1606774276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606b6b33e4e9f0_36627415 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<h3>Olá <?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
 , obrigado por se cadastrar em <?php echo $_smarty_tpl->tpl_vars['SITE']->value;?>
</h3>

<h3> Cadastro efetuado com sucesso,  para fazer  o login use seu email cadastrado ( <?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
 )
<br>
com a sua senha, sua senha neste momento é ( <?php echo $_smarty_tpl->tpl_vars['SENHA']->value;?>
 )

</h3>
<h3>
    Para acessar o site e sua conta basta usar este endereço e efetuar o login<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
</a>  
</h3><?php }
}

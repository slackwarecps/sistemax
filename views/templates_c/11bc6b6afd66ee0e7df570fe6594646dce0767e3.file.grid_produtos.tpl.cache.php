<?php /* Smarty version Smarty-3.1.8, created on 2013-07-06 11:42:47
         compiled from "/home/fabioalvaro/www/sistemax//views/templates/produtos/grid_produtos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61302467951d82ce76a2bb4-83248492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11bc6b6afd66ee0e7df570fe6594646dce0767e3' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax//views/templates/produtos/grid_produtos.tpl',
      1 => 1373055707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61302467951d82ce76a2bb4-83248492',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'produtos_lista' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51d82ce76bc958_05632120',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d82ce76bc958_05632120')) {function content_51d82ce76bc958_05632120($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['produtos_lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value){
$_smarty_tpl->tpl_vars["data"]->_loop = true;
?>
  <tr id="line_<?php echo $_smarty_tpl->tpl_vars['data']->value['PROCOD'];?>
">
    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['PROCOD'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['PRODES'];?>
</td>    
    <td>
      <span class="link_falso" onclick="link_edita_produtos(<?php echo $_smarty_tpl->tpl_vars['data']->value['PROCOD'];?>
)">
        <img src="/files/images/cad_edit.png" title="Alterar" alt="Alterar" height="40px">
      </span> 
      
      
      <span class="link_falso" onclick="link_exclui_produtos(<?php echo $_smarty_tpl->tpl_vars['data']->value['PROCOD'];?>
)">
        <img src="/files/images/cad_exclui.png" title="Alterar" alt="Alterar" height="40px">
      </span> 

    </td>
  </tr>   
  <?php }
if (!$_smarty_tpl->tpl_vars["data"]->_loop) {
?>    
  <tr>
    <td></td>
    <td>Faça uma busca</td>
    <td></td>
  </tr>
<?php } ?>  

<?php }} ?>
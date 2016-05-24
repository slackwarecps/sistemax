<?php /* Smarty version Smarty-3.1.8, created on 2013-08-29 13:08:39
         compiled from "/home/fabioalvaro/www/sistemax//views/templates/orcamento/grid_orcamento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1237051065521f72072e6357-17221622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '739fa1420c80ed284f2a920b7692ab0090ec5c24' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax//views/templates/orcamento/grid_orcamento.tpl',
      1 => 1371663129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1237051065521f72072e6357-17221622',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orcamento_lista' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_521f72072fef41_31709737',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521f72072fef41_31709737')) {function content_521f72072fef41_31709737($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orcamento_lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value){
$_smarty_tpl->tpl_vars["data"]->_loop = true;
?>
  <tr id="line_<?php echo $_smarty_tpl->tpl_vars['data']->value['ID_ORC'];?>
">
    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['ID_ORC'];?>
</td>
    <td> Configure o nome que irá aparecer aqui</td>    
    <td>
      <span class="link_falso" onclick="link_edita_orcamento(<?php echo $_smarty_tpl->tpl_vars['data']->value['ID_ORC'];?>
)">
        <img src="/files/images/cad_edit.png" title="Alterar" alt="Alterar" height="40px">
      </span> 
      
      
      <span class="link_falso" onclick="link_exclui_orcamento(<?php echo $_smarty_tpl->tpl_vars['data']->value['ID_ORC'];?>
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
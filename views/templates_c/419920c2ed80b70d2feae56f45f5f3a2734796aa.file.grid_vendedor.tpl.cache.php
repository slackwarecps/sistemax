<?php /* Smarty version Smarty-3.1.8, created on 2013-07-10 07:48:00
         compiled from "/home/fabioalvaro/www/sistemax//views/templates/vendedor/grid_vendedor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102854807351dd3be0d58b43-46386665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '419920c2ed80b70d2feae56f45f5f3a2734796aa' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax//views/templates/vendedor/grid_vendedor.tpl',
      1 => 1372095690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102854807351dd3be0d58b43-46386665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vendedor_lista' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51dd3be0d727c2_43877385',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dd3be0d727c2_43877385')) {function content_51dd3be0d727c2_43877385($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vendedor_lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value){
$_smarty_tpl->tpl_vars["data"]->_loop = true;
?>
  <tr id="line_<?php echo $_smarty_tpl->tpl_vars['data']->value['VENCOD'];?>
">
    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['VENCOD'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['VENNOM'];?>
</td>    
    <td>
      <span class="link_falso" onclick="link_edita_vendedor(<?php echo $_smarty_tpl->tpl_vars['data']->value['VENCOD'];?>
)">
        <img src="/files/images/cad_edit.png" title="Alterar" alt="Alterar" height="40px">
      </span> 
      
      
      <span class="link_falso" onclick="link_exclui_vendedor(<?php echo $_smarty_tpl->tpl_vars['data']->value['VENCOD'];?>
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
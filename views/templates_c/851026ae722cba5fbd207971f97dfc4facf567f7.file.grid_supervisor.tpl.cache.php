<?php /* Smarty version Smarty-3.1.8, created on 2013-07-04 11:15:23
         compiled from "/home/fabioalvaro/www/sistemax//views/templates/supervisor/grid_supervisor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27537316951d5837b33ca44-77901614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '851026ae722cba5fbd207971f97dfc4facf567f7' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax//views/templates/supervisor/grid_supervisor.tpl',
      1 => 1372095867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27537316951d5837b33ca44-77901614',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'supervisor_lista' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51d5837b36e967_38913372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d5837b36e967_38913372')) {function content_51d5837b36e967_38913372($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['supervisor_lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value){
$_smarty_tpl->tpl_vars["data"]->_loop = true;
?>
  <tr id="line_<?php echo $_smarty_tpl->tpl_vars['data']->value['SUPCOD'];?>
">
    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['SUPCOD'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['SUPNOM'];?>
</td>    
    <td>
      <span class="link_falso" onclick="link_edita_supervisor(<?php echo $_smarty_tpl->tpl_vars['data']->value['SUPCOD'];?>
)">
        <img src="/files/images/cad_edit.png" title="Alterar" alt="Alterar" height="40px">
      </span> 
      
      
      <span class="link_falso" onclick="link_exclui_supervisor(<?php echo $_smarty_tpl->tpl_vars['data']->value['SUPCOD'];?>
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
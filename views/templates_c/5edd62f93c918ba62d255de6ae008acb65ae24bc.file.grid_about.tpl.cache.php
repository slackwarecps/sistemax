<?php /* Smarty version Smarty-3.1.8, created on 2013-11-28 12:20:06
         compiled from "/home/fabioalvaro/www/sistemax/views/templates/about/grid_about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9592226415297511662a804-95944070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5edd62f93c918ba62d255de6ae008acb65ae24bc' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax/views/templates/about/grid_about.tpl',
      1 => 1385648399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9592226415297511662a804-95944070',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'about_lista' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_529751166461f9_64245107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529751166461f9_64245107')) {function content_529751166461f9_64245107($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['about_lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value){
$_smarty_tpl->tpl_vars["data"]->_loop = true;
?>
  <tr id="line_<?php echo $_smarty_tpl->tpl_vars['data']->value['id_usuario'];?>
">
    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['id_usuario'];?>
</td>
    <td> Configure o nome que irá aparecer aqui</td>    
    <td>
      <span class="link_falso" onclick="link_edita_about(<?php echo $_smarty_tpl->tpl_vars['data']->value['id_usuario'];?>
)">
        <img src="/files/images/cad_edit.png" title="Alterar" alt="Alterar" height="40px">
      </span> 
      
      
      <span class="link_falso" onclick="link_exclui_about(<?php echo $_smarty_tpl->tpl_vars['data']->value['id_usuario'];?>
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
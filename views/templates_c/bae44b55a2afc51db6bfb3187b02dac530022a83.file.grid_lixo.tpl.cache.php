<?php /* Smarty version Smarty-3.1.8, created on 2013-11-28 14:46:04
         compiled from "/home/fabioalvaro/www/sistemax/views/templates/lixo/grid_lixo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14141683415297734cd2b856-35840764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bae44b55a2afc51db6bfb3187b02dac530022a83' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax/views/templates/lixo/grid_lixo.tpl',
      1 => 1385657111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14141683415297734cd2b856-35840764',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lixo_lista' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5297734cd44ec0_67545998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5297734cd44ec0_67545998')) {function content_5297734cd44ec0_67545998($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lixo_lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value){
$_smarty_tpl->tpl_vars["data"]->_loop = true;
?>
  <tr id="line_<?php echo $_smarty_tpl->tpl_vars['data']->value['id_usuario'];?>
">
    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['id_usuario'];?>
</td>
    <td> Configure o nome que irá aparecer aqui</td>    
    <td>
      <a href="" class="btn btn-default glyphicon glyphicon-pencil" onclick="link_edita_lixo(<?php echo $_smarty_tpl->tpl_vars['data']->value['id_usuario'];?>
)">Editar</a>            
      <a href="" class="btn btn-default glyphicon glyphicon-trash" onclick="link_exclui_lixo(<?php echo $_smarty_tpl->tpl_vars['data']->value['id_usuario'];?>
)">Excluir</a>
    </td>
  </tr>   
  <?php }
if (!$_smarty_tpl->tpl_vars["data"]->_loop) {
?>    
  <tr>
    <td></td>
     <td>Não foram encontrados Resultados</td>
    <td></td>
  </tr>
<?php } ?>  


<?php }} ?>
<?php /* Smarty version Smarty-3.1.8, created on 2013-08-29 09:33:35
         compiled from "/home/fabioalvaro/www/sistemax//views/templates/departamento/grid_departamento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:815437713521f3f9fce4c85-65101719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e79fcd3df0ef7f55ea166bd706a5ec8884b966d1' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax//views/templates/departamento/grid_departamento.tpl',
      1 => 1377115922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '815437713521f3f9fce4c85-65101719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'departamento_lista' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_521f3f9fcffa40_98815344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521f3f9fcffa40_98815344')) {function content_521f3f9fcffa40_98815344($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['departamento_lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value){
$_smarty_tpl->tpl_vars["data"]->_loop = true;
?>
  <tr id="line_<?php echo $_smarty_tpl->tpl_vars['data']->value['DEPCOD'];?>
">
    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['DEPCOD'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['data']->value['DEPNOM'];?>
</td>    
    <td>
<a href="/departamento/novo_departamento/DEPCOD/<?php echo $_smarty_tpl->tpl_vars['data']->value['DEPCOD'];?>
" class="btn btn-primary">Alterar</a>
      
      
<a href="/departamento/deldepartamento/DEPCOD/<?php echo $_smarty_tpl->tpl_vars['data']->value['DEPCOD'];?>
" class="btn btn-warning">Excluir</a>           

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
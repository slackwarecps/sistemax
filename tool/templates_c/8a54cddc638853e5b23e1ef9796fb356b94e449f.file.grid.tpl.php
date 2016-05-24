<?php /* Smarty version Smarty-3.1.13, created on 2013-11-28 15:07:47
         compiled from "modelos/grid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1381813932529778632ced40-65672523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a54cddc638853e5b23e1ef9796fb356b94e449f' => 
    array (
      0 => 'modelos/grid.tpl',
      1 => 1385656237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1381813932529778632ced40-65672523',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'entidade' => 0,
    'nome_campo_chave' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_529778632ff8f9_70330469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529778632ff8f9_70330469')) {function content_529778632ff8f9_70330469($_smarty_tpl) {?>{foreach from=$<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
_lista item="data"}
  <tr id="line_{$data.<?php echo $_smarty_tpl->tpl_vars['nome_campo_chave']->value;?>
}">
    <td>{$data.<?php echo $_smarty_tpl->tpl_vars['nome_campo_chave']->value;?>
 }</td>
    <td> Configure o nome que irá aparecer aqui</td>    
    <td>
      <a href="" class="btn btn-default glyphicon glyphicon-pencil" onclick="link_edita_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
({$data.<?php echo $_smarty_tpl->tpl_vars['nome_campo_chave']->value;?>
})">Editar</a>            
      <a href="" class="btn btn-default glyphicon glyphicon-trash" onclick="link_exclui_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
({$data.<?php echo $_smarty_tpl->tpl_vars['nome_campo_chave']->value;?>
})">Excluir</a>
    </td>
  </tr>   
  {foreachelse}    
  <tr>
    <td></td>
     <td>Não foram encontrados Resultados</td>
    <td></td>
  </tr>
{/foreach}  


<?php }} ?>
<?php /* Smarty version Smarty-3.1.13, created on 2013-11-28 13:21:56
         compiled from "modelos\grid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7405529743748f3e49-47299482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f9b71a2b5c1dba69ac4464ae588d97d18c2f056' => 
    array (
      0 => 'modelos\\grid.tpl',
      1 => 1371877680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7405529743748f3e49-47299482',
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
  'unifunc' => 'content_52974374959744_50300936',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52974374959744_50300936')) {function content_52974374959744_50300936($_smarty_tpl) {?>{foreach from=$<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
_lista item="data"}
  <tr id="line_{$data.<?php echo $_smarty_tpl->tpl_vars['nome_campo_chave']->value;?>
}">
    <td>{$data.<?php echo $_smarty_tpl->tpl_vars['nome_campo_chave']->value;?>
 }</td>
    <td> Configure o nome que irá aparecer aqui</td>    
    <td>
      <span class="link_falso" onclick="link_edita_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
({$data.<?php echo $_smarty_tpl->tpl_vars['nome_campo_chave']->value;?>
})">
        <img src="/files/images/cad_edit.png" title="Alterar" alt="Alterar" height="40px">
      </span> 
      
      
      <span class="link_falso" onclick="link_exclui_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
({$data.<?php echo $_smarty_tpl->tpl_vars['nome_campo_chave']->value;?>
})">
        <img src="/files/images/cad_exclui.png" title="Alterar" alt="Alterar" height="40px">
      </span> 

    </td>
  </tr>   
  {foreachelse}    
  <tr>
    <td></td>
    <td>Faça uma busca</td>
    <td></td>
  </tr>
{/foreach}  

<?php }} ?>
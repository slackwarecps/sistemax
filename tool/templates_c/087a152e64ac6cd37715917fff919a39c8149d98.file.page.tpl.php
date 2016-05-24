<?php /* Smarty version Smarty-3.1.13, created on 2013-11-28 13:21:56
         compiled from "modelos\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3863529743747e2746-22609794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '087a152e64ac6cd37715917fff919a39c8149d98' => 
    array (
      0 => 'modelos\\page.tpl',
      1 => 1371877684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3863529743747e2746-22609794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'classe_painel_pagina' => 0,
    'entidade' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52974374857a48_07064390',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52974374857a48_07064390')) {function content_52974374857a48_07064390($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  {$head}
  <body id="page5">
    <div id="main">


      <!--          inicio do Conteudo-->    

<div class="<?php echo $_smarty_tpl->tpl_vars['classe_painel_pagina']->value;?>
">
  <div class="titulos_paginas" id="<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
">
    <h2><?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
</h2>
  </div> 
  <div>    
    <div class="clear"></div>
    <fieldset>
      <legend>Buscar</legend>
      <input type="text" name="colaborador_busca_texto" id="<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
_busca_texto" value="fa"/>
      <input type="button" class="btn_padrao" value="buscar" 
             id="btn_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
_buscar" 
             name="btn_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
_buscar"
             onclick="busca_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
()"/>
    </fieldset>
  </div> 
  <div class="clear"></div>
  <div class="alinha_esquerda">    
    <button onclick="btn_novo_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
_click()" class="btn_padrao">Novo <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
</button>
  </div>
  <div id="grid_resultados" class="box_resultados_100">    
    <div class="clear"></div>
    <table id="lista_retorno" name="lista_retorno" class="basicTable">
      <thead>
        <tr>
          <th>cod</th>
          <th>nome</th>
          <th>Ação</th>
        </tr>
      </thead>      
      <tbody>
        {include file="<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
/grid_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
.tpl" <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
_lista=$<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
_lista}
      </tbody>      
    </table>
  </div>
  <div class="clear"></div>
</div>
      
  <!--          Fim do Conteudo-->

    </div>
  </body>
</html><?php }} ?>
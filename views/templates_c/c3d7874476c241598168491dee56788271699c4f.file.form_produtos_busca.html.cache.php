<?php /* Smarty version Smarty-3.1.8, created on 2013-07-06 11:42:47
         compiled from "/home/fabioalvaro/www/sistemax//views/templates/produtos/form_produtos_busca.html" */ ?>
<?php /*%%SmartyHeaderCode:173045010451d82ce76891c8-56563130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3d7874476c241598168491dee56788271699c4f' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax//views/templates/produtos/form_produtos_busca.html',
      1 => 1372964964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173045010451d82ce76891c8-56563130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'produtos_lista' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51d82ce769fab9_96673167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d82ce769fab9_96673167')) {function content_51d82ce769fab9_96673167($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <?php echo $_smarty_tpl->tpl_vars['head']->value;?>

  <body id="page5">
    <div id="main">


      <!--          inicio do Conteudo-->    

<div class="painel_basico">
  <div class="titulos_paginas" id="produtos">
    <h2>produtos</h2>
  </div> 
  <div>    
    <div class="clear"></div>
    <fieldset>
      <legend>Buscar</legend>
      <input type="text" name="colaborador_busca_texto" id="produtos_busca_texto" value="fa"/>
      <input type="button" class="btn_padrao" value="buscar" 
             id="btn_produtos_buscar" 
             name="btn_produtos_buscar"
             onclick="busca_produtos()"/>
    </fieldset>
  </div> 
  <div class="clear"></div>
  <div class="alinha_esquerda">    
    <button onclick="btn_novo_produtos_click()" class="btn_padrao">Novo produtos</button>
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
        <?php echo $_smarty_tpl->getSubTemplate ("produtos/grid_produtos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('produtos_lista'=>$_smarty_tpl->tpl_vars['produtos_lista']->value), 0);?>

      </tbody>      
    </table>
  </div>
  <div class="clear"></div>
</div>
      
  <!--          Fim do Conteudo-->

    </div>
  </body>
</html><?php }} ?>
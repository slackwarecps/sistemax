<?php /* Smarty version Smarty-3.1.8, created on 2013-07-04 11:15:26
         compiled from "/home/fabioalvaro/www/sistemax//views/templates/sistema/form_sistema_busca.html" */ ?>
<?php /*%%SmartyHeaderCode:33909635851d5837ec65016-75363755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd39eecb9fd5f72fe6000a7a62910aaf558881474' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax//views/templates/sistema/form_sistema_busca.html',
      1 => 1371847196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33909635851d5837ec65016-75363755',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'sistema_lista' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51d5837ec92d76_48650357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d5837ec92d76_48650357')) {function content_51d5837ec92d76_48650357($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <?php echo $_smarty_tpl->tpl_vars['head']->value;?>

  <body id="page5">
    <div id="main">


      <!--          inicio do Conteudo-->    

<div class="painel_basico">
  <div class="titulos_paginas" id="sistema">
    <h2>sistema</h2>
  </div> 
  <div>    
    <div class="clear"></div>
    <fieldset>
      <legend>Buscar</legend>
      <input type="text" name="colaborador_busca_texto" id="sistema_busca_texto" value="fa"/>
      <input type="button" class="btn_padrao" value="buscar" 
             id="btn_sistema_buscar" 
             name="btn_sistema_buscar"
             onclick="busca_sistema()"/>
    </fieldset>
  </div> 
  <div class="clear"></div>
  <div class="alinha_esquerda">    
    <button onclick="btn_novo_sistema_click()" class="btn_padrao">Novo sistema</button>
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
        <?php echo $_smarty_tpl->getSubTemplate ("sistema/grid_sistema.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('sistema_lista'=>$_smarty_tpl->tpl_vars['sistema_lista']->value), 0);?>

      </tbody>      
    </table>
  </div>
  <div class="clear"></div>
</div>
      
  <!--          Fim do Conteudo-->

    </div>
  </body>
</html><?php }} ?>
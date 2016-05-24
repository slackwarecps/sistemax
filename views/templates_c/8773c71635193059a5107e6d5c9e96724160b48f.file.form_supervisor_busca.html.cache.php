<?php /* Smarty version Smarty-3.1.8, created on 2013-07-04 11:15:23
         compiled from "/home/fabioalvaro/www/sistemax//views/templates/supervisor/form_supervisor_busca.html" */ ?>
<?php /*%%SmartyHeaderCode:41443335351d5837b30b4a1-89705640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8773c71635193059a5107e6d5c9e96724160b48f' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax//views/templates/supervisor/form_supervisor_busca.html',
      1 => 1372095750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41443335351d5837b30b4a1-89705640',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'supervisor_lista' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51d5837b337ad0_02074189',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d5837b337ad0_02074189')) {function content_51d5837b337ad0_02074189($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <?php echo $_smarty_tpl->tpl_vars['head']->value;?>

  <body id="page5">
    <div id="main">


      <!--          inicio do Conteudo-->    

<div class="painel_basico">
  <div class="titulos_paginas" id="supervisor">
    <h2>supervisor</h2>
  </div> 
  <div>    
    <div class="clear"></div>
    <fieldset>
      <legend>Buscar</legend>
      <input type="text" name="colaborador_busca_texto" id="supervisor_busca_texto" value="fa"/>
      <input type="button" class="btn_padrao" value="buscar" 
             id="btn_supervisor_buscar" 
             name="btn_supervisor_buscar"
             onclick="busca_supervisor()"/>
    </fieldset>
  </div> 
  <div class="clear"></div>
  <div class="alinha_esquerda">    
    <button onclick="btn_novo_supervisor_click()" class="btn_padrao">Novo supervisor</button>
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
        <?php echo $_smarty_tpl->getSubTemplate ("supervisor/grid_supervisor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('supervisor_lista'=>$_smarty_tpl->tpl_vars['supervisor_lista']->value), 0);?>

      </tbody>      
    </table>
  </div>
  <div class="clear"></div>
</div>
      
  <!--          Fim do Conteudo-->

    </div>
  </body>
</html><?php }} ?>
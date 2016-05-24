<?php /* Smarty version Smarty-3.1.8, created on 2013-07-10 07:48:00
         compiled from "/home/fabioalvaro/www/sistemax//views/templates/vendedor/form_vendedor_busca.html" */ ?>
<?php /*%%SmartyHeaderCode:13035059851dd3be0d4a848-69488244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b561a07d8b8c5bdecc1565f61578a02fe3219d0' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax//views/templates/vendedor/form_vendedor_busca.html',
      1 => 1372095488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13035059851dd3be0d4a848-69488244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'vendedor_lista' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51dd3be0d56513_05414069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dd3be0d56513_05414069')) {function content_51dd3be0d56513_05414069($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <?php echo $_smarty_tpl->tpl_vars['head']->value;?>

  <body id="page5">
    <div id="main">


      <!--          inicio do Conteudo-->    

<div class="painel_basico">
  <div class="titulos_paginas" id="vendedor">
    <h2>vendedor</h2>
  </div> 
  <div>    
    <div class="clear"></div>
    <fieldset>
      <legend>Buscar</legend>
      <input type="text" name="colaborador_busca_texto" id="vendedor_busca_texto" value="fa"/>
      <input type="button" class="btn_padrao" value="buscar" 
             id="btn_vendedor_buscar" 
             name="btn_vendedor_buscar"
             onclick="busca_vendedor()"/>
    </fieldset>
  </div> 
  <div class="clear"></div>
  <div class="alinha_esquerda">    
    <button onclick="btn_novo_vendedor_click()" class="btn_padrao">Novo vendedor</button>
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
        <?php echo $_smarty_tpl->getSubTemplate ("vendedor/grid_vendedor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('vendedor_lista'=>$_smarty_tpl->tpl_vars['vendedor_lista']->value), 0);?>

      </tbody>      
    </table>
  </div>
  <div class="clear"></div>
</div>
      
  <!--          Fim do Conteudo-->

    </div>
  </body>
</html><?php }} ?>
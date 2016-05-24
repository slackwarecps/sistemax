<?php /* Smarty version Smarty-3.1.8, created on 2013-11-28 12:18:40
         compiled from "/home/fabioalvaro/www/sistemax/views/templates/usuario/form_usuario_busca.html" */ ?>
<?php /*%%SmartyHeaderCode:838342796529750c0354be3-98456429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8498e94186d4cc3be6634486b7d9d5910dc10a1' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax/views/templates/usuario/form_usuario_busca.html',
      1 => 1371846917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '838342796529750c0354be3-98456429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'usuario_lista' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_529750c0362891_79920215',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529750c0362891_79920215')) {function content_529750c0362891_79920215($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <?php echo $_smarty_tpl->tpl_vars['head']->value;?>

  <body id="page5">
    <div id="main">


      <!--          inicio do Conteudo-->    

<div class="painel_basico">
  <div class="titulos_paginas" id="usuario">
    <h2>usuario</h2>
  </div> 
  <div>    
    <div class="clear"></div>
    <fieldset>
      <legend>Buscar</legend>
      <input type="text" name="colaborador_busca_texto" id="usuario_busca_texto" value="fa"/>
      <input type="button" class="btn_padrao" value="buscar" 
             id="btn_usuario_buscar" 
             name="btn_usuario_buscar"
             onclick="busca_usuario()"/>
    </fieldset>
  </div> 
  <div class="clear"></div>
  <div class="alinha_esquerda">    
    <button onclick="btn_novo_usuario_click()" class="btn_padrao">Novo usuario</button>
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
        <?php echo $_smarty_tpl->getSubTemplate ("usuario/grid_usuario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('usuario_lista'=>$_smarty_tpl->tpl_vars['usuario_lista']->value), 0);?>

      </tbody>      
    </table>
  </div>
  <div class="clear"></div>
</div>
      
  <!--          Fim do Conteudo-->

    </div>
  </body>
</html><?php }} ?>
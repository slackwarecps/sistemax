<?php /* Smarty version Smarty-3.1.8, created on 2013-08-29 13:24:05
         compiled from "/home/fabioalvaro/www/sistemax//views/templates/cliente/form_cliente_busca.html" */ ?>
<?php /*%%SmartyHeaderCode:1565704226521f75a5e07425-90439678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fab52ff4b747964fe819c10476fa2dce85478b2' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax//views/templates/cliente/form_cliente_busca.html',
      1 => 1377784745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1565704226521f75a5e07425-90439678',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'cliente_lista' => 0,
    'rodape' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_521f75a5e239b4_44892290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521f75a5e239b4_44892290')) {function content_521f75a5e239b4_44892290($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
    <?php echo $_smarty_tpl->tpl_vars['head']->value;?>

    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <?php echo $_smarty_tpl->getSubTemplate ("comuns/navegacao.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3">
                    <div class="well sidebar-nav">
                        <?php echo $_smarty_tpl->getSubTemplate ("comuns/menu_lateral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

                    </div><!--/.well -->
                </div><!--/span-->

                <div class="span9">
                    <!--conteudo-->

      <div class="painel_basico">
        <div class="titulos_paginas" id="cliente">
          <h2>Clientes</h2>
        </div> 
        <div>    
          <div class="clear"></div>
          <fieldset>
            <legend>Buscar</legend>
            <input type="text" name="colaborador_busca_texto" id="cliente_busca_texto" value="fa"/>
            <input type="button" class="btn_padrao" value="buscar" 
                   id="btn_cliente_buscar" 
                   name="btn_cliente_buscar"
                   onclick="busca_cliente()"/>
          </fieldset>
        </div> 
        <div class="clear"></div>
        <div class="alinha_esquerda">              
          <a href="cliente/novo_cliente" class="btn btn-default">Novo Cliente</a>
          
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
              <?php echo $_smarty_tpl->getSubTemplate ("cliente/grid_cliente.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('cliente_lista'=>$_smarty_tpl->tpl_vars['cliente_lista']->value), 0);?>

            </tbody>      
          </table>
        </div>
        <div class="clear"></div>
      </div>
   <!--fim do conteudo-->
                </div><!--/span-->
            </div><!--/row-->

            <hr>
            <?php echo $_smarty_tpl->tpl_vars['rodape']->value;?>

        </div><!--/.fluid-container-->
    </body>
</html><?php }} ?>
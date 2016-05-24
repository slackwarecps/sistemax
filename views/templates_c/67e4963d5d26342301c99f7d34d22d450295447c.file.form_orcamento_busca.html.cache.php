<?php /* Smarty version Smarty-3.1.8, created on 2013-08-29 13:08:39
         compiled from "/home/fabioalvaro/www/sistemax//views/templates/orcamento/form_orcamento_busca.html" */ ?>
<?php /*%%SmartyHeaderCode:38566280521f72072c2a77-72959117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67e4963d5d26342301c99f7d34d22d450295447c' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax//views/templates/orcamento/form_orcamento_busca.html',
      1 => 1377117677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38566280521f72072c2a77-72959117',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'orcamento_lista' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_521f72072da8a8_02244996',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521f72072da8a8_02244996')) {function content_521f72072da8a8_02244996($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>opa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Sistema de Gestão Online">
        <meta name="Fabio Alvaro Pereira" content="Sitema de Gerenciamento Online">

        <!-- Le styles -->
        <link href="/files/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="/files/css/bs_sistema.css" rel="stylesheet">   
        <link href="/files/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

        <?php echo $_smarty_tpl->tpl_vars['head']->value;?>

    </head>

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
                        <div class="titulos_paginas" id="orcamento">
                            <h2>orcamento</h2>
                        </div> 
                        <div>    
                            <div class="clear"></div>
                            <fieldset>
                                <legend>Buscar</legend>
                                <input type="text" name="colaborador_busca_texto" id="orcamento_busca_texto" value="fa"/>
                                <input type="button" class="btn_padrao" value="buscar" 
                                       id="btn_orcamento_buscar" 
                                       name="btn_orcamento_buscar"
                                       onclick="busca_orcamento()"/>
                            </fieldset>
                        </div> 
                        <div class="clear"></div>
                        <div class="alinha_esquerda">    
                            <button onclick="btn_novo_orcamento_click()" class="btn_padrao">Novo orcamento</button>
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
                                    <?php echo $_smarty_tpl->getSubTemplate ("orcamento/grid_orcamento.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('orcamento_lista'=>$_smarty_tpl->tpl_vars['orcamento_lista']->value), 0);?>

                                </tbody>      
                            </table>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!--fim do conteudo-->
                </div><!--/span-->
            </div><!--/row-->

            <hr>
            <footer>
                <?php echo $_smarty_tpl->getSubTemplate ("comuns/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            </footer>
        </div><!--/.fluid-container-->
    </body>
</html><?php }} ?>
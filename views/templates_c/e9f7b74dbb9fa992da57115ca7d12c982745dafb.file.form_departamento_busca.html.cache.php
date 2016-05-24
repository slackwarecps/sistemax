<?php /* Smarty version Smarty-3.1.8, created on 2013-08-29 09:33:35
         compiled from "/home/fabioalvaro/www/sistemax//views/templates/departamento/form_departamento_busca.html" */ ?>
<?php /*%%SmartyHeaderCode:1998324678521f3f9fcc19a6-76539968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9f7b74dbb9fa992da57115ca7d12c982745dafb' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax//views/templates/departamento/form_departamento_busca.html',
      1 => 1377116496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1998324678521f3f9fcc19a6-76539968',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'departamento_lista' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_521f3f9fcd9a72_50234541',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521f3f9fcd9a72_50234541')) {function content_521f3f9fcd9a72_50234541($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Departamento</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Sistema de Gestão Online">
        <meta name="Fabio Alvaro Pereira" content="Sitema de Gerenciamento Online">

        <!-- Le styles -->
        <link href="/files/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="/files/css/bs_sistema.css" rel="stylesheet">   
        <link href="/files/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="../assets/js/html5shiv.js"></script>
        <![endif]-->
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

                    <br>
                    <div class="row-fluid">
                        <div class="input-append">

                            <input class="input-xlarge search-query" type="text" placeholder="Digite a descricao...">
                            <button type="submit" class="btn">Procurar</button>
                        </div>
                    </div>


                    <div class="row-fluid">
                        <a href="departamento/novo_departamento" class="btn btn-success">Novo Departamento</a>
                    </div>
                    <div class="row-fluid">
<br>
                        <div id="grid_resultados" class="box_resultados_100">    
                            <div class="clear"></div>
                            <table id="lista_retorno" name="lista_retorno" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>cod</th>
                                        <th>nome</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>      
                                <tbody>
                                    <?php echo $_smarty_tpl->getSubTemplate ("departamento/grid_departamento.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('departamento_lista'=>$_smarty_tpl->tpl_vars['departamento_lista']->value), 0);?>

                                </tbody>      
                            </table>
                        </div>
                        <div class="clear"></div>
                    </div>


                </div><!--/span-->
            </div><!--/row-->

            <hr>
            <footer>
                <?php echo $_smarty_tpl->getSubTemplate ("comuns/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            </footer>
        </div><!--/.fluid-container-->
    </body>
</html>




<?php }} ?>
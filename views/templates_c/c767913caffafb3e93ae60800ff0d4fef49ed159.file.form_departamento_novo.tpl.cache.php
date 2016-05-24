<?php /* Smarty version Smarty-3.1.8, created on 2013-08-21 17:21:50
         compiled from "/home/fabioalvaro/www/sistemax//views/templates/departamento/form_departamento_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9034610595215215ecc3da1-52347651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c767913caffafb3e93ae60800ff0d4fef49ed159' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax//views/templates/departamento/form_departamento_novo.tpl',
      1 => 1377115975,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9034610595215215ecc3da1-52347651',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'registro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5215215ed01423_81141508',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5215215ed01423_81141508')) {function content_5215215ed01423_81141508($_smarty_tpl) {?><!DOCTYPE html>
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
<div id="painel_basico">
  <div class="titulos_paginas" id="parametros">
    <h2>      
      Novo departamento</h2>
  </div>

  <fieldset>
    <legend>Cadastro de departamento</legend>  

    <form id="my_cad_form_departamento" name="my_cad_form_departamento" 
          action="#" method="POST" enctype="multipart/form-data">      

              <label for="DEPCOD">DEPCOD</label><input type="text" id="DEPCOD" name="DEPCOD" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['DEPCOD'];?>
"><br>
              <label for="DEPNOM">DEPNOM</label><input type="text" id="DEPNOM" name="DEPNOM" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['DEPNOM'];?>
"><br>
            
    </form>            


    <br>     
    <a href="/departamento" class="btn btn-default">Voltar</a> 
    <input type="button" class="btn btn-success" value="Salvar departamento" onclick="btn_salvar_departamento()"/>
    
    </form>
  </fieldset>
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
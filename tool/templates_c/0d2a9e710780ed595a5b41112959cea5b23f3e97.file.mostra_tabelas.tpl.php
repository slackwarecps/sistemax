<?php /* Smarty version Smarty-3.1.13, created on 2013-08-09 17:25:19
         compiled from "template_tool/mostra_tabelas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1462702155205502f363c24-86713858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d2a9e710780ed595a5b41112959cea5b23f3e97' => 
    array (
      0 => 'template_tool/mostra_tabelas.tpl',
      1 => 1376075615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1462702155205502f363c24-86713858',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'erro' => 0,
    'lista_tabelas' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5205502f3eaa75_55070805',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5205502f3eaa75_55070805')) {function content_5205502f3eaa75_55070805($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/fabioalvaro/www/sistemax/tool/libs/plugins/function.html_options.php';
?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Tool Home</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->        
        <link href="css/custom.css" rel="stylesheet">

    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <?php echo $_smarty_tpl->getSubTemplate ('template_tool/navegacao.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('foo'=>'bar'), 0);?>

            </div>
        </div>
        <div class="container pagina"> 
            <?php if (($_smarty_tpl->tpl_vars['erro']->value!==null)){?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Erro!!</strong> <?php echo $_smarty_tpl->tpl_vars['erro']->value;?>

                </div>                                
            <?php }?>          
            
            
            
            
            <h1>Gerador de Modelo </h1>

            <div id="retorno">retorno</div>
            <div class="form-group">    
                <label  for="sel_tabelas">Tabelas</label>
                <select name="sel_tabelas" id="sel_tabelas">
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['lista_tabelas']->value),$_smarty_tpl);?>

                </select>
            </div>

            <div class="form-group">
                <label for="tacampos">Campos</label><br>
                <textarea id="tacampos" name="tacampos" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="taform">Formulario</label><br>
              <textarea id="taform" name="taform" class="form-control"></textarea>                
            </div>
                
               <div id="bobesponja" class="pull-right"></div> 
               
               
 <!-- Button trigger modal -->
  <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Launch demo modal</a>

  <!-- Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Modal title</h4>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->           
               
               
        </div><!-- /.container -->

        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mostra_tabelas.js"></script>
    </body>
</html><?php }} ?>
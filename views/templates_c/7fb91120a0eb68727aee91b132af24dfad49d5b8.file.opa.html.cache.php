<?php /* Smarty version Smarty-3.1.8, created on 2013-08-29 13:24:02
         compiled from "/home/fabioalvaro/www/sistemax//views/templates/opa/opa.html" */ ?>
<?php /*%%SmartyHeaderCode:261320037521f75a2f21e58-46916391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fb91120a0eb68727aee91b132af24dfad49d5b8' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax//views/templates/opa/opa.html',
      1 => 1377792497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261320037521f75a2f21e58-46916391',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_521f75a3030f11_04563338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521f75a3030f11_04563338')) {function content_521f75a3030f11_04563338($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
<?php echo $_smarty_tpl->tpl_vars['head']->value;?>

  </head>

  <body>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <?php echo $_smarty_tpl->getSubTemplate ("comuns/navegacao.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="well sidebar-nav">
           <?php echo $_smarty_tpl->getSubTemplate ("comuns/menu_lateral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

          </div><!--/.well -->
        </div><!--/span-->   
        
        
        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Hello, world!</h1>
            <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>asd</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            
          </div><!--/row-->
        </div><!--/span-->


      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="offcanvas.js"></script>
  </body>
</html>
<?php }} ?>
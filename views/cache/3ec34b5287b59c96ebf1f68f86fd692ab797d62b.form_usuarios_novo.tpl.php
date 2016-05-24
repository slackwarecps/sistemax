<?php /*%%SmartyHeaderCode:20567113895297dfd3494481-55189697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ec34b5287b59c96ebf1f68f86fd692ab797d62b' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax/views/templates/usuarios/form_usuarios_novo.tpl',
      1 => 1385667517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20567113895297dfd3494481-55189697',
  'variables' => 
  array (
    'head' => 0,
    'header' => 0,
    'registro' => 0,
    'lista_sistemas' => 0,
    'lista_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5297dfd34d8348_61197727',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5297dfd34d8348_61197727')) {function content_5297dfd34d8348_61197727($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="http://www.fabioalvaro.com.br/sistemax/files/css/bootstrap-3.0.0/dist../../assets/ico/favicon.png">
<!--  <link rel="shortcut icon" href="/sistemax/files/images/favicon.ico" />-->
  <title>Fabio Alvaro - Sistema X</title>

  <!-- Bootstrap core CSS -->
  <link href="http://www.fabioalvaro.com.br/sistemax/files/css/bootstrap-3.0.0/dist/css/bootstrap.css" rel="stylesheet">
 

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="http://www.fabioalvaro.com.br/sistemax/files/css/bootstrap-3.0.0/dist../../assets/js/html5shiv.js"></script>
    <script src="http://www.fabioalvaro.com.br/sistemax/files/css/bootstrap-3.0.0/dist../../assets/js/respond.min.js"></script>
  <![endif]-->

  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">
    <meta name="google-site-verification" content="UA-40887577-1" />
      <link href="http://www.fabioalvaro.com.br/sistemax/files/js/jquery_ui/css/smoothness/jquery-ui-1.10.3.custom.min.css" rel="stylesheet" type="text/css" />
    <link href="http://www.fabioalvaro.com.br/sistemax/files/css/style.css" rel="stylesheet" type="text/css" />
    <link href="http://www.fabioalvaro.com.br/sistemax/files/js/toastmessage/resources/css/jquery.toastmessage.css" rel="stylesheet" type="text/css" />
  
    <script type="text/javascript" src="http://www.fabioalvaro.com.br/sistemax/files/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="http://www.fabioalvaro.com.br/sistemax/files/js/jquery_ui/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script type="text/javascript" src="http://www.fabioalvaro.com.br/sistemax/files/js/jquery.mask.js"></script>
    <script type="text/javascript" src="http://www.fabioalvaro.com.br/sistemax/files/js/jquery.maskMoney.js"></script>
    <script type="text/javascript" src="http://www.fabioalvaro.com.br/sistemax/files/js/util.js"></script>
    <script type="text/javascript" src="http://www.fabioalvaro.com.br/sistemax/files/js/toastmessage/javascript/jquery.toastmessage.js"></script>
    <script type="text/javascript" src="http://www.fabioalvaro.com.br/sistemax/files/js/usuarios/usuarios.js"></script>
      
</head>
  <body>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/sistemax">Sistema X</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/sistemax/usuarios">Usuarios</a></li>
            <li><a href="/sistemax/about">About</a></li>
            <li><a href="/sistemax/tool">Tool</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container">      


      <!--          inicio do Conteudo-->   


      <fieldset>
        <legend>Cadastro de usuarios</legend>  

        <form id="my_cad_form_usuarios" name="my_cad_form_usuarios" 
              action="#" method="POST" enctype="multipart/form-data">      
          <input  type="hidden" id="id_usuario" name="id_usuario" value="1">
          <div class="form-group">  
            <label class="col-lg-2 control-label">Código </label>
            <label class="col-lg-10 control-label">1</label>            
          </div>        
          <div class="form-group">  
            <label for="nome" class="col-lg-2 control-label">nome</label>
            <div class="col-lg-10">
              <input class="form-control" type="text" id="nome" name="nome" value="Fabio Alvaro Pereira">
            </div>

          </div>        
          <div class="form-group">  
            <label for="email" class="col-lg-2 control-label">email</label>
            <div class="col-lg-10">
              <input class="form-control" type="text" id="email" name="email" value="fabio.alvaro@gmail.com">
            </div>

          </div>        
          <div class="form-group">  
            <label for="sistema" class="col-lg-2 control-label">sistema</label>
            <div class="col-lg-10">              
              <select name="sistema" class="form-control" id="sistema">
<option value="1" class="form-control option" id="sistema-0">Espeto Campinas</option>
<option value="2" selected="selected" class="form-control option" id="sistema-1">gomes e gomes</option>
<option value="3" class="form-control option" id="sistema-2">clarus</option>
</select>
              
            </div>

          </div>        
          <div class="form-group">  
            <label for="status" class="col-lg-2 control-label">status</label>
            <div class="col-lg-10">              
              <select name="status" class="form-control" id="status">
<option value="1" class="form-control option" id="status-0">Ativo</option>
<option value="0" selected="selected" class="form-control option" id="status-1">Inativo</option>
</select>
              
            </div>

          </div>        
          <div class="form-group">  
            <label for="senha" class="col-lg-2 control-label">senha</label>
            <div class="col-lg-10">
              <input type="hidden" id="senha_orig" name="senha_orig" value="202cb962ac59075b964b07152d234b70">
              <input class="form-control" type="password" id="senha" name="senha" value="202cb962ac59075b964b07152d234b70">
            </div>
          </div>       
          <div class="form-group">  
            <label for="senha_confirm" class="col-lg-2 control-label">Confirmação da Senha</label>
            <div class="col-lg-10">              
              <input class="form-control" type="password" id="senha_confirm" name="senha_confirm" value="202cb962ac59075b964b07152d234b70">
            </div>
          </div>             

        </form>            


        <div class="row">    
          <input type="button" class="btn btn-default" value="Salvar usuarios" onclick="btn_salvar_usuarios()"/><br/>
          <input type="button" class="btn btn-default" value="Voltar" onclick="btn_inicio_usuarios_click()"/><br/>          
        </div>
      </fieldset>
      <!--          Fim do Conteudo-->
    </div><!-- /.container -->      
  </body>
</html><?php }} ?>
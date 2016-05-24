<?php /*%%SmartyHeaderCode:11916922985297731ae18682-99820944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a17d5d56b9102c3a99998d180e192e8fb6ccd5e1' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax/views/templates/lixo/form_lixo_novo.tpl',
      1 => 1385657111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11916922985297731ae18682-99820944',
  'variables' => 
  array (
    'head' => 0,
    'header' => 0,
    'registro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5297731ae4ca91_75743991',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5297731ae4ca91_75743991')) {function content_5297731ae4ca91_75743991($_smarty_tpl) {?><!DOCTYPE html>
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
    <link href="http://www.fabioalvaro.com.br/sistemax/files/js/toastmessage/resources/css/jquery.toastmessage.css" rel="stylesheet" type="text/css" />
  
    <script type="text/javascript" src="http://www.fabioalvaro.com.br/sistemax/files/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="http://www.fabioalvaro.com.br/sistemax/files/js/jquery_ui/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script type="text/javascript" src="http://www.fabioalvaro.com.br/sistemax/files/js/jquery.mask.js"></script>
    <script type="text/javascript" src="http://www.fabioalvaro.com.br/sistemax/files/js/jquery.maskMoney.js"></script>
    <script type="text/javascript" src="http://www.fabioalvaro.com.br/sistemax/files/js/util.js"></script>
    <script type="text/javascript" src="http://www.fabioalvaro.com.br/sistemax/files/js/lixo/lixo.js"></script>
      
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
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container">
      <!--          inicio do Conteudo-->   

  <fieldset>
    <legend>Cadastro de lixo</legend>  

    <form id="my_cad_form_lixo" name="my_cad_form_lixo" 
          action="#" method="POST" enctype="multipart/form-data">      

              <div class="form-group">  
        <label for="id_usuario" class="col-lg-2 control-label">id_usuario</label>
        <div class="col-lg-10">
            <input class="form-control" type="text" id="id_usuario" name="id_usuario" value="">
        </div>
        
        </div>        
              <div class="form-group">  
        <label for="nome" class="col-lg-2 control-label">nome</label>
        <div class="col-lg-10">
            <input class="form-control" type="text" id="nome" name="nome" value="">
        </div>
        
        </div>        
              <div class="form-group">  
        <label for="email" class="col-lg-2 control-label">email</label>
        <div class="col-lg-10">
            <input class="form-control" type="text" id="email" name="email" value="">
        </div>
        
        </div>        
              <div class="form-group">  
        <label for="sistema" class="col-lg-2 control-label">sistema</label>
        <div class="col-lg-10">
            <input class="form-control" type="text" id="sistema" name="sistema" value="">
        </div>
        
        </div>        
              <div class="form-group">  
        <label for="status" class="col-lg-2 control-label">status</label>
        <div class="col-lg-10">
            <input class="form-control" type="text" id="status" name="status" value="">
        </div>
        
        </div>        
              <div class="form-group">  
        <label for="senha" class="col-lg-2 control-label">senha</label>
        <div class="col-lg-10">
            <input class="form-control" type="text" id="senha" name="senha" value="">
        </div>
        
        </div>        
            
    </form>            


    <br>     
    <input type="button" class="btn_padrao" value="Salvar lixo" onclick="btn_salvar_lixo()"/><br/>
    <input type="button" class="btn_padrao" value="Voltar" onclick="btn_inicio_lixo_click()"/><br/>  
    </form>
  </fieldset>
   <!--          Fim do Conteudo-->
    </div><!-- /.container -->      
  </body>
</html><?php }} ?>
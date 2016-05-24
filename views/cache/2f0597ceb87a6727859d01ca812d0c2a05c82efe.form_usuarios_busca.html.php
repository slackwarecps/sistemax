<?php /*%%SmartyHeaderCode:5739260755297b972e93669-02325316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f0597ceb87a6727859d01ca812d0c2a05c82efe' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax/views/templates/usuarios/form_usuarios_busca.html',
      1 => 1385658467,
      2 => 'file',
    ),
    'edefa585b27d58a5db06b0b80941bb2f90e292bc' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax/views/templates/usuarios/grid_usuarios.tpl',
      1 => 1385659150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5739260755297b972e93669-02325316',
  'variables' => 
  array (
    'head' => 0,
    'header' => 0,
    'usuarios_lista' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5297b972ef2c89_02869009',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5297b972ef2c89_02869009')) {function content_5297b972ef2c89_02869009($_smarty_tpl) {?><!DOCTYPE html>
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
      <div class="starter-template">
        <h1>Titulo</h1>  
        <fieldset class="form-inline">
          <legend>Buscar</legend>

          <div class="form-group col-6">
            <label class="sr-only" for="usuarios_busca_texto">Texto:</label>    
            <input type="text" name="usuarios_busca_texto" id="usuarios_busca_texto" class="form-control"   placeholder="Escreva algo para a busca"/>

          </div>          


          <input type="button" class="btn btn-default" value="buscar" 
             id="btn_usuarios_buscar" 
             name="btn_usuarios_buscar"
             onclick="busca_usuarios()"/>

        </fieldset>      
    
  
  <div class="alinha_esquerda">
    <br> 
    <a href='/sistemax/usuarios/novo_usuarios'  class="btn btn-default">Novo usuarios</a>
  </div>
  <br>
  
        <table name="lista_retorno" class="table-hover table-bordered table-striped">
          <thead>
            <tr>
              <th>cod</th>
              <th>nome</th>
              <th>Ação</th>
            </tr>
          </thead>      
          <tbody>
          <tr id="line_1">
    <td>1</td>
    <td>Fabio Alvaro Pereira</td>    
    <td>
      <a href="#" class="btn btn-default glyphicon glyphicon-pencil" onclick="link_edita_usuarios(1)">Editar</a>            
      <a href="#" class="btn btn-default glyphicon glyphicon-trash" onclick="link_exclui_usuarios(1)">Excluir</a>
    </td>
  </tr>   
    <tr id="line_2">
    <td>2</td>
    <td>Deise Cristina</td>    
    <td>
      <a href="#" class="btn btn-default glyphicon glyphicon-pencil" onclick="link_edita_usuarios(2)">Editar</a>            
      <a href="#" class="btn btn-default glyphicon glyphicon-trash" onclick="link_exclui_usuarios(2)">Excluir</a>
    </td>
  </tr>   
    



      </tbody>      
        </table>   
      </div>
      <!--          Fim do Conteudo-->
    </div><!-- /.container -->      
  </body>
</html><?php }} ?>
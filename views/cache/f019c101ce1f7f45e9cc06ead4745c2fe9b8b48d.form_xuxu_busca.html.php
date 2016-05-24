<?php /*%%SmartyHeaderCode:108370227652976a8b6516d9-98659833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f019c101ce1f7f45e9cc06ead4745c2fe9b8b48d' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax/views/templates/xuxu/form_xuxu_busca.html',
      1 => 1385654909,
      2 => 'file',
    ),
    '3a414520a05563aa070fa5aa4fae8d39bbd49ec8' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax/views/templates/xuxu/grid_xuxu.tpl',
      1 => 1385654376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108370227652976a8b6516d9-98659833',
  'variables' => 
  array (
    'head' => 0,
    'header' => 0,
    'entidade' => 0,
    'xuxu_lista' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52976a8b6936e9_24172077',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52976a8b6936e9_24172077')) {function content_52976a8b6936e9_24172077($_smarty_tpl) {?><!DOCTYPE html>
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
    <script type="text/javascript" src="http://www.fabioalvaro.com.br/sistemax/files/js/xuxu/xuxu.js"></script>
      
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
      <div class="starter-template">
        <h1>Titulo</h1>

        <fieldset class="form-inline">
          <legend>Buscar</legend>

          <div class="form-group col-6">
            <label class="sr-only" for="colaborador_busca_texto">Email address</label>    
            <input type="text" id="xuxu_busca_texto" class="form-control"name="colaborador_busca_texto"  placeholder="Escreva algo para a busca"/>

          </div>          


          <input type="button" class="btn btn-default" value="buscar" 
                 id="btn_xuxu_buscar" 
                 name="btn_xuxu_buscar"
                 onclick="busca_xuxu()"/>

        </fieldset>      
        
  <div class="row-offcanvas">    
    <br>
    <button onclick="btn_novo_xuxu_click()" class="btn btn-default">Novo </button>
   
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
    <td> Configure o nome que irá aparecer aqui</td>    
    <td>
      <a href="" class="btn btn-default glyphicon glyphicon-pencil" onclick="link_edita__xuxu(1)">Editar</a>            
      <a href="" class="btn btn-default glyphicon glyphicon-trash" onclick="link_exclui_xuxu(1)">Excluir</a>
    </td>
  </tr>   
    <tr id="line_2">
    <td>2</td>
    <td> Configure o nome que irá aparecer aqui</td>    
    <td>
      <a href="" class="btn btn-default glyphicon glyphicon-pencil" onclick="link_edita__xuxu(2)">Editar</a>            
      <a href="" class="btn btn-default glyphicon glyphicon-trash" onclick="link_exclui_xuxu(2)">Excluir</a>
    </td>
  </tr>   
    


          </tbody>      
        </table>                

      </div>
      <!--          Fim do Conteudo-->
    </div><!-- /.container -->      
  </body>
</html><?php }} ?>
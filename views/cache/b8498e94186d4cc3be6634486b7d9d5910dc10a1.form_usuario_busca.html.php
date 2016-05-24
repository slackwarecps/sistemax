<?php /*%%SmartyHeaderCode:838342796529750c0354be3-98456429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8498e94186d4cc3be6634486b7d9d5910dc10a1' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax/views/templates/usuario/form_usuario_busca.html',
      1 => 1371846917,
      2 => 'file',
    ),
    'e33acd7a97ea4ce6efc027da7dc49ee450da4944' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax/views/templates/usuario/grid_usuario.tpl',
      1 => 1371878645,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '838342796529750c0354be3-98456429',
  'variables' => 
  array (
    'head' => 0,
    'usuario_lista' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_529750c0388a58_72878666',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529750c0388a58_72878666')) {function content_529750c0388a58_72878666($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
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
    <script type="text/javascript" src="http://www.fabioalvaro.com.br/sistemax/files/js/usuario/usuario.js"></script>
      
</head>
  <body id="page5">
    <div id="main">


      <!--          inicio do Conteudo-->    

<div class="painel_basico">
  <div class="titulos_paginas" id="usuario">
    <h2>usuario</h2>
  </div> 
  <div>    
    <div class="clear"></div>
    <fieldset>
      <legend>Buscar</legend>
      <input type="text" name="colaborador_busca_texto" id="usuario_busca_texto" value="fa"/>
      <input type="button" class="btn_padrao" value="buscar" 
             id="btn_usuario_buscar" 
             name="btn_usuario_buscar"
             onclick="busca_usuario()"/>
    </fieldset>
  </div> 
  <div class="clear"></div>
  <div class="alinha_esquerda">    
    <button onclick="btn_novo_usuario_click()" class="btn_padrao">Novo usuario</button>
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
          <tr id="line_1">
    <td>1</td>
    <td> Fabio Alvaro Pereira</td>    
    <td>
      <span class="link_falso" onclick="link_edita_usuario(1)">
        <img src="/files/images/cad_edit.png" title="Alterar" alt="Alterar" height="40px">
      </span> 
      
      
      <span class="link_falso" onclick="link_exclui_usuario(1)">
        <img src="/files/images/cad_exclui.png" title="Alterar" alt="Alterar" height="40px">
      </span> 

    </td>
  </tr>   
    <tr id="line_2">
    <td>2</td>
    <td> Deise Cristina</td>    
    <td>
      <span class="link_falso" onclick="link_edita_usuario(2)">
        <img src="/files/images/cad_edit.png" title="Alterar" alt="Alterar" height="40px">
      </span> 
      
      
      <span class="link_falso" onclick="link_exclui_usuario(2)">
        <img src="/files/images/cad_exclui.png" title="Alterar" alt="Alterar" height="40px">
      </span> 

    </td>
  </tr>   
    


      </tbody>      
    </table>
  </div>
  <div class="clear"></div>
</div>
      
  <!--          Fim do Conteudo-->

    </div>
  </body>
</html><?php }} ?>
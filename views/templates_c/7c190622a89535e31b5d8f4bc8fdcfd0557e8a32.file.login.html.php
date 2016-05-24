<?php /* Smarty version Smarty-3.1.8, created on 2013-07-04 20:47:56
         compiled from "D:/wamp/www/www.sistemax.com.br/views/templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1424951d609acb01c14-47007647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c190622a89535e31b5d8f4bc8fdcfd0557e8a32' => 
    array (
      0 => 'D:/wamp/www/www.sistemax.com.br/views/templates\\login.html',
      1 => 1372975189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1424951d609acb01c14-47007647',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51d609acb03772_27244722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d609acb03772_27244722')) {function content_51d609acb03772_27244722($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title>Fabio Alvaro Pereira - Sistema Online</title>

<script src="/files/js/jquery-1.9.1.js"></script>
<script src="/files/js/login/login.js"></script>
</head>
  <body style="
  line-height: 1.2em;
background-color: #E3E3E3;
min-height: 610px;
  ">

<div id="container" style="
       left: 50%;
position: absolute;
top: 25%;
z-index: 0;   
        ">
<img src="/files/imagens/fundo_comercial.jpg" style="
min-height: 100%;
min-width: 1024px;
width: 100%;
height: auto;
position: fixed;
top: 0;
left: 0;
z-index: -10;
">
   
   
   <div style="
opacity: 0.9;
border-radius:8px;
background: none repeat scroll 0 0 #777777;
box-shadow: 0 0 7px #BFBFBF inset, 0 0 15px 0 #A5A5A5;
margin-left: -240px;
width: 500px;
padding: 20px 0;
text-align:center;
   ">
   <img src="/files/imagens/fb_fabio_128x128.png"  height="135" /><br/><br/>
      <form id="form_login">
        <div>
          <label>E-mail:</label>
          <input type="text" name="email" id="email" size=30/>
        </div>
        <div>
          <label>Senha:</label>
          <input type="password" name="senha" id="senha" size=30/>
        </div>
        <br>
        <div>
          <input type="button" value="Acessar" class="btn_padrao" onclick="valida()" />
        </div>
        <br>
        <div><a href="#">Esqueci minha senha</a></div>
      </form>
    </div>
        
        
</div>   
  </body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.8, created on 2013-08-13 19:14:17
         compiled from "/home/fabioalvaro/www/sistemax//views/templates/comuns/topo.html" */ ?>
<?php /*%%SmartyHeaderCode:1817221983520aafb95e1793-83476495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bec94fb6fa347545d9deff8c47356baea688a8ee' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax//views/templates/comuns/topo.html',
      1 => 1371846472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1817221983520aafb95e1793-83476495',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_520aafb9602c14_17394055',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520aafb9602c14_17394055')) {function content_520aafb9602c14_17394055($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/fabioalvaro/system/libs/smarty/plugins/modifier.date_format.php';
?><div style="width: 100%; height:20px; text-align:right; font-size:11px; border-bottom:1px solid #DDD;">

    <b>Depto: </b><?php echo $_SESSION['user']['depto'];?>

    <b>Funcao: </b><?php echo $_SESSION['user']['funcao'];?>
 
    <b>Usuario: </b><?php echo $_SESSION['user']['nome'];?>

       
       
<a style="line-height: 20px; width: 100px; 
               text-align:center; display:block; float:right;background: 
               #DDD; color:#CC0000;" 
               href="/login/logout">Logout</a>  
   <a style="line-height: 20px; width: 100px; text-align:center; display:block; float:right;background: #DDD; color:#CC0000;"  href="#">Alterar Senha </a> 
    <div style="float:right; margin-right: 10px;margin-left: 10px;">
    <?php echo smarty_modifier_date_format(time(),' %d-%m-%Y');?>

    </div>
</div>

            <img src="/files/imagens/img_sistema.png" style="margin: 35px 0 10px 20px; float:left;" />
            <img class="foto" height="100px" style="margin:1px;" src="/files/imagens/admin.jpg" /><?php }} ?>
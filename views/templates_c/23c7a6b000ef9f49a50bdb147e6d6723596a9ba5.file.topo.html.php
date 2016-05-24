<?php /* Smarty version Smarty-3.1.8, created on 2013-07-04 20:48:38
         compiled from "D:/wamp/www/www.sistemax.com.br/views/templates\comuns\topo.html" */ ?>
<?php /*%%SmartyHeaderCode:2016751d609d66e9954-24198667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23c7a6b000ef9f49a50bdb147e6d6723596a9ba5' => 
    array (
      0 => 'D:/wamp/www/www.sistemax.com.br/views/templates\\comuns\\topo.html',
      1 => 1372975183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2016751d609d66e9954-24198667',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51d609d67e0403_06195419',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d609d67e0403_06195419')) {function content_51d609d67e0403_06195419($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp\\system\\libs\\smarty\\plugins\\modifier.date_format.php';
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
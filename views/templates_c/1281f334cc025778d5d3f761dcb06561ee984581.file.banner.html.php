<?php /* Smarty version Smarty-3.1.8, created on 2013-11-29 20:19:00
         compiled from "/home/fabioalvaro/www//sistemax/views/templates/comuns/banner.html" */ ?>
<?php /*%%SmartyHeaderCode:1525473940529912d4df2809-34995955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1281f334cc025778d5d3f761dcb06561ee984581' => 
    array (
      0 => '/home/fabioalvaro/www//sistemax/views/templates/comuns/banner.html',
      1 => 1381840453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1525473940529912d4df2809-34995955',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path_image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_529912d4df92d8_76305502',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529912d4df92d8_76305502')) {function content_529912d4df92d8_76305502($_smarty_tpl) {?><div class="banner slider-wrapper theme-default">
  <div id="slider" class="nivoSlider banner">
    
      <img src="<?php echo $_smarty_tpl->tpl_vars['path_image']->value;?>
/banner_home_01.jpg" alt="Banner Clarus Technology"/>
      <img src="<?php echo $_smarty_tpl->tpl_vars['path_image']->value;?>
/banner_home_02.jpg" alt="Banner Clarus Technology"/>
  </div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.8, created on 2013-11-29 19:12:00
         compiled from "/home/fabioalvaro/www/sistemax/views/templates/comuns/banner.html" */ ?>
<?php /*%%SmartyHeaderCode:7840319452990320a80766-27876069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62f4ac9eb0736eeaa13ef8193a446cdd6bc84639' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax/views/templates/comuns/banner.html',
      1 => 1381840453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7840319452990320a80766-27876069',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path_image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52990320a876c1_47887656',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52990320a876c1_47887656')) {function content_52990320a876c1_47887656($_smarty_tpl) {?><div class="banner slider-wrapper theme-default">
  <div id="slider" class="nivoSlider banner">
    
      <img src="<?php echo $_smarty_tpl->tpl_vars['path_image']->value;?>
/banner_home_01.jpg" alt="Banner Clarus Technology"/>
      <img src="<?php echo $_smarty_tpl->tpl_vars['path_image']->value;?>
/banner_home_02.jpg" alt="Banner Clarus Technology"/>
  </div>
</div><?php }} ?>
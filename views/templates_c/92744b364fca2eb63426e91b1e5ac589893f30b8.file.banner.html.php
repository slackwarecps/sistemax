<?php /* Smarty version Smarty-3.1.15, created on 2013-11-29 20:19:38
         compiled from "/var/www/htdocs/www.fabioalvaro.com.br/sistemax/views/templates/comuns/banner.html" */ ?>
<?php /*%%SmartyHeaderCode:359635815529912fae41d50-58045578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92744b364fca2eb63426e91b1e5ac589893f30b8' => 
    array (
      0 => '/var/www/htdocs/www.fabioalvaro.com.br/sistemax/views/templates/comuns/banner.html',
      1 => 1385676445,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '359635815529912fae41d50-58045578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path_image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_529912fae47a28_00618483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529912fae47a28_00618483')) {function content_529912fae47a28_00618483($_smarty_tpl) {?><div class="banner slider-wrapper theme-default">
  <div id="slider" class="nivoSlider banner">
    
      <img src="<?php echo $_smarty_tpl->tpl_vars['path_image']->value;?>
/banner_home_01.jpg" alt="Banner Clarus Technology"/>
      <img src="<?php echo $_smarty_tpl->tpl_vars['path_image']->value;?>
/banner_home_02.jpg" alt="Banner Clarus Technology"/>
  </div>
</div><?php }} ?>

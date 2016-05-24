<?php /* Smarty version Smarty-3.1.8, created on 2013-08-21 16:42:34
         compiled from "/home/fabioalvaro/www/sistemax//views/templates/depto.html" */ ?>
<?php /*%%SmartyHeaderCode:18106013855215182a47c222-53676332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb8f8256380d34c31f727ecc17701a5b9da91226' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax//views/templates/depto.html',
      1 => 1369783918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18106013855215182a47c222-53676332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'rodape' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5215182a482c26_53905408',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5215182a482c26_53905408')) {function content_5215182a482c26_53905408($_smarty_tpl) {?><html>
<?php echo $_smarty_tpl->tpl_vars['head']->value;?>

<body>
<div class="container">
  <div id="palco">
  <h1>Depto</h1>   
  Buscar: <input type="text" name="busca" value="" /> <input type="submit" value="Buscar" />
  </div>

</div>
   <?php echo $_smarty_tpl->tpl_vars['rodape']->value;?>
 
</body>
</html>
<?php }} ?>
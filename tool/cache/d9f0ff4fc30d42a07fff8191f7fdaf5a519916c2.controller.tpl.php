<?php /*%%SmartyHeaderCode:65710856251b220de2a7347-24440651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9f0ff4fc30d42a07fff8191f7fdaf5a519916c2' => 
    array (
      0 => 'modelos/controller.tpl',
      1 => 1370628786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65710856251b220de2a7347-24440651',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b263cfc645b1_75181757',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b263cfc645b1_75181757')) {function content_51b263cfc645b1_75181757($_smarty_tpl) {?><?php echo '<?php'; ?>

/*
* Gerado pelo Framework Tools 1.0
* Classe: Controller
*
*/

class cidadexuxu3 extends controller {
  public function index_action() { 
    $this->template->fetchJS('/files/js/cidadexuxu3/cidadexuxu3.js');  
    $this->template->run();
    $this->smarty->display('cidadexuxu3/cidadexuxu3_page.html');    
  }
}
<?php echo '?>'; ?><?php }} ?>
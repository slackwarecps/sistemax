<?php /* Smarty version Smarty-3.1.8, created on 2013-07-10 07:47:48
         compiled from "/home/fabioalvaro/www/sistemax//views/templates/vendedor/form_vendedor_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57720396151dd3bd4759782-19023209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6032d9d088dbc8d375695d74b1c953596855c9e2' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax//views/templates/vendedor/form_vendedor_novo.tpl',
      1 => 1372095488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57720396151dd3bd4759782-19023209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'registro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51dd3bd47db767_87091493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dd3bd47db767_87091493')) {function content_51dd3bd47db767_87091493($_smarty_tpl) {?><link href="/files/js/jquery_ui/css/smoothness/jquery-ui.css">
<div id="painel_basico">
  <div class="titulos_paginas" id="parametros">
    <h2>      
      Novo vendedor</h2>
  </div>

  <fieldset>
    <legend>Cadastro de vendedor</legend>  

    <form id="my_cad_form_vendedor" name="my_cad_form_vendedor" 
          action="#" method="POST" enctype="multipart/form-data">      

              <label for="VENCOD">VENCOD</label><input type="text" id="VENCOD" name="VENCOD" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['VENCOD'];?>
"><br>
              <label for="VENNOM">VENNOM</label><input type="text" id="VENNOM" name="VENNOM" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['VENNOM'];?>
"><br>
              <label for="SUPCOD">SUPCOD</label><input type="text" id="SUPCOD" name="SUPCOD" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['SUPCOD'];?>
"><br>
            
    </form>            


    <br>     
    <input type="button" class="btn_padrao" value="Salvar vendedor" onclick="btn_salvar_vendedor()"/><br/>
    <input type="button" class="btn_padrao" value="Voltar" onclick="btn_inicio_vendedor_click()"/><br/>  
    </form>
  </fieldset>
</div><?php }} ?>
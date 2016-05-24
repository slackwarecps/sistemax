<?php /* Smarty version Smarty-3.1.8, created on 2013-06-24 14:44:59
         compiled from "/home/fabioalvaro/www/sistemax//views/templates/supervisor/form_supervisor_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183056150351c8859b449b86-19491279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e9e5712c00156a1d7a0af96a949b9fe28c5f91f' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax//views/templates/supervisor/form_supervisor_novo.tpl',
      1 => 1372095750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183056150351c8859b449b86-19491279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'registro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51c8859b4860a2_97586088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c8859b4860a2_97586088')) {function content_51c8859b4860a2_97586088($_smarty_tpl) {?><link href="/files/js/jquery_ui/css/smoothness/jquery-ui.css">
<div id="painel_basico">
  <div class="titulos_paginas" id="parametros">
    <h2>      
      Novo supervisor</h2>
  </div>

  <fieldset>
    <legend>Cadastro de supervisor</legend>  

    <form id="my_cad_form_supervisor" name="my_cad_form_supervisor" 
          action="#" method="POST" enctype="multipart/form-data">      

              <label for="SUPCOD">SUPCOD</label><input type="text" id="SUPCOD" name="SUPCOD" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['SUPCOD'];?>
"><br>
              <label for="SUPNOM">SUPNOM</label><input type="text" id="SUPNOM" name="SUPNOM" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['SUPNOM'];?>
"><br>
            
    </form>            


    <br>     
    <input type="button" class="btn_padrao" value="Salvar supervisor" onclick="btn_salvar_supervisor()"/><br/>
    <input type="button" class="btn_padrao" value="Voltar" onclick="btn_inicio_supervisor_click()"/><br/>  
    </form>
  </fieldset>
</div><?php }} ?>
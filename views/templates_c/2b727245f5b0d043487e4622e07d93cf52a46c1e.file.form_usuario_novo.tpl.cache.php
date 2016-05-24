<?php /* Smarty version Smarty-3.1.8, created on 2013-07-05 17:16:08
         compiled from "/home/fabioalvaro/www/sistemax//views/templates/usuario/form_usuario_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138869070551d7298811f768-60605723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b727245f5b0d043487e4622e07d93cf52a46c1e' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax//views/templates/usuario/form_usuario_novo.tpl',
      1 => 1373055189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138869070551d7298811f768-60605723',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'registro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51d72988157794_48440755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d72988157794_48440755')) {function content_51d72988157794_48440755($_smarty_tpl) {?><link href="/files/js/jquery_ui/css/smoothness/jquery-ui.css">
<div id="painel_basico">
  <div class="titulos_paginas" id="parametros">
    <h2>      
      Novo usuario</h2>
  </div>

  <fieldset>
    <legend>Cadastro de usuario</legend>  

    <form id="my_cad_form_usuario" name="my_cad_form_usuario" 
          action="#" method="POST" enctype="multipart/form-data">      

              <label for="id_usuario">id_usuario</label><input type="text" id="id_usuario" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['id_usuario'];?>
"><br>
              <label for="nome">nome</label><input type="text" id="nome" name="nome" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['nome'];?>
"><br>
              <label for="email">email</label><input type="text" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['email'];?>
"><br>
              <label for="sistema">sistema</label><input type="text" id="sistema" name="sistema" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['sistema'];?>
"><br>
              <label for="status">status</label><input type="text" id="status" name="status" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['status'];?>
"><br>
              <label for="senha">senha</label><input type="text" id="senha" name="senha" value=""><br>
            
    </form>            


    <br>     
    <input type="button" class="btn_padrao" value="Salvar usuario" onclick="btn_salvar_usuario()"/><br/>
    <input type="button" class="btn_padrao" value="Voltar" onclick="btn_inicio_usuario_click()"/><br/>  
    </form>
  </fieldset>
</div><?php }} ?>
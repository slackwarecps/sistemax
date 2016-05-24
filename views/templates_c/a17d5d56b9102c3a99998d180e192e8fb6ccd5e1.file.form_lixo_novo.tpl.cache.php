<?php /* Smarty version Smarty-3.1.8, created on 2013-11-28 14:45:14
         compiled from "/home/fabioalvaro/www/sistemax/views/templates/lixo/form_lixo_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11916922985297731ae18682-99820944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a17d5d56b9102c3a99998d180e192e8fb6ccd5e1' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax/views/templates/lixo/form_lixo_novo.tpl',
      1 => 1385657111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11916922985297731ae18682-99820944',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'header' => 0,
    'registro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5297731ae45fe7_66266475',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5297731ae45fe7_66266475')) {function content_5297731ae45fe7_66266475($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
  <?php echo $_smarty_tpl->tpl_vars['head']->value;?>

  <body>
     <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

    <div class="container">
      <!--          inicio do Conteudo-->   

  <fieldset>
    <legend>Cadastro de lixo</legend>  

    <form id="my_cad_form_lixo" name="my_cad_form_lixo" 
          action="#" method="POST" enctype="multipart/form-data">      

              <div class="form-group">  
        <label for="id_usuario" class="col-lg-2 control-label">id_usuario</label>
        <div class="col-lg-10">
            <input class="form-control" type="text" id="id_usuario" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['id_usuario'];?>
">
        </div>
        
        </div>        
              <div class="form-group">  
        <label for="nome" class="col-lg-2 control-label">nome</label>
        <div class="col-lg-10">
            <input class="form-control" type="text" id="nome" name="nome" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['nome'];?>
">
        </div>
        
        </div>        
              <div class="form-group">  
        <label for="email" class="col-lg-2 control-label">email</label>
        <div class="col-lg-10">
            <input class="form-control" type="text" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['email'];?>
">
        </div>
        
        </div>        
              <div class="form-group">  
        <label for="sistema" class="col-lg-2 control-label">sistema</label>
        <div class="col-lg-10">
            <input class="form-control" type="text" id="sistema" name="sistema" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['sistema'];?>
">
        </div>
        
        </div>        
              <div class="form-group">  
        <label for="status" class="col-lg-2 control-label">status</label>
        <div class="col-lg-10">
            <input class="form-control" type="text" id="status" name="status" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['status'];?>
">
        </div>
        
        </div>        
              <div class="form-group">  
        <label for="senha" class="col-lg-2 control-label">senha</label>
        <div class="col-lg-10">
            <input class="form-control" type="text" id="senha" name="senha" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['senha'];?>
">
        </div>
        
        </div>        
            
    </form>            


    <br>     
    <input type="button" class="btn_padrao" value="Salvar lixo" onclick="btn_salvar_lixo()"/><br/>
    <input type="button" class="btn_padrao" value="Voltar" onclick="btn_inicio_lixo_click()"/><br/>  
    </form>
  </fieldset>
   <!--          Fim do Conteudo-->
    </div><!-- /.container -->      
  </body>
</html><?php }} ?>
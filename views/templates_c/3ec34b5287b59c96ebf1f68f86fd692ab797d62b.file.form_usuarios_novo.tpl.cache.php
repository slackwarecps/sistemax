<?php /* Smarty version Smarty-3.1.8, created on 2013-11-28 22:29:07
         compiled from "/home/fabioalvaro/www/sistemax/views/templates/usuarios/form_usuarios_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20567113895297dfd3494481-55189697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ec34b5287b59c96ebf1f68f86fd692ab797d62b' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax/views/templates/usuarios/form_usuarios_novo.tpl',
      1 => 1385667517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20567113895297dfd3494481-55189697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'header' => 0,
    'registro' => 0,
    'lista_sistemas' => 0,
    'lista_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5297dfd34d0ed2_38366036',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5297dfd34d0ed2_38366036')) {function content_5297dfd34d0ed2_38366036($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/fabioalvaro/www/sistemax/system/libs/smarty/plugins/function.html_options.php';
?><!DOCTYPE html>
<html lang="pt-br">
  <?php echo $_smarty_tpl->tpl_vars['head']->value;?>

  <body>
    <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

    <div class="container">      


      <!--          inicio do Conteudo-->   


      <fieldset>
        <legend>Cadastro de usuarios</legend>  

        <form id="my_cad_form_usuarios" name="my_cad_form_usuarios" 
              action="#" method="POST" enctype="multipart/form-data">      
          <input  type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['id_usuario'];?>
">
          <div class="form-group">  
            <label class="col-lg-2 control-label">Código </label>
            <label class="col-lg-10 control-label"><?php echo $_smarty_tpl->tpl_vars['registro']->value['id_usuario'];?>
</label>            
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
              <?php echo smarty_function_html_options(array('name'=>'sistema','id'=>'sistema','options'=>$_smarty_tpl->tpl_vars['lista_sistemas']->value,'selected'=>$_smarty_tpl->tpl_vars['registro']->value['sistema'],'class'=>"form-control"),$_smarty_tpl);?>
              
            </div>

          </div>        
          <div class="form-group">  
            <label for="status" class="col-lg-2 control-label">status</label>
            <div class="col-lg-10">              
              <?php echo smarty_function_html_options(array('id'=>'status','name'=>'status','options'=>$_smarty_tpl->tpl_vars['lista_status']->value,'selected'=>$_smarty_tpl->tpl_vars['registro']->value['status'],'class'=>"form-control"),$_smarty_tpl);?>
              
            </div>

          </div>        
          <div class="form-group">  
            <label for="senha" class="col-lg-2 control-label">senha</label>
            <div class="col-lg-10">
              <input type="hidden" id="senha_orig" name="senha_orig" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['senha'];?>
">
              <input class="form-control" type="password" id="senha" name="senha" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['senha'];?>
">
            </div>
          </div>       
          <div class="form-group">  
            <label for="senha_confirm" class="col-lg-2 control-label">Confirmação da Senha</label>
            <div class="col-lg-10">              
              <input class="form-control" type="password" id="senha_confirm" name="senha_confirm" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['senha'];?>
">
            </div>
          </div>             

        </form>            


        <div class="row">    
          <input type="button" class="btn btn-default" value="Salvar usuarios" onclick="btn_salvar_usuarios()"/><br/>
          <input type="button" class="btn btn-default" value="Voltar" onclick="btn_inicio_usuarios_click()"/><br/>          
        </div>
      </fieldset>
      <!--          Fim do Conteudo-->
    </div><!-- /.container -->      
  </body>
</html><?php }} ?>
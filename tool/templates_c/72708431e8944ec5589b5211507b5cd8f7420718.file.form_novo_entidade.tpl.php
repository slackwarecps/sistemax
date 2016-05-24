<?php /* Smarty version Smarty-3.1.13, created on 2013-11-28 15:07:47
         compiled from "modelos/form_novo_entidade.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182606783252977863294ac3-64185077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72708431e8944ec5589b5211507b5cd8f7420718' => 
    array (
      0 => 'modelos/form_novo_entidade.tpl',
      1 => 1385655112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182606783252977863294ac3-64185077',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'entidade' => 0,
    'lista_campos' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_529778632c8bb6_31555887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529778632c8bb6_31555887')) {function content_529778632c8bb6_31555887($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
  {$head}
  <body>
     {$header}
    <div class="container">
      <!--          inicio do Conteudo-->   

  <fieldset>
    <legend>Cadastro de <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
</legend>  

    <form id="my_cad_form_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
" name="my_cad_form_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
" 
          action="#" method="POST" enctype="multipart/form-data">      

      <?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_campos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value){
$_smarty_tpl->tpl_vars["data"]->_loop = true;
?>
        <div class="form-group">  
        <label for="<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
" class="col-lg-2 control-label"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</label>
        <div class="col-lg-10">
            <input class="form-control" type="text" id="<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
" value="{$registro.<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
}">
        </div>
        
        </div>        
      <?php }
if (!$_smarty_tpl->tpl_vars["data"]->_loop) {
?>    
        <input type="text" name="ok" value="" />
      <?php } ?>      
    </form>            


    <br>     
    <input type="button" class="btn_padrao" value="Salvar <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
" onclick="btn_salvar_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
()"/><br/>
    <input type="button" class="btn_padrao" value="Voltar" onclick="btn_inicio_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
_click()"/><br/>  
    </form>
  </fieldset>
   <!--          Fim do Conteudo-->
    </div><!-- /.container -->      
  </body>
</html><?php }} ?>
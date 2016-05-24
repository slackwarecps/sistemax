<?php /* Smarty version Smarty-3.1.13, created on 2013-11-28 15:07:47
         compiled from "modelos/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1816227485297786325dbd3-95794362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecfc834c0bb964e376572c6f84a13a8ec12a8a70' => 
    array (
      0 => 'modelos/page.tpl',
      1 => 1385656077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1816227485297786325dbd3-95794362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'entidade' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5297786328dc97_82156263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5297786328dc97_82156263')) {function content_5297786328dc97_82156263($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
  {$head}
  <body>
    {$header}
    <div class="container">
      <!--          inicio do Conteudo-->    
      <div class="starter-template">
        <h1>Titulo</h1>  
        <fieldset class="form-inline">
          <legend>Buscar</legend>

          <div class="form-group col-6">
            <label class="sr-only" for="<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
_busca_texto">Texto:</label>    
            <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
_busca_texto" id="<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
_busca_texto" class="form-control"   placeholder="Escreva algo para a busca"/>

          </div>          


          <input type="button" class="btn btn-default" value="buscar" 
             id="btn_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
_buscar" 
             name="btn_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
_buscar"
             onclick="busca_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
()"/>

        </fieldset>      
    
  
  <div class="alinha_esquerda">
    <br> 
    <a href='/<?php echo @constant('TOOL_SUBPASTA_SISTEMA');?>
/<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
/novo_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
'  class="btn btn-default">Novo <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
</a>
  </div>
  <br>
  
        <table name="lista_retorno" class="table-hover table-bordered table-striped">
          <thead>
            <tr>
              <th>cod</th>
              <th>nome</th>
              <th>Ação</th>
            </tr>
          </thead>      
          <tbody>
        {include file="<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
/grid_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
.tpl" <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
_lista=$<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
_lista}
      </tbody>      
        </table>   
      </div>
      <!--          Fim do Conteudo-->
    </div><!-- /.container -->      
  </body>
</html><?php }} ?>
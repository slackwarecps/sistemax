<?php /* Smarty version Smarty-3.1.8, created on 2013-11-28 14:46:04
         compiled from "/home/fabioalvaro/www/sistemax/views/templates/lixo/form_lixo_busca.html" */ ?>
<?php /*%%SmartyHeaderCode:835433495297734cd15364-80456656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f9dd42bbedfa918e0da2d405b8e3f82b1f1e6fc' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax/views/templates/lixo/form_lixo_busca.html',
      1 => 1385657111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '835433495297734cd15364-80456656',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'header' => 0,
    'lixo_lista' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5297734cd27508_34416049',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5297734cd27508_34416049')) {function content_5297734cd27508_34416049($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
  <?php echo $_smarty_tpl->tpl_vars['head']->value;?>

  <body>
    <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

    <div class="container">
      <!--          inicio do Conteudo-->    
      <div class="starter-template">
        <h1>Titulo</h1>  
        <fieldset class="form-inline">
          <legend>Buscar</legend>

          <div class="form-group col-6">
            <label class="sr-only" for="lixo_busca_texto">Texto:</label>    
            <input type="text" name="lixo_busca_texto" id="lixo_busca_texto" class="form-control"   placeholder="Escreva algo para a busca"/>

          </div>          


          <input type="button" class="btn btn-default" value="buscar" 
             id="btn_lixo_buscar" 
             name="btn_lixo_buscar"
             onclick="busca_lixo()"/>

        </fieldset>      
    
  
  <div class="alinha_esquerda">
    <br> 
    <a href='/sistemax/lixo/novo_lixo'  class="btn btn-default">Novo lixo</a>
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
        <?php echo $_smarty_tpl->getSubTemplate ("lixo/grid_lixo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('lixo_lista'=>$_smarty_tpl->tpl_vars['lixo_lista']->value), 0);?>

      </tbody>      
        </table>   
      </div>
      <!--          Fim do Conteudo-->
    </div><!-- /.container -->      
  </body>
</html><?php }} ?>
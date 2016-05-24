<?php /* Smarty version Smarty-3.1.8, created on 2013-11-28 14:08:43
         compiled from "/home/fabioalvaro/www/sistemax/views/templates/xuxu/form_xuxu_busca.html" */ ?>
<?php /*%%SmartyHeaderCode:108370227652976a8b6516d9-98659833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f019c101ce1f7f45e9cc06ead4745c2fe9b8b48d' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax/views/templates/xuxu/form_xuxu_busca.html',
      1 => 1385654909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108370227652976a8b6516d9-98659833',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'header' => 0,
    'entidade' => 0,
    'xuxu_lista' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52976a8b66e099_27217465',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52976a8b66e099_27217465')) {function content_52976a8b66e099_27217465($_smarty_tpl) {?><!DOCTYPE html>
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
            <label class="sr-only" for="colaborador_busca_texto">Email address</label>    
            <input type="text" id="xuxu_busca_texto" class="form-control"name="colaborador_busca_texto"  placeholder="Escreva algo para a busca"/>

          </div>          


          <input type="button" class="btn btn-default" value="buscar" 
                 id="btn_xuxu_buscar" 
                 name="btn_xuxu_buscar"
                 onclick="busca_xuxu()"/>

        </fieldset>      
        
  <div class="row-offcanvas">    
    <br>
    <button onclick="btn_novo_xuxu_click()" class="btn btn-default">Novo <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
</button>
   
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
            <?php echo $_smarty_tpl->getSubTemplate ("xuxu/grid_xuxu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('xuxu_lista'=>$_smarty_tpl->tpl_vars['xuxu_lista']->value), 0);?>

          </tbody>      
        </table>                

      </div>
      <!--          Fim do Conteudo-->
    </div><!-- /.container -->      
  </body>
</html><?php }} ?>
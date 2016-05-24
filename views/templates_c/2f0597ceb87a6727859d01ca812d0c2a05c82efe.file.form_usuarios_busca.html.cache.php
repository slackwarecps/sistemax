<?php /* Smarty version Smarty-3.1.8, created on 2013-11-28 19:45:22
         compiled from "/home/fabioalvaro/www/sistemax/views/templates/usuarios/form_usuarios_busca.html" */ ?>
<?php /*%%SmartyHeaderCode:5739260755297b972e93669-02325316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f0597ceb87a6727859d01ca812d0c2a05c82efe' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax/views/templates/usuarios/form_usuarios_busca.html',
      1 => 1385658467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5739260755297b972e93669-02325316',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'header' => 0,
    'usuarios_lista' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5297b972eb0245_74505528',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5297b972eb0245_74505528')) {function content_5297b972eb0245_74505528($_smarty_tpl) {?><!DOCTYPE html>
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
            <label class="sr-only" for="usuarios_busca_texto">Texto:</label>    
            <input type="text" name="usuarios_busca_texto" id="usuarios_busca_texto" class="form-control"   placeholder="Escreva algo para a busca"/>

          </div>          


          <input type="button" class="btn btn-default" value="buscar" 
             id="btn_usuarios_buscar" 
             name="btn_usuarios_buscar"
             onclick="busca_usuarios()"/>

        </fieldset>      
    
  
  <div class="alinha_esquerda">
    <br> 
    <a href='/sistemax/usuarios/novo_usuarios'  class="btn btn-default">Novo usuarios</a>
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
        <?php echo $_smarty_tpl->getSubTemplate ("usuarios/grid_usuarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('usuarios_lista'=>$_smarty_tpl->tpl_vars['usuarios_lista']->value), 0);?>

      </tbody>      
        </table>   
      </div>
      <!--          Fim do Conteudo-->
    </div><!-- /.container -->      
  </body>
</html><?php }} ?>
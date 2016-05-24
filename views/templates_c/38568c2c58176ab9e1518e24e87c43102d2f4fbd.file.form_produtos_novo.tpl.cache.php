<?php /* Smarty version Smarty-3.1.8, created on 2013-07-06 11:43:14
         compiled from "/home/fabioalvaro/www/sistemax//views/templates/produtos/form_produtos_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205917449451d82d0234ac17-57685888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38568c2c58176ab9e1518e24e87c43102d2f4fbd' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax//views/templates/produtos/form_produtos_novo.tpl',
      1 => 1372964964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205917449451d82d0234ac17-57685888',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'registro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51d82d023edc76_76143238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d82d023edc76_76143238')) {function content_51d82d023edc76_76143238($_smarty_tpl) {?><link href="/files/js/jquery_ui/css/smoothness/jquery-ui.css">
<div id="painel_basico">
  <div class="titulos_paginas" id="parametros">
    <h2>      
      Novo produtos</h2>
  </div>

  <fieldset>
    <legend>Cadastro de produtos</legend>  

    <form id="my_cad_form_produtos" name="my_cad_form_produtos" 
          action="#" method="POST" enctype="multipart/form-data">      

              <label for="PROCOD">PROCOD</label><input type="text" id="PROCOD" name="PROCOD" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['PROCOD'];?>
"><br>
              <label for="PRODES">PRODES</label><input type="text" id="PRODES" name="PRODES" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['PRODES'];?>
"><br>
              <label for="PROVVA">PROVVA</label><input type="text" id="PROVVA" name="PROVVA" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['PROVVA'];?>
"><br>
              <label for="PROUND">PROUND</label><input type="text" id="PROUND" name="PROUND" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['PROUND'];?>
"><br>
              <label for="PROQTD">PROQTD</label><input type="text" id="PROQTD" name="PROQTD" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['PROQTD'];?>
"><br>
              <label for="PROQTM">PROQTM</label><input type="text" id="PROQTM" name="PROQTM" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['PROQTM'];?>
"><br>
              <label for="PROCUS">PROCUS</label><input type="text" id="PROCUS" name="PROCUS" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['PROCUS'];?>
"><br>
              <label for="PROMAR">PROMAR</label><input type="text" id="PROMAR" name="PROMAR" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['PROMAR'];?>
"><br>
              <label for="DEPCOD">DEPCOD</label><input type="text" id="DEPCOD" name="DEPCOD" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['DEPCOD'];?>
"><br>
              <label for="PROBAR">PROBAR</label><input type="text" id="PROBAR" name="PROBAR" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['PROBAR'];?>
"><br>
              <label for="MARCOD">MARCOD</label><input type="text" id="MARCOD" name="MARCOD" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['MARCOD'];?>
"><br>
              <label for="PROQTI">PROQTI</label><input type="text" id="PROQTI" name="PROQTI" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['PROQTI'];?>
"><br>
              <label for="PROICM">PROICM</label><input type="text" id="PROICM" name="PROICM" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['PROICM'];?>
"><br>
              <label for="ALICOD">ALICOD</label><input type="text" id="ALICOD" name="ALICOD" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['ALICOD'];?>
"><br>
              <label for="PRODTU">PRODTU</label><input type="text" id="PRODTU" name="PRODTU" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['PRODTU'];?>
"><br>
              <label for="PRONEG">PRONEG</label><input type="text" id="PRONEG" name="PRONEG" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['PRONEG'];?>
"><br>
              <label for="PROVVP">PROVVP</label><input type="text" id="PROVVP" name="PROVVP" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['PROVVP'];?>
"><br>
              <label for="PEDEQUANTIDADE">PEDEQUANTIDADE</label><input type="text" id="PEDEQUANTIDADE" name="PEDEQUANTIDADE" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['PEDEQUANTIDADE'];?>
"><br>
              <label for="PROD_COMPOSTO">PROD_COMPOSTO</label><input type="text" id="PROD_COMPOSTO" name="PROD_COMPOSTO" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['PROD_COMPOSTO'];?>
"><br>
              <label for="PONTOS">PONTOS</label><input type="text" id="PONTOS" name="PONTOS" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['PONTOS'];?>
"><br>
              <label for="RELACAO1">RELACAO1</label><input type="text" id="RELACAO1" name="RELACAO1" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['RELACAO1'];?>
"><br>
              <label for="CARNE">CARNE</label><input type="text" id="CARNE" name="CARNE" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['CARNE'];?>
"><br>
              <label for="RELMIN">RELMIN</label><input type="text" id="RELMIN" name="RELMIN" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['RELMIN'];?>
"><br>
              <label for="TIPOKIT">TIPOKIT</label><input type="text" id="TIPOKIT" name="TIPOKIT" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['TIPOKIT'];?>
"><br>
            
    </form>            


    <br>     
    <input type="button" class="btn_padrao" value="Salvar produtos" onclick="btn_salvar_produtos()"/><br/>
    <input type="button" class="btn_padrao" value="Voltar" onclick="btn_inicio_produtos_click()"/><br/>  
    </form>
  </fieldset>
</div><?php }} ?>
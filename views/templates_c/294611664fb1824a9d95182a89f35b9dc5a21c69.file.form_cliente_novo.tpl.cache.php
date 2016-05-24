<?php /* Smarty version Smarty-3.1.8, created on 2013-08-29 13:54:46
         compiled from "/home/fabioalvaro/www/sistemax//views/templates/cliente/form_cliente_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2037784028521f7cd6d91179-71324725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '294611664fb1824a9d95182a89f35b9dc5a21c69' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax//views/templates/cliente/form_cliente_novo.tpl',
      1 => 1377795137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2037784028521f7cd6d91179-71324725',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'registro' => 0,
    'rodape' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_521f7cd6e0c8a9_32191949',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521f7cd6e0c8a9_32191949')) {function content_521f7cd6e0c8a9_32191949($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
    <?php echo $_smarty_tpl->tpl_vars['head']->value;?>

    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <?php echo $_smarty_tpl->getSubTemplate ("comuns/navegacao.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3">
                    <div class="well sidebar-nav">
                        <?php echo $_smarty_tpl->getSubTemplate ("comuns/menu_lateral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

                    </div><!--/.well -->
                </div><!--/span-->

                <div class="span9">
                    <!--conteudo-->

              


                     


                    <div class="container_padrao">
                        <fieldset>
                            <legend>Cadastro de cliente</legend>  

                            <form id="my_cad_form_cliente" name="my_cad_form_cliente" 
                                  action="#" method="POST" enctype="multipart/form-data"
                                  class="form-inline"  role="form"
                                  >      

                                <div class="form-group">
                                    <label for="CLICOD" class="sr-only">Código</label>                                
                                  
                                        <input class="form-control" type="text" id="CLICOD"  name="CLICOD" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['CLICOD'];?>
">
                                  
                                </div>

                                <div class="form-group">
                                    <label for="CLINOM" class="sr-only">Nome do Cliente</label>
                               
                                        <input class="form-control" type="text" id="CLINOM" name="CLINOM" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['CLINOM'];?>
">
                               
                                </div>



                                <div class="form-group"><label for="CLIEND" class="col-lg-3 control-label">Endereço</label>
                                    <div class="col-lg-7" >
                                        <input  class="form-control" type="text" id="CLIEND" name="CLIEND" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['CLIEND'];?>
"></div>
                                </div>
                                <div class="form-group"><label for="CLICEP" class="col-lg-2 control-label" >CEP</label><div class="col-lg-10"><input  class="form-control" type="text" id="CLICEP" name="CLICEP" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['CLICEP'];?>
"></div></div>
                                <div class="form-group"><label for="CLIBAI" class="col-lg-2 control-label">Bairro</label><div class="col-lg-10"><input  class="form-control" type="text" id="CLIBAI" name="CLIBAI" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['CLIBAI'];?>
"></div></div>
                                <div class="form-group"><label for="CLICID" class="col-lg-2 control-label">cidade</label><div class="col-lg-10"><input  class="form-control" type="text" id="CLICID" name="CLICID" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['CLICID'];?>
"></div></div>
                                <div class="form-group"><label for="CLIUF" class="col-lg-2 control-label">Estado</label><div class="col-lg-10"><input  class="form-control" type="text" id="CLIUF" name="CLIUF" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['CLIUF'];?>
"></div></div>


                                <div class="form-group">
                                    <label for="CLIRG" class="sr-only" >CLIRG</label>
                                  
                                    <input type="text" id="CLIRG"   class="form-control" name="CLIRG" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['CLIRG'];?>
">
                                  
                                </div>
                                <div class="form-group">
                                    <label for="CLILIM" class="col-lg-2 control-label" >CLILIM</label>
                                    <div class="col-lg-10">
                                        <input type="text" id="CLILIM"   class="form-control" name="CLILIM" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['CLILIM'];?>
">                                        
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="status" class="col-lg-2 control-label" >status</label>
                                    <div class="col-lg-5">
                                        <input type="text" id="status"   class="form-control" name="status" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['status'];?>
">
                                    </div>
                               
                                    <label for="CLIDNA" class="col-lg-2 control-label" >CLIDNA</label>
                                    <div class="col-lg-5">
                                        <input type="text" id="CLIDNA"   class="form-control" name="CLIDNA" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['CLIDNA'];?>
">
                                    </div>
                                </div>


                                <div class="form-group"><label for="CLIDCA" class="col-lg-2 control-label" >CLIDCA</label><div class="col-lg-10"><input type="text" id="CLIDCA"   class="form-control" name="CLIDCA" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['CLIDCA'];?>
"></div></div>
                                <div class="form-group"><label for="CLIEMA" class="col-lg-2 control-label" >CLIEMA</label><div class="col-lg-10"><input type="text" id="CLIEMA"   class="form-control" name="CLIEMA" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['CLIEMA'];?>
"></div></div>
                                <div class="form-group"><label for="CLITIP" class="col-lg-2 control-label" >CLITIP</label><div class="col-lg-10"><input type="text" id="CLITIP"   class="form-control" name="CLITIP" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['CLITIP'];?>
"></div></div>
                                <div class="form-group"><label for="CLISIT" class="col-lg-2 control-label" >CLISIT</label><div class="col-lg-10"><input type="text" id="CLISIT"   class="form-control" name="CLISIT" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['CLISIT'];?>
"></div></div>
                                <div class="form-group"><label for="CLIFO1" class="col-lg-2 control-label" >CLIFO1</label><div class="col-lg-10"><input type="text" id="CLIFO1"   class="form-control" name="CLIFO1" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['CLIFO1'];?>
"></div></div>
                                <div class="form-group"><label for="CLIFO2" class="col-lg-2 control-label" >CLIFO2</label><div class="col-lg-10"><input type="text" id="CLIFO2"  class="form-control"  name="CLIFO2" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['CLIFO2'];?>
"></div></div>
                                <div class="form-group"><label for="CLICLA" class="col-lg-2 control-label" >CLICLA</label><div class="col-lg-10"><input type="text" id="CLICLA"   class="form-control" name="CLICLA" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['CLICLA'];?>
"></div></div>
                                <div class="form-group"><label for="CLIOBS" class="col-lg-2 control-label" >CLIOBS</label><div class="col-lg-10"><input type="text" id="CLIOBS"   class="form-control" name="CLIOBS" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['CLIOBS'];?>
"></div></div>
                                <div class="form-group"><label for="DIAS_PRAZO" class="col-lg-2 control-label" >DIAS_PRAZO</label><div class="col-lg-10"><input type="text" id="DIAS_PRAZO"   class="form-control" name="DIAS_PRAZO" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['DIAS_PRAZO'];?>
"></div></div>
                                <div class="form-group"><label for="CONTROLA_LIMITE" class="col-lg-2 control-label" >CONTROLA_LIMITE</label><div class="col-lg-10"><input type="text" id="CONTROLA_LIMITE"   class="form-control" name="CONTROLA_LIMITE" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['CONTROLA_LIMITE'];?>
"></div></div>
                                <div class="form-group"><label for="BLOQUEIA_APOSLIMITE" class="col-lg-2 control-label" >BLOQUEIA_APOSLIMITE</label><div class="col-lg-10"><input type="text" id="BLOQUEIA_APOSLIMITE"   class="form-control" name="BLOQUEIA_APOSLIMITE" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['BLOQUEIA_APOSLIMITE'];?>
"></div></div>
                                <div class="form-group"><label for="CLIIE" class="col-lg-2 control-label" >CLIIE</label><div class="col-lg-10"><input type="text" id="CLIIE"   class="form-control" name="CLIIE" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['CLIIE'];?>
"></div></div>
                                <div class="form-group"><label for="CLICNP" class="col-lg-2 control-label" >CLICNP</label><div class="col-lg-10"><input type="text" id="CLICNP"   class="form-control" name="CLICNP" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['CLICNP'];?>
"></div></div>
                                <div class="form-group"><label for="CLICPF" class="col-lg-2 control-label" >CLICPF</label><div class="col-lg-10"><input type="text" id="CLICPF"   class="form-control" name="CLICPF" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['CLICPF'];?>
"></div></div>
                                <div class="form-group"><label for="CLIDCO" class="col-lg-2 control-label" >CLIDCO</label><div class="col-lg-10"><input type="text" id="CLIDCO"   class="form-control" name="CLIDCO" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['CLIDCO'];?>
"></div></div>
                                <div class="form-group"><label for="PONTOS" class="col-lg-2 control-label" >PONTOS</label><div class="col-lg-10"><input type="text" id="PONTOS"   class="form-control" name="PONTOS" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['PONTOS'];?>
"></div></div>
                                <div class="form-group"><label for="CONTROLA_PONTOS" class="col-lg-2 control-label" >CONTROLA_PONTOS</label><div class="col-lg-10"><input type="text" id="CONTROLA_PONTOS"   class="form-control" name="CONTROLA_PONTOS" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['CONTROLA_PONTOS'];?>
"></div></div>

                            </form>            


                            <br>     



                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-default" onclick="btn_salvar_cliente()">Salvar cliente</button>
                                    <a href="/cliente" class="btn btn-primary">Voltar</a>
                                </div>
                            </div>            


                            </form>
                        </fieldset>
                    </div>
                    <!--fim do conteudo-->
                </div><!--/span-->
            </div><!--/row-->

            <hr>
            <?php echo $_smarty_tpl->tpl_vars['rodape']->value;?>

        </div><!--/.fluid-container-->
    </body>
</html><?php }} ?>
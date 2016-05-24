<?php /* Smarty version Smarty-3.1.8, created on 2013-07-04 20:48:45
         compiled from "D:/wamp/www/www.sistemax.com.br/views/templates\orcamento\form_orcamento_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1968051d609dd27be82-49147231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdf26bb2c0262f4bb4c2330fbe351c78e93ee52b' => 
    array (
      0 => 'D:/wamp/www/www.sistemax.com.br/views/templates\\orcamento\\form_orcamento_novo.tpl',
      1 => 1372975191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1968051d609dd27be82-49147231',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'registro' => 0,
    'lista_vendedores' => 0,
    'lista_status' => 0,
    'lista_pagamentos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51d609dd3e5da6_27052585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d609dd3e5da6_27052585')) {function content_51d609dd3e5da6_27052585($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\wamp\\system\\libs\\smarty\\plugins\\function.html_options.php';
?><link href="/files/js/jquery_ui/css/smoothness/jquery-ui.css">


<div id="painel_basico" class="debug1">
    <div class="titulos_paginas" id="parametros">
        <h2>Novo orcamento</h2>
    </div>


    <form id="my_cad_form_orcamento" name="my_cad_form_orcamento" 
          action="#" method="POST" enctype="multipart/form-data"> 

        <div class="grid_a debug1"> NOVO | EDITAR| SALVAR | ETC
            <br>     
            <input type="button" class="btn_padrao" value="Salvar orcamento" onclick="btn_orcamento_salvar()"/>
            <input type="button" class="btn_padrao" value="Voltar" onclick="btn_inicio_orcamento_click()"/> 
        </div>
        <div class="grid_b debug1">
            <div class="grid_ba debug1">
                gridba
                <fieldset>
                    <legend>dados do cliente</legend> 
                    <input type="hidden" id="ID_ORC" name="ID_ORC" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['ID_ORC'];?>
">
                    <input type="hidden" id="DATA" name="DATA" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['DATA'];?>
">
                    <input type="hidden" id="DATA_COMPRA" name="DATA_COMPRA" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['DATA_COMPRA'];?>
">
                    <input type="hidden" id="FATURADO" name="FATURADO" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['FATURADO'];?>
">
                    <input type="hidden" id="NF_NUMERO" name="NF_NUMERO" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['NF_NUMERO'];?>
">            
                    <input type="hidden" id="PEDIDO_COMPRA" name="PEDIDO_COMPRA" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['PEDIDO_COMPRA'];?>
">
                    <input type="hidden" id="VALOR_TOTAL" name="VALOR_TOTAL" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['VALOR_TOTAL'];?>
">


                    <label for="ID_CLIENTE">Cód/NOME</label>                    
                    <input type="text" id="ID_CLIENTE" name="ID_CLIENTE" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['ID_CLIENTE'];?>
">
                    <input type="text" id="NOME" name="NOME" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['NOME'];?>
">
                    <input type="button" class="btn_padrao" value="?" onclick="pegaClienteID()"/>                    
                    <div class="clear"></div>


                    <label for="EMAIL">EMAIL</label>
                    <input type="text" id="EMAIL" name="EMAIL" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['EMAIL'];?>
" class="junta_a_direita">
                    <label for="CIDADE">CIDADE</label>
                    <input type="text" id="CIDADE" name="CIDADE" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['CIDADE'];?>
" class="junta_a_direita">
                    <div class="clear"></div>
                    <br>
                    <label for="ID_VENDEDOR">VENDEDOR</label>            
                    <select name="ID_VENDEDOR">
                        <option value='null'>-- Escolha um Vendedor --</option>
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['lista_vendedores']->value,'selected'=>$_smarty_tpl->tpl_vars['registro']->value['ID_VENDEDOR']),$_smarty_tpl);?>

                    </select>
                    <label for="TELEFONE">TEL.Contato</label>
                    <input type="text" id="TELEFONE" name="TELEFONE" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['TELEFONE'];?>
">
                    <div class="clear"></div>            
                    <br>

                    <label for="DT_EVENTO">DT.EVENTO</label>
                    <input  class="campo_data" type="text" id="DT_EVENTO" name="DT_EVENTO" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['DT_EVENTO'];?>
">  
                    <label for="SITUACAO">Status:</label>
                    <select name="SITUACAO">                
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['lista_status']->value,'selected'=>$_smarty_tpl->tpl_vars['registro']->value['SITUACAO']),$_smarty_tpl);?>

                    </select>
                    <label for="HORA">HORA:</label>
                    <input type="text" id="HORA" class="campo_hora" name="HORA" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['HORA'];?>
">
                    <div class="clear"></div>                   





                    <div class="clear"></div>    

                    <label for="DESCONTO">DESCONTO</label><input type="text" id="DESCONTO" name="DESCONTO" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['DESCONTO'];?>
">








                    <label for="HORA_CHEGADA">HORA_CHEGADA</label><input type="text" id="HORA_CHEGADA" class="campo_hora" name="HORA_CHEGADA" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['HORA_CHEGADA'];?>
">







                    <div class="clear"></div>




                </fieldset>         
            </div>
            <div class="grid_bb debug1">            <div id="tab_orc_caixa">
                    <div id="tab_orc">
                        <ul>
                            <li><a href="#tabs-1">Observação</a></li>
                            <li><a href="#tabs-2">Obs.Reservada</a></li>
                            <li><a href="#tabs-3">Pagamento</a></li>
                        </ul>
                        <div id="tabs-1">                        
                            <textarea id="OBSERVACAO"><?php echo $_smarty_tpl->tpl_vars['registro']->value['OBSERVACAO'];?>
</textarea>                        
                        </div>
                        <div id="tabs-2">                   
                            <textarea id="OBS_RESERV"><?php echo $_smarty_tpl->tpl_vars['registro']->value['OBS_RESERV'];?>
</textarea>
                        </div>
                        <div id="tabs-3">                                                                     
                            <select name="ID_FORMA_PAGTO">                
                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['lista_pagamentos']->value,'selected'=>$_smarty_tpl->tpl_vars['registro']->value['ID_FORMA_PAGTO']),$_smarty_tpl);?>

                            </select>
                        </div>
                    </div>
                </div></div>
        </div>
        <div class="clear"></div>
        <div class="grid_c debug1">
            <label for="PESSOAS">PESSOAS</label>
            <input type="text" id="PESSOAS" name="PESSOAS" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['PESSOAS'];?>
">
            <input type="button" class="btn_padrao" value="Recalcula" onclick="btn_orcamento_recalcula()"/> 
            <label for="PESSOAS">Carne Necessária: 999,999</label>
            
            <label for="PESSOAS">Items:</label><input type="text" id="items" name="items" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['PESSOAS'];?>
">
            
            <div class="clear"></div>
            
            
            Item:<input type="text" id="add_nome" name="add_nome">
            <input type="button" class="btn_padrao" value="Adiciona" onclick="add_item_orcamento()"/>             
            
            <table border="1" class="table_orc" id="tabela_do_orcamento" >
                <thead>
                    <tr>
                        <th>produto</th>
                        <th>descricao</th>
                        <th>qtd</th>
                        <th>vr.unit</th>
                        <th>vr.total</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>asd</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>
                            <a href="#" title="Alterar Item"><img src="/files/imagens/editar.png"></a>
                            |<a href="#" onclick="confirma_exclui_item_orcamento(1)" title="Excluir Item"><img src="/files/imagens/apagar.gif"></a>
                        </td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>qwe</td>
                        <td>2</td>
                        <td>10</td>
                        <td>20</td>
                        <td>1</td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div class="grid_d debug1">StatusBar <label for="VALOR_TOTAL">VALOR_TOTAL: <?php echo $_smarty_tpl->tpl_vars['registro']->value['VALOR_TOTAL'];?>
</label>
            
        </div>        


    </form>     
</div><?php }} ?>
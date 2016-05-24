<link href="/files/js/jquery_ui/css/smoothness/jquery-ui.css">

<script>
function gravar(){
    grava_form_cookie();
}
</script>
<div id="painel_basico" class="debug1">
    <div class="titulos_paginas" id="parametros">
        <h2>Novo orcamento</h2>
    </div>
    <form id="my_cad_form_orcamento" name="my_cad_form_orcamento" 
          action="#" method="POST" enctype="multipart/form-data"> 
        <div class="grid_a debug1">                   
            <input type="button" class="btn_padrao" value="Editar" onclick="gravar()"/>
            <input type="button" class="btn_padrao" value="Recupera Cookie" onclick="recupera_form_cookie()"/>
            
            <input type="button" class="btn_padrao" value="Salvar" onclick="btn_orcamento_salvar()"/>
            <input type="button" class="btn_padrao" value="Voltar" onclick="btn_inicio_orcamento_click()"/> 
        </div>
        <div class="grid_b debug1">
            <div class="grid_ba debug1">               
                <fieldset>
                    <legend>dados do cliente</legend> 
                    <input type="hidden" id="ID_ORC" name="ID_ORC" value="{$registro.ID_ORC}">
                    <input type="hidden" id="DATA" name="DATA" value="{$registro.DATA}">
                    <input type="hidden" id="DATA_COMPRA" name="DATA_COMPRA" value="{$registro.DATA_COMPRA}">
                    <input type="hidden" id="FATURADO" name="FATURADO" value="{$registro.FATURADO}">
                    <input type="hidden" id="NF_NUMERO" name="NF_NUMERO" value="{$registro.NF_NUMERO}">            
                    <input type="hidden" id="PEDIDO_COMPRA" name="PEDIDO_COMPRA" value="{$registro.PEDIDO_COMPRA}">
                    <input type="hidden" id="VALOR_TOTAL" name="VALOR_TOTAL" value="{$registro.VALOR_TOTAL}">


                    <label for="ID_CLIENTE">Cód/NOME</label>                    
                    <input type="text" id="ID_CLIENTE" class="campo_integer" name="ID_CLIENTE" value="{$registro.ID_CLIENTE}">
                    <input type="text" id="NOME" class="campo_nome" name="NOME" value="{$registro.NOME}" onclick="btn_inicio_orcamento_click()">
                    <input type="button" class="btn_padrao" value="?" onclick="pegaClienteID()"/>                    
                    <div class="clear"></div>


                    <label for="EMAIL">EMAIL</label>
                    <input type="text" id="EMAIL" class="campo_email" name="EMAIL" value="{$registro.EMAIL}" class="junta_a_direita">
                    <label for="CIDADE">CIDADE</label>
                    <input type="text" id="CIDADE" name="CIDADE" value="{$registro.CIDADE}" class="junta_a_direita">
                    <div class="clear"></div>
                    <br>
                    <label for="ID_VENDEDOR">VENDEDOR</label>            
                    <select name="ID_VENDEDOR">
                        <option value='null'>-- Escolha um Vendedor --</option>
                        {html_options options=$lista_vendedores selected=$registro.ID_VENDEDOR}
                    </select>
                    <label for="TELEFONE">TEL.Contato</label>
                    <input type="text" id="TELEFONE" name="TELEFONE" value="{$registro.TELEFONE}">
                    <div class="clear"></div>            
                    <br>

                    <label for="DT_EVENTO">DT.EVENTO</label>
                    <input class="campo_data" type="text" id="DT_EVENTO" name="DT_EVENTO" value="{$registro.DT_EVENTO}">                     
                    <label for="SITUACAO">Status:</label>
                    <select name="SITUACAO">                
                        {html_options options=$lista_status selected=$registro.SITUACAO}
                    </select>
                    
                    <label for="HORA">HORA:</label>
                    <input type="text" id="HORA" class="campo_hora" name="HORA" value="{$registro.HORA}">
                    <div class="clear"></div>                   





                    <div class="clear"></div>    

                    <label for="DESCONTO">DESCONTO</label><input type="text" id="DESCONTO" name="DESCONTO" value="{$registro.DESCONTO}">








                    <label for="HORA_CHEGADA">HORA_CHEGADA</label><input type="text" id="HORA_CHEGADA" class="campo_hora" name="HORA_CHEGADA" value="{$registro.HORA_CHEGADA}">







                    <div class="clear"></div>




                </fieldset>         
            </div>
            <div class="grid_bb debug1">            <div id="tab_orc_caixa">
                    <div id="tab_orc">
                        <ul>
                            <li><a href="#tabs-1">Obs.</a></li>
                            <li><a href="#tabs-2">Obs.Reser</a></li>
                            <li><a href="#tabs-3">Pagto</a></li>
                        </ul>
                        <div id="tabs-1">                        
                            <textarea id="OBSERVACAO">{$registro.OBSERVACAO}</textarea>                        
                        </div>
                        <div id="tabs-2">                   
                            <textarea id="OBS_RESERV">{$registro.OBS_RESERV}</textarea>
                        </div>
                        <div id="tabs-3">                                                                     
                            <select name="ID_FORMA_PAGTO">                
                                {html_options options=$lista_pagamentos selected=$registro.ID_FORMA_PAGTO}
                            </select>
                        </div>
                    </div>
                </div></div>
        </div>
        <div class="clear"></div>
        <div class="grid_c debug1">
            <label for="PESSOAS">PESSOAS</label>
            <input type="text" class="campo_integer"  id="PESSOAS" name="PESSOAS" value="{$registro.PESSOAS}">
            <input type="button" class="btn_padrao" value="Recalcula" onclick="btn_orcamento_recalcula()"/>             
            <div class="clear"></div>
            
            <label for="add_nome">Descricão Produto: </label><input type="text" id="add_nome" name="add_nome">
            <label for="codigo">Código: </label><label><span id="codigo">000000</span></label>
            <label for="item_vr_unit">Valor Unitário: </label>  <label>  <span id="item_vr_unit">0.00</span></label>
            <label>Quantidade:</label><input type="text" id="quantidade_item" class="campo_integer" name="quantidade_item" value="1">
            
            <input type="button" class="btn_padrao" value="Adiciona" onclick="add_item_orcamento()"/>             
            <div class="tabelaverde">
            <table border="1" class="table_orc " id="tabela_do_orcamento" >
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
                    <tr id="traviso">
                        <td colspan="6">Insira itens</td>                        
                    </tr>
                </tbody>
            </table>
         </div>
        </div>
        <div class="grid_d debug1"><label for="VALOR_TOTAL">VALOR_TOTAL: <span id="vr_orcamento">{$registro.VALOR_TOTAL}</span></label>
            
        </div>        


    </form>     
</div>
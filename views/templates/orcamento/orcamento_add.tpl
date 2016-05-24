<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  {$head}
  <link rel="stylesheet" href="/files/css/960/css/reset.css" />
  <link rel="stylesheet" href="/files/css/960/css/text.css" />
  <link rel="stylesheet" href="/files/css/960/css/960_24_col.css" /> 

  <body id="page">
    <div id="main">
      <div id="header_sistema">
        {$menu_sistema}       
      </div>
    <div class="container_24">

      <div class="grid_19 fundo_cinza">
        <div class="grid_9 fundo_verde">2</div>
        <h2>Novo Orcamento</h2>   

        <form class="form_padrao" name="frm_salvar" id="frm_salvar" action="salvar" method="POST" enctype="multipart/form-data">


          
              <label for="ID_ORC">ID_ORC</label><input type="text" id="ID_ORC" name="ID_ORC" value="{$registro.ID_ORC}"><br>
              <label for="DATA">DATA</label><input type="text" id="DATA" name="DATA" value="{$registro.DATA}"><br>
              <label for="HORA">HORA</label><input type="text" id="HORA" name="HORA" value="{$registro.HORA}"><br>
              <label for="ID_CLIENTE">ID_CLIENTE</label><input type="text" id="ID_CLIENTE" name="ID_CLIENTE" value="{$registro.ID_CLIENTE}"><br>
              <label for="ID_VENDEDOR">ID_VENDEDOR</label><input type="text" id="ID_VENDEDOR" name="ID_VENDEDOR" value="{$registro.ID_VENDEDOR}"><br>
              <label for="FATURADO">FATURADO</label><input type="text" id="FATURADO" name="FATURADO" value="{$registro.FATURADO}"><br>
              <label for="NF_NUMERO">NF_NUMERO</label><input type="text" id="NF_NUMERO" name="NF_NUMERO" value="{$registro.NF_NUMERO}"><br>
              <label for="PEDIDO_COMPRA">PEDIDO_COMPRA</label><input type="text" id="PEDIDO_COMPRA" name="PEDIDO_COMPRA" value="{$registro.PEDIDO_COMPRA}"><br>
              <label for="DATA_COMPRA">DATA_COMPRA</label><input type="text" id="DATA_COMPRA" name="DATA_COMPRA" value="{$registro.DATA_COMPRA}"><br>
              <label for="VALOR_TOTAL">VALOR_TOTAL</label><input type="text" id="VALOR_TOTAL" name="VALOR_TOTAL" value="{$registro.VALOR_TOTAL}"><br>
              <label for="DESCONTO">DESCONTO</label><input type="text" id="DESCONTO" name="DESCONTO" value="{$registro.DESCONTO}"><br>
              <label for="OBSERVACAO">OBSERVACAO</label><input type="text" id="OBSERVACAO" name="OBSERVACAO" value="{$registro.OBSERVACAO}"><br>
              <label for="SITUACAO">SITUACAO</label><input type="text" id="SITUACAO" name="SITUACAO" value="{$registro.SITUACAO}"><br>
              <label for="PESSOAS">PESSOAS</label><input type="text" id="PESSOAS" name="PESSOAS" value="{$registro.PESSOAS}"><br>
              <label for="NOME">NOME</label><input type="text" id="NOME" name="NOME" value="{$registro.NOME}"><br>
              <label for="EMAIL">EMAIL</label><input type="text" id="EMAIL" name="EMAIL" value="{$registro.EMAIL}"><br>
              <label for="CIDADE">CIDADE</label><input type="text" id="CIDADE" name="CIDADE" value="{$registro.CIDADE}"><br>
              <label for="DT_EVENTO">DT_EVENTO</label><input type="text" id="DT_EVENTO" name="DT_EVENTO" value="{$registro.DT_EVENTO}"><br>
              <label for="ID_FORMA_PAGTO">ID_FORMA_PAGTO</label><input type="text" id="ID_FORMA_PAGTO" name="ID_FORMA_PAGTO" value="{$registro.ID_FORMA_PAGTO}"><br>
              <label for="OBS_RESERV">OBS_RESERV</label><input type="text" id="OBS_RESERV" name="OBS_RESERV" value="{$registro.OBS_RESERV}"><br>
              <label for="TELEFONE">TELEFONE</label><input type="text" id="TELEFONE" name="TELEFONE" value="{$registro.TELEFONE}"><br>
              <label for="HORA_CHEGADA">HORA_CHEGADA</label><input type="text" id="HORA_CHEGADA" name="HORA_CHEGADA" value="{$registro.HORA_CHEGADA}"><br>
    
         
        <div class="fleft">
          <button id="btn_usuario_add" onclick="salvar('{$action}')">Salvar</button>
          <button id="btn_usuario_add" onclick="history.go(-1)">Voltar</button>                 
        </div>     
        </form>               

      </div>  
      {$rodape} 
    </div>  
    <div class="aligncenter">
    <img src="../../../files/images/orcamento.png" width="878" height="622" alt="orcamento"/>
    </div>
    </div>    
  </body>
</html>
<link href="/files/js/jquery_ui/css/smoothness/jquery-ui.css">
<div id="painel_basico">
  <div class="titulos_paginas" id="parametros">
    <h2>
      <img src="/files/images/icon_tab_parametros.png" width="63" height="75" /> 
      Novo estoque</h2>
  </div>

  <fieldset>
    <legend>Cadastro de estoque</legend>  

    <form id="my_cad_form_estoque" name="my_cad_form_estoque" 
          action="#" method="POST" enctype="multipart/form-data">      

              <label for="MOECOD">MOECOD</label><input type="text" id="MOECOD" name="MOECOD" value="{$registro.MOECOD}"><br>
              <label for="MOEDAT">MOEDAT</label><input type="text" id="MOEDAT" name="MOEDAT" value="{$registro.MOEDAT}"><br>
              <label for="MOEDOC">MOEDOC</label><input type="text" id="MOEDOC" name="MOEDOC" value="{$registro.MOEDOC}"><br>
              <label for="PROCOD">PROCOD</label><input type="text" id="PROCOD" name="PROCOD" value="{$registro.PROCOD}"><br>
              <label for="MOEHOR">MOEHOR</label><input type="text" id="MOEHOR" name="MOEHOR" value="{$registro.MOEHOR}"><br>
              <label for="TMOCOD">TMOCOD</label><input type="text" id="TMOCOD" name="TMOCOD" value="{$registro.TMOCOD}"><br>
              <label for="CLICOD">CLICOD</label><input type="text" id="CLICOD" name="CLICOD" value="{$registro.CLICOD}"><br>
              <label for="MOETCF">MOETCF</label><input type="text" id="MOETCF" name="MOETCF" value="{$registro.MOETCF}"><br>
              <label for="MOEQTD">MOEQTD</label><input type="text" id="MOEQTD" name="MOEQTD" value="{$registro.MOEQTD}"><br>
              <label for="MOEVLR">MOEVLR</label><input type="text" id="MOEVLR" name="MOEVLR" value="{$registro.MOEVLR}"><br>
              <label for="MOECUS">MOECUS</label><input type="text" id="MOECUS" name="MOECUS" value="{$registro.MOECUS}"><br>
              <label for="PERCOD">PERCOD</label><input type="text" id="PERCOD" name="PERCOD" value="{$registro.PERCOD}"><br>
              <label for="MOECAX">MOECAX</label><input type="text" id="MOECAX" name="MOECAX" value="{$registro.MOECAX}"><br>
              <label for="USUCOD">USUCOD</label><input type="text" id="USUCOD" name="USUCOD" value="{$registro.USUCOD}"><br>
              <label for="MOEDCX">MOEDCX</label><input type="text" id="MOEDCX" name="MOEDCX" value="{$registro.MOEDCX}"><br>
              <label for="MOECAN">MOECAN</label><input type="text" id="MOECAN" name="MOECAN" value="{$registro.MOECAN}"><br>
              <label for="MOEOPE">MOEOPE</label><input type="text" id="MOEOPE" name="MOEOPE" value="{$registro.MOEOPE}"><br>
              <label for="MOEDES">MOEDES</label><input type="text" id="MOEDES" name="MOEDES" value="{$registro.MOEDES}"><br>
              <label for="MOETOT">MOETOT</label><input type="text" id="MOETOT" name="MOETOT" value="{$registro.MOETOT}"><br>
            
    </form>            


    <br>     
    <input type="button" class="btn_padrao" value="Salvar estoque" onclick="btn_salvar_estoque()"/><br/>
    <input type="button" class="btn_padrao" value="Voltar" onclick="btn_inicio_estoque_click()"/><br/>  
    </form>
  </fieldset>
</div>
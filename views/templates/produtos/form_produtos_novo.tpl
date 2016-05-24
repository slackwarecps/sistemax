<link href="/files/js/jquery_ui/css/smoothness/jquery-ui.css">
<div id="painel_basico">
  <div class="titulos_paginas" id="parametros">
    <h2>      
      Novo produtos</h2>
  </div>

  <fieldset>
    <legend>Cadastro de produtos</legend>  

    <form id="my_cad_form_produtos" name="my_cad_form_produtos" 
          action="#" method="POST" enctype="multipart/form-data">      

              <label for="PROCOD">PROCOD</label><input type="text" id="PROCOD" name="PROCOD" value="{$registro.PROCOD}"><br>
              <label for="PRODES">PRODES</label><input type="text" id="PRODES" name="PRODES" value="{$registro.PRODES}"><br>
              <label for="PROVVA">PROVVA</label><input type="text" id="PROVVA" name="PROVVA" value="{$registro.PROVVA}"><br>
              <label for="PROUND">PROUND</label><input type="text" id="PROUND" name="PROUND" value="{$registro.PROUND}"><br>
              <label for="PROQTD">PROQTD</label><input type="text" id="PROQTD" name="PROQTD" value="{$registro.PROQTD}"><br>
              <label for="PROQTM">PROQTM</label><input type="text" id="PROQTM" name="PROQTM" value="{$registro.PROQTM}"><br>
              <label for="PROCUS">PROCUS</label><input type="text" id="PROCUS" name="PROCUS" value="{$registro.PROCUS}"><br>
              <label for="PROMAR">PROMAR</label><input type="text" id="PROMAR" name="PROMAR" value="{$registro.PROMAR}"><br>
              <label for="DEPCOD">DEPCOD</label><input type="text" id="DEPCOD" name="DEPCOD" value="{$registro.DEPCOD}"><br>
              <label for="PROBAR">PROBAR</label><input type="text" id="PROBAR" name="PROBAR" value="{$registro.PROBAR}"><br>
              <label for="MARCOD">MARCOD</label><input type="text" id="MARCOD" name="MARCOD" value="{$registro.MARCOD}"><br>
              <label for="PROQTI">PROQTI</label><input type="text" id="PROQTI" name="PROQTI" value="{$registro.PROQTI}"><br>
              <label for="PROICM">PROICM</label><input type="text" id="PROICM" name="PROICM" value="{$registro.PROICM}"><br>
              <label for="ALICOD">ALICOD</label><input type="text" id="ALICOD" name="ALICOD" value="{$registro.ALICOD}"><br>
              <label for="PRODTU">PRODTU</label><input type="text" id="PRODTU" name="PRODTU" value="{$registro.PRODTU}"><br>
              <label for="PRONEG">PRONEG</label><input type="text" id="PRONEG" name="PRONEG" value="{$registro.PRONEG}"><br>
              <label for="PROVVP">PROVVP</label><input type="text" id="PROVVP" name="PROVVP" value="{$registro.PROVVP}"><br>
              <label for="PEDEQUANTIDADE">PEDEQUANTIDADE</label><input type="text" id="PEDEQUANTIDADE" name="PEDEQUANTIDADE" value="{$registro.PEDEQUANTIDADE}"><br>
              <label for="PROD_COMPOSTO">PROD_COMPOSTO</label><input type="text" id="PROD_COMPOSTO" name="PROD_COMPOSTO" value="{$registro.PROD_COMPOSTO}"><br>
              <label for="PONTOS">PONTOS</label><input type="text" id="PONTOS" name="PONTOS" value="{$registro.PONTOS}"><br>
              <label for="RELACAO1">RELACAO1</label><input type="text" id="RELACAO1" name="RELACAO1" value="{$registro.RELACAO1}"><br>
              <label for="CARNE">CARNE</label><input type="text" id="CARNE" name="CARNE" value="{$registro.CARNE}"><br>
              <label for="RELMIN">RELMIN</label><input type="text" id="RELMIN" name="RELMIN" value="{$registro.RELMIN}"><br>
              <label for="TIPOKIT">TIPOKIT</label><input type="text" id="TIPOKIT" name="TIPOKIT" value="{$registro.TIPOKIT}"><br>
            
    </form>            


    <br>     
    <input type="button" class="btn_padrao" value="Salvar produtos" onclick="btn_salvar_produtos()"/><br/>
    <input type="button" class="btn_padrao" value="Voltar" onclick="btn_inicio_produtos_click()"/><br/>  
    </form>
  </fieldset>
</div>
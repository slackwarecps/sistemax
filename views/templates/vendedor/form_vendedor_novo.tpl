<link href="/files/js/jquery_ui/css/smoothness/jquery-ui.css">
<div id="painel_basico">
  <div class="titulos_paginas" id="parametros">
    <h2>      
      Novo vendedor</h2>
  </div>

  <fieldset>
    <legend>Cadastro de vendedor</legend>  

    <form id="my_cad_form_vendedor" name="my_cad_form_vendedor" 
          action="#" method="POST" enctype="multipart/form-data">      

              <label for="VENCOD">VENCOD</label><input type="text" id="VENCOD" name="VENCOD" value="{$registro.VENCOD}"><br>
              <label for="VENNOM">VENNOM</label><input type="text" id="VENNOM" name="VENNOM" value="{$registro.VENNOM}"><br>
              <label for="SUPCOD">SUPCOD</label><input type="text" id="SUPCOD" name="SUPCOD" value="{$registro.SUPCOD}"><br>
            
    </form>            


    <br>     
    <input type="button" class="btn_padrao" value="Salvar vendedor" onclick="btn_salvar_vendedor()"/><br/>
    <input type="button" class="btn_padrao" value="Voltar" onclick="btn_inicio_vendedor_click()"/><br/>  
    </form>
  </fieldset>
</div>
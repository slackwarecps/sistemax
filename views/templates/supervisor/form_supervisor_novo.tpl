<link href="/files/js/jquery_ui/css/smoothness/jquery-ui.css">
<div id="painel_basico">
  <div class="titulos_paginas" id="parametros">
    <h2>      
      Novo supervisor</h2>
  </div>

  <fieldset>
    <legend>Cadastro de supervisor</legend>  

    <form id="my_cad_form_supervisor" name="my_cad_form_supervisor" 
          action="#" method="POST" enctype="multipart/form-data">      

              <label for="SUPCOD">SUPCOD</label><input type="text" id="SUPCOD" name="SUPCOD" value="{$registro.SUPCOD}"><br>
              <label for="SUPNOM">SUPNOM</label><input type="text" id="SUPNOM" name="SUPNOM" value="{$registro.SUPNOM}"><br>
            
    </form>            


    <br>     
    <input type="button" class="btn_padrao" value="Salvar supervisor" onclick="btn_salvar_supervisor()"/><br/>
    <input type="button" class="btn_padrao" value="Voltar" onclick="btn_inicio_supervisor_click()"/><br/>  
    </form>
  </fieldset>
</div>
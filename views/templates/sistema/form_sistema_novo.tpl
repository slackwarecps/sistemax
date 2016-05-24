<link href="/files/js/jquery_ui/css/smoothness/jquery-ui.css">
<div id="painel_basico">
  <div class="titulos_paginas" id="parametros">
    <h2>      
      Novo sistema</h2>
  </div>

  <fieldset>
    <legend>Cadastro de sistema</legend>  

    <form id="my_cad_form_sistema" name="my_cad_form_sistema" 
          action="#" method="POST" enctype="multipart/form-data">      

              <label for="id_sistema">id_sistema</label><input type="text" id="id_sistema" name="id_sistema" value="{$registro.id_sistema}"><br>
              <label for="descricao">descricao</label><input type="text" id="descricao" name="descricao" value="{$registro.descricao}"><br>
            
    </form>            


    <br>     
    <input type="button" class="btn_padrao" value="Salvar sistema" onclick="btn_salvar_sistema()"/><br/>
    <input type="button" class="btn_padrao" value="Voltar" onclick="btn_inicio_sistema_click()"/><br/>  
    </form>
  </fieldset>
</div>
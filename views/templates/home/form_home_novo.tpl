<link href="/files/js/jquery_ui/css/smoothness/jquery-ui.css">
<div id="painel_basico">
  <div class="titulos_paginas" id="parametros">
    <h2>      
      Novo home</h2>
  </div>

  <fieldset>
    <legend>Cadastro de home</legend>  

    <form id="my_cad_form_home" name="my_cad_form_home" 
          action="#" method="POST" enctype="multipart/form-data">      

              <label for="id_departamento">id_departamento</label><input type="text" id="id_departamento" name="id_departamento" value="{$registro.id_departamento}"><br>
              <label for="id_sistema">id_sistema</label><input type="text" id="id_sistema" name="id_sistema" value="{$registro.id_sistema}"><br>
              <label for="codigo">codigo</label><input type="text" id="codigo" name="codigo" value="{$registro.codigo}"><br>
              <label for="descricao">descricao</label><input type="text" id="descricao" name="descricao" value="{$registro.descricao}"><br>
            
    </form>            


    <br>     
    <input type="button" class="btn_padrao" value="Salvar home" onclick="btn_salvar_home()"/><br/>
    <input type="button" class="btn_padrao" value="Voltar" onclick="btn_inicio_home_click()"/><br/>  
    </form>
  </fieldset>
</div>
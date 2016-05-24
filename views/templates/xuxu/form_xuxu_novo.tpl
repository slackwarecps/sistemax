<link href="/files/js/jquery_ui/css/smoothness/jquery-ui.css">
<div id="painel_basico">
  <div class="titulos_paginas" id="parametros">
    <h2>      
      Novo xuxu</h2>
  </div>

  <fieldset>
    <legend>Cadastro de xuxu</legend>  

    <form id="my_cad_form_xuxu" name="my_cad_form_xuxu" 
          action="#" method="POST" enctype="multipart/form-data">      

              <div class="form-group">  
        <label for="id_usuario" class="col-lg-2 control-label">id_usuario</label>
        <div class="col-lg-10">
            <input class="form-control" type="text" id="id_usuario" name="id_usuario" value="{$registro.id_usuario}">
        </div>
        
        </div>        
              <div class="form-group">  
        <label for="nome" class="col-lg-2 control-label">nome</label>
        <div class="col-lg-10">
            <input class="form-control" type="text" id="nome" name="nome" value="{$registro.nome}">
        </div>
        
        </div>        
              <div class="form-group">  
        <label for="email" class="col-lg-2 control-label">email</label>
        <div class="col-lg-10">
            <input class="form-control" type="text" id="email" name="email" value="{$registro.email}">
        </div>
        
        </div>        
              <div class="form-group">  
        <label for="sistema" class="col-lg-2 control-label">sistema</label>
        <div class="col-lg-10">
            <input class="form-control" type="text" id="sistema" name="sistema" value="{$registro.sistema}">
        </div>
        
        </div>        
              <div class="form-group">  
        <label for="status" class="col-lg-2 control-label">status</label>
        <div class="col-lg-10">
            <input class="form-control" type="text" id="status" name="status" value="{$registro.status}">
        </div>
        
        </div>        
              <div class="form-group">  
        <label for="senha" class="col-lg-2 control-label">senha</label>
        <div class="col-lg-10">
            <input class="form-control" type="text" id="senha" name="senha" value="{$registro.senha}">
        </div>
        
        </div>        
            
    </form>            


    <br>     
    <input type="button" class="btn_padrao" value="Salvar xuxu" onclick="btn_salvar_xuxu()"/><br/>
    <input type="button" class="btn_padrao" value="Voltar" onclick="btn_inicio_xuxu_click()"/><br/>  
    </form>
  </fieldset>
</div>
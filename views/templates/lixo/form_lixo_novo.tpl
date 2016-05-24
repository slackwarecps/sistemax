<!DOCTYPE html>
<html lang="pt-br">
  {$head}
  <body>
     {$header}
    <div class="container">
      <!--          inicio do Conteudo-->   

  <fieldset>
    <legend>Cadastro de lixo</legend>  

    <form id="my_cad_form_lixo" name="my_cad_form_lixo" 
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
    <input type="button" class="btn_padrao" value="Salvar lixo" onclick="btn_salvar_lixo()"/><br/>
    <input type="button" class="btn_padrao" value="Voltar" onclick="btn_inicio_lixo_click()"/><br/>  
    </form>
  </fieldset>
   <!--          Fim do Conteudo-->
    </div><!-- /.container -->      
  </body>
</html>
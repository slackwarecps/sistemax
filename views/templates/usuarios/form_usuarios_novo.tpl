<!DOCTYPE html>
<html lang="pt-br">
  {$head}
  <body>
    {$header}
    <div class="container">      


      <!--          inicio do Conteudo-->   


      <fieldset>
        <legend>Cadastro de usuarios</legend>  

        <form id="my_cad_form_usuarios" name="my_cad_form_usuarios" 
              action="#" method="POST" enctype="multipart/form-data">      
          <input  type="hidden" id="id_usuario" name="id_usuario" value="{$registro.id_usuario}">
          <div class="form-group">  
            <label class="col-lg-2 control-label">Código </label>
            <label class="col-lg-10 control-label">{$registro.id_usuario}</label>            
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
              {html_options name=sistema id=sistema options=$lista_sistemas selected=$registro.sistema class="form-control"}              
            </div>

          </div>        
          <div class="form-group">  
            <label for="status" class="col-lg-2 control-label">status</label>
            <div class="col-lg-10">              
              {html_options id=status name=status options=$lista_status selected=$registro.status class="form-control"}              
            </div>

          </div>        
          <div class="form-group">  
            <label for="senha" class="col-lg-2 control-label">senha</label>
            <div class="col-lg-10">
              <input type="hidden" id="senha_orig" name="senha_orig" value="{$registro.senha}">
              <input class="form-control" type="password" id="senha" name="senha" value="{$registro.senha}">
            </div>
          </div>       
          <div class="form-group">  
            <label for="senha_confirm" class="col-lg-2 control-label">Confirmação da Senha</label>
            <div class="col-lg-10">              
              <input class="form-control" type="password" id="senha_confirm" name="senha_confirm" value="{$registro.senha}">
            </div>
          </div>             

        </form>            


        <div class="row">    
          <input type="button" class="btn btn-default" value="Salvar usuarios" onclick="btn_salvar_usuarios()"/><br/>
          <input type="button" class="btn btn-default" value="Voltar" onclick="btn_inicio_usuarios_click()"/><br/>          
        </div>
      </fieldset>
      <!--          Fim do Conteudo-->
    </div><!-- /.container -->      
  </body>
</html>
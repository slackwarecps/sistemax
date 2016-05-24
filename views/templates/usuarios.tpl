<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  {$head}
  <body id="page5">
    <div id="main">
      <!-- header -->
      <div id="header_sistema">
        {$menu_sistema}        
      </div>  
      <div id="content">
        <div class="indent1">
          <h2>Cadastro de usuarios</h2>                    
          <p>Selecione um usuário para alterar ou crie um novo.                    
          </p>

          {include file='usuarios/grid_usuarios.tpl' lista_usuarios=$lista_usuarios}      

          <div class="fleft">
            <button><a href="/usuarios/add">Novo usuario</a></button>
          </div>
        </div>
      </div>  
      {$rodape} 
    </div>
  </body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  {$head}
  <body id="page5">
    <div id="main">
      <!-- header -->
      <div id="header_sistema">
        {$menu_sistema}        
      </div>  
      
<!--          inicio do Conteudo-->      
      
      <div id="content">
        <div class="indent1">
          <h2>Cadastro de usuarios</h2>                    
          <p>Selecione um usuário para alterar ou crie um novo.                    
          </p>

          {include file='orcamento/grid_orcamento.tpl' lista_usuarios=$lista_orcamento}      

          <div class="fleft">
            <button><a href="/orcamento/add">Novo usuario</a></button>
          </div>
          <br/>
          <br/>
          <br/>
        </div>
      </div>  
          
<!--          Fim do Conteudo-->
          
      {$rodape} 
    </div>
  </body>
</html>
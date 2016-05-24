<!DOCTYPE html>
<html lang="pt-br">
  {literal}{$head}{/literal}
  <body>
    {literal}{$header}{/literal}
    <div class="container">
      <!--          inicio do Conteudo-->    
      <div class="starter-template">
        <h1>Titulo</h1>  
        <fieldset class="form-inline">
          <legend>Buscar</legend>

          <div class="form-group col-6">
            <label class="sr-only" for="{$entidade}_busca_texto">Texto:</label>    
            <input type="text" name="{$entidade}_busca_texto" id="{$entidade}_busca_texto" class="form-control"   placeholder="Escreva algo para a busca"/>

          </div>          


          <input type="button" class="btn btn-default" value="buscar" 
             id="btn_{$entidade}_buscar" 
             name="btn_{$entidade}_buscar"
             onclick="busca_{$entidade}()"/>

        </fieldset>      
    
  
  <div class="alinha_esquerda">
    <br> 
    <a href='/{$smarty.const.TOOL_SUBPASTA_SISTEMA}/{$entidade}/novo_{$entidade}'  class="btn btn-default">Novo {$entidade}</a>
  </div>
  <br>
  
        <table name="lista_retorno" class="table-hover table-bordered table-striped">
          <thead>
            <tr>
              <th>cod</th>
              <th>nome</th>
              <th>Ação</th>
            </tr>
          </thead>      
          <tbody>
        {literal}{{/literal}include file="{$entidade}/grid_{$entidade}.tpl" {$entidade}_lista=${$entidade}_lista{literal}}{/literal}
      </tbody>      
        </table>   
      </div>
      <!--          Fim do Conteudo-->
    </div><!-- /.container -->      
  </body>
</html>
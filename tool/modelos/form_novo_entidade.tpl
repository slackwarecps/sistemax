<!DOCTYPE html>
<html lang="pt-br">
  {literal}{$head}{/literal}
  <body>
    {literal} {$header}{/literal}
    <div class="container">
      <!--          inicio do Conteudo-->   

  <fieldset>
    <legend>Cadastro de {$entidade}</legend>  

    <form id="my_cad_form_{$entidade}" name="my_cad_form_{$entidade}" 
          action="#" method="POST" enctype="multipart/form-data">      

      <!--
      {literal}{if $registro.id_usuario}type="hidden"{else}type="text"{/if}{literal}
       <label>{$registro.id_usuario}</label>
      -->
      {foreach from=$lista_campos item="data"}
        <div class="form-group">  
        <label for="{$data}" class="col-lg-2 control-label">{$data}</label>
        <div class="col-lg-10">
            <input class="form-control" type="text" id="{$data}" name="{$data}" value="{literal}{$registro.{/literal}{$data}{literal}}{/literal}">
        </div>
        
        </div>        
      {foreachelse}    
        <input type="text" name="ok" value="" />
      {/foreach}      
    </form>            


    <br>     
    <input type="button" class="btn btn-default" value="Salvar {$entidade}" onclick="btn_salvar_{$entidade}()"/><br/>
    <input type="button" class="btn btn-default" value="Voltar" onclick="btn_inicio_{$entidade}_click()"/><br/>  
    </form>
  </fieldset>
   <!--          Fim do Conteudo-->
    </div><!-- /.container -->      
  </body>
</html>
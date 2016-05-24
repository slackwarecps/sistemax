{foreach from=$lixo_lista item="data"}
  <tr id="line_{$data.id_usuario}">
    <td>{$data.id_usuario }</td>
    <td> Configure o nome que irá aparecer aqui</td>    
    <td>
      <a href="" class="btn btn-default glyphicon glyphicon-pencil" onclick="link_edita_lixo({$data.id_usuario})">Editar</a>            
      <a href="" class="btn btn-default glyphicon glyphicon-trash" onclick="link_exclui_lixo({$data.id_usuario})">Excluir</a>
    </td>
  </tr>   
  {foreachelse}    
  <tr>
    <td></td>
     <td>Não foram encontrados Resultados</td>
    <td></td>
  </tr>
{/foreach}  



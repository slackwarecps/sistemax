{foreach from=$usuarios_lista item="data"}
  <tr id="line_{$data.id_usuario}">
    <td>{$data.id_usuario }</td>
    <td>{$data.nome}</td>    
    <td>
      <a href="#" class="btn btn-default glyphicon glyphicon-pencil" onclick="link_edita_usuarios({$data.id_usuario})">Editar</a>            
      <a href="#" class="btn btn-default glyphicon glyphicon-trash" onclick="link_exclui_usuarios({$data.id_usuario})">Excluir</a>
    </td>
  </tr>   
  {foreachelse}    
  <tr>
    <td></td>
     <td>Não foram encontrados Resultados</td>
    <td></td>
  </tr>
{/foreach}  



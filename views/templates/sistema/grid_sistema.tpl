{foreach from=$sistema_lista item="data"}
  <tr id="line_{$data.id_sistema}">
    <td>{$data.id_sistema }</td>
    <td>{$data.descricao }</td>    
    <td>
      <span class="link_falso" onclick="link_edita_sistema({$data.id_sistema})">
        <img src="/files/images/cad_edit.png" title="Alterar" alt="Alterar" height="40px">
      </span> 
      
      
      <span class="link_falso" onclick="link_exclui_sistema({$data.id_sistema})">
        <img src="/files/images/cad_exclui.png" title="Alterar" alt="Alterar" height="40px">
      </span> 

    </td>
  </tr>   
  {foreachelse}    
  <tr>
    <td></td>
    <td>Faça uma busca</td>
    <td></td>
  </tr>
{/foreach}  


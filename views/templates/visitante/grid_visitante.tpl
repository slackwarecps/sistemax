{foreach from=$visitante_lista item="data"}
  <tr id="line_{$data.por_vis_id}">
    <td>{$data.por_vis_id }</td>
    <td> Configure o nome que irá aparecer aqui</td>    
    <td>
      <span class="link_falso" onclick="link_edita_visitante({$data.por_vis_id})">
        <img src="/files/images/cad_edit.png" title="Alterar" alt="Alterar" height="40px">
      </span> 
      
      
      <span class="link_falso" onclick="link_exclui_visitante({$data.por_vis_id})">
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


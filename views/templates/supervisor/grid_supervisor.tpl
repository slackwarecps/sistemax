{foreach from=$supervisor_lista item="data"}
  <tr id="line_{$data.SUPCOD}">
    <td>{$data.SUPCOD}</td>
    <td>{$data.SUPNOM}</td>    
    <td>
      <span class="link_falso" onclick="link_edita_supervisor({$data.SUPCOD})">
        <img src="/files/images/cad_edit.png" title="Alterar" alt="Alterar" height="40px">
      </span> 
      
      
      <span class="link_falso" onclick="link_exclui_supervisor({$data.SUPCOD})">
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


{foreach from=$vendedor_lista item="data"}
  <tr id="line_{$data.VENCOD}">
    <td>{$data.VENCOD }</td>
    <td>{$data.VENNOM }</td>    
    <td>
      <span class="link_falso" onclick="link_edita_vendedor({$data.VENCOD})">
        <img src="/files/images/cad_edit.png" title="Alterar" alt="Alterar" height="40px">
      </span> 
      
      
      <span class="link_falso" onclick="link_exclui_vendedor({$data.VENCOD})">
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


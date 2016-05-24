{foreach from=$cliente_lista item="data"}
  <tr id="line_{$data.CLICOD}">
    <td>{$data.CLICOD }</td>
    <td>{$data.CLINOM }</td>    
    <td>
      <span class="link_falso" onclick="link_edita_cliente({$data.CLICOD})">
        <img src="/files/images/cad_edit.png" title="Alterar" alt="Alterar" height="40px">
      </span> 
      
      
      <span class="link_falso" onclick="link_exclui_cliente({$data.CLICOD})">
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


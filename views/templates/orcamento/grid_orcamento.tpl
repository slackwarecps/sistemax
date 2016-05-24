{foreach from=$orcamento_lista item="data"}
  <tr id="line_{$data.ID_ORC}">
    <td>{$data.ID_ORC }</td>
    <td> Configure o nome que irá aparecer aqui</td>    
    <td>
      <span class="link_falso" onclick="link_edita_orcamento({$data.ID_ORC})">
        <img src="/files/images/cad_edit.png" title="Alterar" alt="Alterar" height="40px">
      </span> 
      
      
      <span class="link_falso" onclick="link_exclui_orcamento({$data.ID_ORC})">
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


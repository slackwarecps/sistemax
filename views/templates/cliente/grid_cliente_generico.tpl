{foreach from=$cliente_lista item="data"}
  <tr id="{$data.CLICOD}" xnome="{$data.CLINOM}" >
    <td>{$data.CLICOD }</td>
    <td>{$data.CLINOM }</td>    
  </tr>   
  {foreachelse}    
  <tr>    
    <td colspan="2">Faça uma busca</td>    
  </tr>
{/foreach}  


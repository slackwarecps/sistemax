{foreach from=$departamento_lista item="data"}
  <tr id="line_{$data.DEPCOD}">
    <td>{$data.DEPCOD }</td>
    <td> {$data.DEPNOM }</td>    
    <td>
<a href="/departamento/novo_departamento/DEPCOD/{$data.DEPCOD}" class="btn btn-primary">Alterar</a>
      
      
<a href="/departamento/deldepartamento/DEPCOD/{$data.DEPCOD}" class="btn btn-warning">Excluir</a>           

    </td>
  </tr>   
  {foreachelse}    
  <tr>
    <td></td>
    <td>Faça uma busca</td>
    <td></td>
  </tr>
{/foreach}  


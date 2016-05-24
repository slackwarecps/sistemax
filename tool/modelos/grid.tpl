{literal}{foreach from=${/literal}{$entidade}_lista item="data"}
  <tr id="line_{literal}{${/literal}data.{$nome_campo_chave}{literal}}{/literal}">
    <td>{literal}{${/literal}data.{$nome_campo_chave} {literal}}{/literal}</td>
    <td> Configure o nome que irá aparecer aqui</td>    
    <td>
      <a href="#" class="btn btn-default glyphicon glyphicon-pencil" onclick="link_edita_{$entidade}({literal}{${/literal}data.{$nome_campo_chave}{literal}}{/literal})">Editar</a>            
      <a href="#" class="btn btn-default glyphicon glyphicon-trash" onclick="link_exclui_{$entidade}({literal}{${/literal}data.{$nome_campo_chave}{literal}}{/literal})">Excluir</a>
    </td>
  </tr>   
  {literal}{foreachelse}{/literal}    
  <tr>
    <td></td>
     <td>Não foram encontrados Resultados</td>
    <td></td>
  </tr>
{literal}{/foreach}{/literal}  



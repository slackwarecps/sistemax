    {foreach from=$lista_campos item="data"}
    $dados[0]['{$data}']=NULL;
    {foreachelse}    
    $dados[0]['CAMPO-VAI-AQUI']=NULL;
    {/foreach}
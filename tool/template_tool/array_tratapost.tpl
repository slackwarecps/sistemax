    {foreach from=$lista_campos item="data"}
    $data['{$data}'] = isset($post['{$data}'])? $post['{$data}'] : NULL;
    {foreachelse}    
    $data['CAMPO-VAI-AQUI'] = isset($post['CAMPO-VAI-AQUI']) ? $post['CAMPO-VAI-AQUI'] : NULL;
    {/foreach}
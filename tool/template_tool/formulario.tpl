<form id="my_cad_form_foo" name="my_cad_form_{$entidade}">
{foreach from=$lista_campos item="data"}
<label for="{$data}">{$data}</label><input id="{$data}" name="{$data}" value="{literal}{$registro.{/literal}{$data}{literal}}{/literal}"><br>
{foreachelse}    
  <input type="text" name="ok" value="" />
{/foreach}
<button id="btn_salvar1" name="btn_salvar1" onclick="btn_salvar1click()">Salva FOO</button>
</form>
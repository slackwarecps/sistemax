$(document).ready(function() {		      
// alert('ready');
});

function busca_{$entidade}(){  
  $("#lista_retorno tbody").html("<tr><td colspan='3'><img src='/files/images/loading.gif' class='loading_pequeno'>Buscando...</td></tr>");

  var myurl='/{$entidade}/busca_{$entidade}';
  $.ajax({
    type: "POST",
    url:myurl,
    data: {
      emp_id: $("#busca_empresa").val(), 
      texto: $("#{$entidade}_busca_texto").val()
    }
  }).done(function( msg ) {    
    $("#lista_retorno tbody").html(msg);
    
  });  
}

//Edicao da Entidade  pelo ID
function link_edita_{$entidade}(id){
  var campo_chave = '{$nome_campo_chave}';
  var url= "/{$smarty.const.TOOL_SUBPASTA_SISTEMA}/{$entidade}/novo_{$entidade}/"+campo_chave+'/'+id;
  window.location = url;  
}

//Exclusao de Empresa pelo ID
function link_exclui_{$entidade}(id){
  var url = '/{$entidade}/del{$entidade}/{$nome_campo_chave}/'+id;

  var n = noty({
    text: 'Deseja excluir esse registro?',
    type: 'alert',
    dismissQueue: true,
    layout: 'center',
    template: '<div class="noty_message"><span class="noty_text"></span><div class="noty_close"></div></div>',
    theme: 'defaultTheme',
    modal: true,
    buttons: [
    {
      addClass: 'btn_padrao', 
      text: 'Sim', 
      onClick: function($noty) {            
        $.get(url,function(){
          $('#line_'+id).hide(500);  
        });
        $noty.close(); 
        noty({
          dismissQueue: true,
          timeout: 500, 
          force: true, 
          layout: 'center', 
          theme: 'defaultTheme', 
          text: 'Registro excluído', 
          type: 'success'
        });
      }
    },
    {
      addClass: 'btn_padrao', 
      text: 'Não', 
      onClick: function($noty) {
        $noty.close();           
      }
    }
    ]
  });
}

//Adiciona novo Colaborador
function btn_novo_{$entidade}_click(){
  //alert('opa');
  $('.painel_basico').hide(200).load('/{$entidade}/novo_{$entidade}',function(){
    //liga comps apos carregar tela
    
  }).show(200);
  
}


//Salvar Click Button
function btn_salvar_{$entidade}(){
  url='/{$entidade}/gravar_{$entidade}';
  if(formValidator()){	
    $.post(url, $('#my_cad_form_{$entidade}').serialize(), function(dataReturn) {
      if(dataReturn.length > 1){
        showMessage(dataReturn);
        dataReturn = '';
        return false;
      }else{
        showMessage('<br />' + '{$entidade} Gravado!', 10000, 'success');
        $(".painel_basico").load("/{$entidade}");//Volta para Busca    
      }
    });
  }	
}

//Funcao do botao Voltar , Volta para a primeira tela
function btn_inicio_{$entidade}_click(){
  window.history.back();
  //$(".painel_basico").load("{$entidade}");//Volta para Busca  
}


function formValidator(){
  var stats = true;
  var errorText = '';
  
  
/*
  if($('#nome').val() == ''){
    errorText += '- '+ 'Insira o nome <br />';
    stats = false;
  }
  if($('#sobrenome').val() == ''){
    errorText += '- '+ 'Insira o Sobrenome <br />';
    stats = false;
  }  

  if($('#emp_car_id').val() == ''){
    errorText += '- '+ 'Selecione o Cargo<br />';
    stats = false;
  }
  if($('#senha').val() == ''){
    errorText += '- '+ 'Insira a senha <br />';
    stats = false;
  }     
    
  if($('#col_sta_id').val() == ''){
    errorText += '- '+ 'Insira o status <br />';
    stats = false;
  }    
  
 
  if($('#email_corporativo').val() == ''){
    errorText += '- '+ 'Insira o email corporativo <br />';
    stats = false;
  }   
  if($('#data_nascimento').val() == ''){
    errorText += '- '+ 'Insira a data de nascimento <br/>';
    stats = false;
  }     
  
  if($('#ramal').val() == ''){
    errorText += '- '+ 'Insira o Ramal <br/>';
    stats = false;
  }     
    
  if (errorText){
    showMessage(errorText);
  }
  */
  
  return stats;
}
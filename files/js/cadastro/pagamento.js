$(document).ready(function() {
  $("#cartaoNumero").numeric();
  $("#cartaoCodigoSeguranca").numeric();
});

function confirmar_pagamento(){
  if(formValidator()){
    $('#mensagem').html('Processando... Aguarde.');
    $.ajax({
      type: "POST",
      data: $('#form_pagamento').serialize(),
      url: '/pagamento',
      dataType: 'Json',
      success: function (dataReturn){
        $('#mensagem').html(dataReturn.text);
        if(dataReturn.type=='error'){
          $('#cartaoNumero').val('');
          $('#cartaoCodigoSeguranca').val('');
        }
        showNotificacao(dataReturn.text, dataReturn.timeout, dataReturn.layout, dataReturn.type, dataReturn.redirect);        
      }
    });
  }
}


function formValidator(){
  var errorText = '';
  var timeout = 0;
  
  if($('#radio3:checked').length==1){
    if($('#cartaoNumero').val().length != 14){
      errorText += '- Cartão inválido <br />';
      timeout += 1000;
    }
  }else{
    if($('#cartaoNumero').val().length != 16){
      errorText += '- Cartão inválido <br />';
      timeout += 1000;
    }
  }
 
  if($('#cartaoCodigoSeguranca').val() == '' || $('#cartaoCodigoSeguranca').val().length < 3){
    errorText += '- Código de segurança inválido! <br />';
    timeout += 1000;  
  }
  
  if (errorText){
    showNotificacao(errorText, timeout, 'center', 'error', null);  
    return false;
  }else{
    return true;
  }
  
  
}
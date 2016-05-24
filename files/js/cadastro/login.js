function acessar(){
  if(valida_form()){
    $.ajax({
      type: "POST",
      url: '/cadastro/logar',
      data: $('#form_login').serialize(),
      dataType: "JSON",
      success: function (dataReturn){
        showNotificacao(dataReturn.text, dataReturn.timeout, dataReturn.layout, dataReturn.type, dataReturn.redirect);        
      }
    });
  }
}

function clear_fields(){
  $('.class_error').each(function () {
    $(this).removeClass('class_error');
  });
}

function valida_form(){
  clear_fields();
  var status = true;
  var text = "";
  var timeout = 0;
  
  if($('#email').val()==""){
    $('#email').addClass('class_error');
    text += "Insira seu e-mail de acesso <br/>";
    status = false;
    timeout += 1000;
  }
  
  if($('#senha').val()==""){
    $('#senha').addClass('class_error');
    text += "Insira sua senha de acesso <br/>";
    status = false;
    timeout += 1000;
  }
  
  if(status==false){
    showNotificacao(text, timeout, "center", "error", null);
  }
  
  return status;
  
}
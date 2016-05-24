$(document).ready(function(){
  $('#cep').mask('99999-999');
  $("#cnpj").mask("99.999.999/9999-99");
  
  $('#telefone').focusout(function(){
    var phone, element;
    element = $(this);
    element.unmask();
    phone = element.val().replace(/\D/g, '');
    if(phone.length > 10) {
      element.mask("(99) 99999-999?9");
    } else {
      element.mask("(99) 9999-9999?9");
    }
  }).trigger('focusout');
  
  if($('#num_func').val()!=''){
    $('#num_funcionarios option').each(function(){
      if($(this).val() == $('#num_func').val()){
        $(this).attr('selected',true);
      }
    });
  }
  
});

function load_cidades(){
  var est_id = $('#estado').val();
  $.ajax({
    type: "GET",
    url: '/cadastro/cidades_ajax/est_id/'+est_id,
    success: function (dataReturn){
      $('#cidade_ajax').html(dataReturn);
    }
  });
}


function salvar_dados(){
  if(valida_form()){
    var url = $('#action').val();
    $.ajax({
      type: "POST",
      url: url,
      data: $('#form_cadastro').serialize(),
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
  
  if($('#razao_social').val()==""){
    $('#razao_social').addClass('class_error');
    text += "Insira a razão social da empresa <br/>";
    status = false;
    timeout += 1000;
  }
  
  if($('#segmento').val()==""){
    $('#segmento').addClass('class_error');
    text += "Insira ao segmento da empresa <br/>";
    status = false;
    timeout += 1000;
  }
  
  if($('#telefone').val()==""){
    $('#telefone').addClass('class_error');
    text += "Insira ao telefone de contato da empresa <br/>";
    status = false;
    timeout += 1000;
  }
  
  if($('#num_funcionarios').val()==""){
    $('#num_funcionarios').addClass('class_error');
    text += "Selecione o número de funcionários da empresa <br/>";
    status = false;
    timeout += 1000;
  }
  
  if($('#cnpj').val()==""){
    $('#cnpj').addClass('class_error');
    text += "Insira o CNPJ da empresa <br/>";
    status = false;
    timeout += 1000;
  }
  
  if($('#endereco').val()==""){
    $('#endereco').addClass('class_error');
    text += "Insira o endereço completo da empresa <br/>";
    status = false;
    timeout += 1000;
  }
  
  if($('#numero').val()==""){
    $('#numero').addClass('class_error');
    text += "Insira o número da empresa <br/>";
    status = false;
    timeout += 1000;
  }
  
  if($('#bairro').val()==""){
    $('#bairro').addClass('class_error');
    text += "Insira o bairro da empresa <br/>";
    status = false;
    timeout += 1000;
  }
  
  if($('#cep').val()==""){
    $('#cep').addClass('class_error');
    text += "Insira seu cep <br/>";
    status = false;
    timeout += 1000;
  }else if($('#cep').val().length != 9 ){
    $('#cep').addClass('class_error');
    text += "CEP inválido <br/>";
    status = false;
    timeout += 1000;
  }
  
  if($('#estado').val()==""){
    $('#estado').addClass('class_error');
    text += "Selecione o estado da empresa <br/>";
    status = false;
    timeout += 1000;
  }
  
  if($('#cidade').val()==""){
    $('#cidade').addClass('class_error');
    text += "Selecione a cidade da empresa <br/>";
    status = false;
    timeout += 1000;
  }
  
  if($('#nome').val()==""){
    $('#nome').addClass('class_error');
    text += "Insira o nome do responsável pela empresa <br/>";
    status = false;
    timeout += 1000;
  }
  
  if($('#cargo').val()==""){
    $('#cargo').addClass('class_error');
    text += "Insira o cargo do responsável pela empresa <br/>";
    status = false;
    timeout += 1000;
  }
  
  if($('#email').val()==""){
    $('#email').addClass('class_error');
    text += "Insira o e-mail <br/>";
    status = false;
    timeout += 1000;
  }else if(!validateEmail($('#email').val())){
    $('#email').addClass('class_error');
    text += "E-mail inválido <br/>";
    status = false;
    timeout += 1000;
  }
  
  if($('#cli_id').val()==''){
    if($('#senha').val()==""){
      $('#senha').addClass('class_error');
      text += "Insira a senha de acesso <br/>";
      status = false;
      timeout += 1000;
    }else if($('#senha').val() != $('#senha2').val()){
      $('#senha').addClass('class_error');
      $('#senha2').addClass('class_error');
      text += "As senhas devem ser idênticas <br/>";
      status = false;
      timeout += 1000;
    }
  }else{
    if($('#senha').val() != $('#senha2').val()){
      $('#senha').addClass('class_error');
      $('#senha2').addClass('class_error');
      text += "As senhas devem ser idênticas <br/>";
      status = false;
      timeout += 1000;
    }
  }
  
  if(status==false){
    showNotificacao(text, timeout, "center", "error", null);
  }
  
  return status;
}

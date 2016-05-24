$(document).ready(function(){
  if($('#codigo_area #codigo_crypt').val()==''){
    $('#codigo_area').hide();
  }else{
    $('#codigo_area').show();
    $('#buttom_send').hide();
  }
});

function gerar_codigo(){
  if(valida_form()){
    if($('#codigo_area #codigo_crypt').val()==''){
      $.ajax({
        type: "POST",
        url: '/admin/gerar_codigo',
        data: $('#form_codigo').serialize(),
        success: function (dataReturn){
          $('#codigo_area #codigo_crypt').val(dataReturn);
          $('#codigo_area').show();
        }
      });
    }else{
      showNotificacao('Um código já foi gerado para essa transação.', 1000, 'center', 'Information',null);        
    }
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
  
  if($('#prazo').val()==""){
    $('#prazo').addClass('class_error');
    text += "Insira um prazo de validade <br/>";
    status = false;
    timeout += 1000;
  }
  
  if($('#num_usuarios').val()==""){
    $('#num_usuarios').addClass('class_error');
    text += "Insira a quantidade de usuários liberada para uso ao sistema.";
    status = false;
    timeout += 1000;
  }
  
  if(status==false){
    showNotificacao(text, timeout, "center", "error", null);
  }
  
  return status;
}
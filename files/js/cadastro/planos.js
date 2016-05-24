function selecionar_plano(){
  if($('#aceito:checked').length){
    var pla_id = $('#pla_id:checked').val();
    if(pla_id){
      if($('.plano_box_selected').length){
        var text = "Você já possui uma plano selecionado, ao realizar a troca os valores serão alterados na sua próxima fatura. Deseja continuar?";
        showConfirmNotificacao(text, 'center', 'confirmar_plano');
      }
      else
        confirmar_plano();
    }
  }else{
    showNotificacao("Para continuar, você deverá aceitar os termos de uso.", 2000, 'center', 'information', null);        
  }
}

function confirmar_plano(){
  var pla_id = $('#pla_id:checked').val();
  $.ajax({
    type: "GET",
    url: '/cadastro/selecionar_plano/pla_id/'+pla_id,
    dataType: 'Json',
    success: function (dataReturn){
      showNotificacao(dataReturn.text, dataReturn.timeout, dataReturn.layout, dataReturn.type, dataReturn.redirect);        
    }
  });
}
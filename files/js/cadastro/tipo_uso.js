function selecionar(tipo){
  $.ajax({
    type: "GET",
    url: '/cadastro/selecionar_tipo_uso/tipo/'+tipo,
    dataType: 'Json',
    success: function (dataReturn){
      showNotificacao(dataReturn.text, dataReturn.timeout, dataReturn.layout, dataReturn.type, dataReturn.redirect);        
    }
  });
}
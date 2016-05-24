function pagamentos(cli_id){
  
  $.ajax({
    type: "GET",
    url: '/admin/pagamentos/cli_id/'+cli_id,
    success: function (dataReturn){
      openDialog('Pagamentos efetuados', dataReturn, 800, 500);
    }
  });
  
  
}
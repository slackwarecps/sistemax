$(document).ready(function() {
  //alert('ready');



});

function btngeracontrollerClick() {
  //alert('Click');  
  var url = 'cria_controller.php';
//  $.ajax(url, data:{opa: 'opa'}, function() {
//    alert('Done');
//  });


  $.ajax({
    type: "POST",
    url: url,
    data: {entidade: $("#nomeentidade").val()}
  })
          .done(function(msg) {
            //alert("Data Saved: " + msg);
            $("#retorno_div").html('Status: '+msg);
          });



}
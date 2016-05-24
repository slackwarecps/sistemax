$(document).ready(function() {		      
// alert('ready');
});

function busca_usuarios(){  
  $("#lista_retorno tbody").html("<tr><td colspan='3'><img src='/files/images/loading.gif' class='loading_pequeno'>Buscando...</td></tr>");

  var myurl='/usuarios/busca_usuarios';
  $.ajax({
    type: "POST",
    url:myurl,
    data: {
      emp_id: $("#busca_empresa").val(), 
      texto: $("#usuarios_busca_texto").val()
    }
  }).done(function( msg ) {    
    $("#lista_retorno tbody").html(msg);
    
  });  
}

//Edicao De Empresa pelo ID
function link_edita_usuarios(id){
  var campo_chave = 'id_usuario';
  var myurl= "/sistemax/usuarios/novo_usuarios/"+campo_chave+'/'+id; 
  window.location = myurl;    
}

//Exclusao de Empresa pelo ID
function link_exclui_usuarios(id){
  var url = '/usuarios/delusuarios/id_usuario/'+id;

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
function btn_novo_usuarios_click(){
  //alert('opa');
  $('.painel_basico').hide(200).load('/usuarios/novo_usuarios',function(){
    //liga comps apos carregar tela
    
  }).show(200);
  
}


//Salvar Click Button
function btn_salvar_usuarios(){
  url='/sistemax/usuarios/gravar_usuarios';
  var callback='/sistemax/usuarios';
  if(formValidator()){	
    $.post(url, $('#my_cad_form_usuarios').serialize(), function(dataReturn) {
      if(dataReturn.length > 1){
        showMessage(dataReturn);
        dataReturn = '';
        return false;
      }else{
        showMessage('<br />' + 'usuarios Gravado!', 10000, 'success',callback);
        $(".painel_basico").load("/usuarios");//Volta para Busca    
      }
    });
  }	
}

//Funcao do botao Voltar , Volta para a primeira tela
function btn_inicio_usuarios_click(){
  var myurl= "/sistemax/usuarios"; 
  window.location = myurl;  
}


function formValidator(){
  var stats = true;
  var errorText = '';
  
  

  if($('#nome').val() == ''){
    errorText += '- '+ 'Insira o nome <br />';
    stats = false;
  }
  
  if($('#senha').val() == ''){
    errorText += '- '+ 'Insira a senha <br />';
    stats = false;
  }else{
    if($('#senha').val() != $('#senha_confirm').val()){
      errorText += '- '+ 'A senha não confere com a confirmação <br />';
      stats = false;
    }
  }
  
  
  if($('#email').val() == ''){
    errorText += '- '+ 'Insira o email <br />';
    stats = false;
  }  

    
  if (errorText){
    showMessage(errorText);
  }

  
  return stats;
}
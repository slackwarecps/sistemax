$(document).ready(function() {		      
// alert('ready');
});

function busca_xuxu(){  
  $("#lista_retorno tbody").html("<tr><td colspan='3'><img src='/files/images/loading.gif' class='loading_pequeno'>Buscando...</td></tr>");

  var myurl='/xuxu/busca_xuxu';
  $.ajax({
    type: "POST",
    url:myurl,
    data: {
      emp_id: $("#busca_empresa").val(), 
      texto: $("#xuxu_busca_texto").val()
    }
  }).done(function( msg ) {    
    $("#lista_retorno tbody").html(msg);
    
  });  
}

//Edicao De Empresa pelo ID
function link_edita_xuxu(id){
  var campo_chave = 'id_usuario';
  $('.painel_basico').load("xuxu/novo_xuxu/"+campo_chave+'/'+id,function(){
    

  });//Vai para o Cadastro          
}

//Exclusao de Empresa pelo ID
function link_exclui_xuxu(id){
  var url = '/xuxu/delxuxu/id_usuario/'+id;

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
function btn_novo_xuxu_click(){
  //alert('opa');
  $('.painel_basico').hide(200).load('/xuxu/novo_xuxu',function(){
    //liga comps apos carregar tela
    
  }).show(200);
  
}


//Salvar Click Button
function btn_salvar_xuxu(){
  url='/xuxu/gravar_xuxu';
  if(formValidator()){	
    $.post(url, $('#my_cad_form_xuxu').serialize(), function(dataReturn) {
      if(dataReturn.length > 1){
        showMessage(dataReturn);
        dataReturn = '';
        return false;
      }else{
        showMessage('<br />' + 'xuxu Gravado!', 10000, 'success');
        $(".painel_basico").load("/xuxu");//Volta para Busca    
      }
    });
  }	
}

//Funcao do botao Voltar , Volta para a primeira tela
function btn_inicio_xuxu_click(){
  $(".painel_basico").load("xuxu");//Volta para Busca  
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
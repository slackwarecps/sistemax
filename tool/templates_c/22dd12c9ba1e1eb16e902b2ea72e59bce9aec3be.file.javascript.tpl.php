<?php /* Smarty version Smarty-3.1.13, created on 2013-11-28 13:21:56
         compiled from "modelos\javascript.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145952974374a95dc8-82128255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22dd12c9ba1e1eb16e902b2ea72e59bce9aec3be' => 
    array (
      0 => 'modelos\\javascript.tpl',
      1 => 1371877681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145952974374a95dc8-82128255',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'entidade' => 0,
    'nome_campo_chave' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52974374b9f7c0_44805378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52974374b9f7c0_44805378')) {function content_52974374b9f7c0_44805378($_smarty_tpl) {?>$(document).ready(function() {		      
// alert('ready');
});

function busca_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
(){  
  $("#lista_retorno tbody").html("<tr><td colspan='3'><img src='/files/images/loading.gif' class='loading_pequeno'>Buscando...</td></tr>");

  var myurl='/<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
/busca_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
';
  $.ajax({
    type: "POST",
    url:myurl,
    data: {
      emp_id: $("#busca_empresa").val(), 
      texto: $("#<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
_busca_texto").val()
    }
  }).done(function( msg ) {    
    $("#lista_retorno tbody").html(msg);
    
  });  
}

//Edicao De Empresa pelo ID
function link_edita_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
(id){
  var campo_chave = '<?php echo $_smarty_tpl->tpl_vars['nome_campo_chave']->value;?>
';
  $('.painel_basico').load("<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
/novo_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
/"+campo_chave+'/'+id,function(){
    

  });//Vai para o Cadastro          
}

//Exclusao de Empresa pelo ID
function link_exclui_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
(id){
  var url = '/<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
/del<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['nome_campo_chave']->value;?>
/'+id;

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
function btn_novo_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
_click(){
  //alert('opa');
  $('.painel_basico').hide(200).load('/<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
/novo_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
',function(){
    //liga comps apos carregar tela
    
  }).show(200);
  
}


//Salvar Click Button
function btn_salvar_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
(){
  url='/<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
/gravar_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
';
  if(formValidator()){	
    $.post(url, $('#my_cad_form_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
').serialize(), function(dataReturn) {
      if(dataReturn.length > 1){
        showMessage(dataReturn);
        dataReturn = '';
        return false;
      }else{
        showMessage('<br />' + '<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
 Gravado!', 10000, 'success');
        $(".painel_basico").load("/<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
");//Volta para Busca    
      }
    });
  }	
}

//Funcao do botao Voltar , Volta para a primeira tela
function btn_inicio_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
_click(){
  $(".painel_basico").load("<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
");//Volta para Busca  
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
}<?php }} ?>
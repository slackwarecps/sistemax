<?php

class login extends controller {  
    
  public function index_action() {
    $d = new date();
    $this->template->fetchJS('/files/js/login/login.js?'.$d->datePtToEnglish($now, true));
    $this->smarty->display('login.html');    
  }
  
  public function valida(){
    
    $mail = $_REQUEST['email'];
    $pass = $_REQUEST['senha'];
   // print_a($pass);die;
    $user = new usuarioModel();
    //var_dump($_REQUEST)  ;die;
    $registro = $user->getlistausuario("upper(EMAIL)=upper('".$mail."')");    
    if (sizeof($registro)<1)
    {
        $retorno = array('ret'=>0,'msg'=>'nao encontrado');
        echo json_encode($retorno,true);die;
        exit();
    }else{
       // print_a($registro[0]);die;
        if ($registro[0]['senha']==md5($pass)){             
             $_SESSION['empresa']['codigo']=$registro[0]['senha'];//Espeto Campinas
             $_SESSION['user']['codigo']=777;//Espeto Campinas
             $_SESSION['user']['email']=$registro[0]['email'];
             $_SESSION['user']['nome']=$registro[0]['nome'];
             $_SESSION['user']['depto']=-7;//Espeto Campinas
             $_SESSION['user']['funcao']='Webmaster';//Espeto Campinas
             $retorno = array('ret'=>1,'msg'=>'ok');
             echo json_encode($retorno);            
        }else{
             $retorno = array('ret'=>0,'msg'=>'negadis');
             echo json_encode($retorno);             
        }        
    }
  } 
  
  public function logout(){
    session_unset();
    session_destroy();
    $_SESSION = array();   
    $this->smarty->display('login.html');
    exit();
  }    
  
  public function negado(){
    session_unset();
    session_destroy();
    $_SESSION = array();   
    echo ('<script>alert("Acesso Negado!");</script>');
    $this->smarty->display('login.html');
    exit();
  }    
  
}

?>
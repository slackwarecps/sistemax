<?php

/*
 * Classe: usuarios Controller
 *
 */

class usuarios extends controller {
    var $campo_chave = 'id_usuario';
    
  public function index_action() {    
    $this->template->fetchJS('/files/js/usuarios/usuarios.js');
    $this->template->run();

    $model = new usuariosModel();
    $sql = $this->campo_chave ." > 0";
    $usuarios_lista = $model->getlistausuarios($sql);  
    $this->smarty->assign('usuarios_lista', $usuarios_lista);  

    $this->smarty->display('usuarios/form_usuarios_busca.html');
  }

  public function busca_usuarios() {
    $texto = $_REQUEST['texto'];
    
    //var_dump($_REQUEST);die;

    sleep(1); //simula demora
    $model = new usuariosModel();
    //Mude o zero pelo nome do campo a aser buscado....
    $sql = "upper(0) like upper('%" . $texto . "%') and (status<>0)";
    $resultado = $model->getlistausuarios($sql);
    if (sizeof($resultado) > 0) {
      $this->smarty->assign('usuarios_lista', $resultado);
      $tabela_html = $this->smarty->fetch('usuarios/grid_usuarios.tpl');
      echo $tabela_html;
    } else {
      echo '<tr><td colspan="3">A Busca não retornou resultados.</td><tr>';
    }
  }
  
  //Novo Edita Registro
  public function novo_usuarios(){   
    $campo_chave = $this->getParam($this->campo_chave);
    $campo_chave = isset($campo_chave)?$campo_chave:NULL;
    $this->template->fetchJS('/files/js/usuarios/usuarios.js');    
    $this->template->run();
    $model = new usuariosModel();
    $registro = $model->getusuarios($campo_chave);
    if (!is_null($campo_chave)){
      
    }
   // var_dump($registro);die;
    
    $this->smarty->assign('lista_status', array(
                                1 => 'Ativo',
                                0 => 'Inativo')
                                );  
    
    
    $model2 = new sistemaModel();
    $lista = $model2->getlistasistema();
    foreach ($lista as $key => $value) {
      $lista_new[$value['id_sistema']]=$value['descricao'];
    }
    $this->smarty->assign('lista_sistemas', $lista_new);
    
    $this->smarty->assign('registro', $registro[0]);    
    $this->smarty->display('usuarios/form_usuarios_novo.tpl');
  }
  
  
  //Gravar usuarios
  public function gravar_usuarios() {
    $model = new usuariosModel();
    $data = $this->trataPost($_POST);
    if ($data[$this->campo_chave] == NULL)
      $model->setusuarios($data);
    else
      $model->updusuarios($data);
    return;
  }

  private function trataPost($post) {
    //$date = new date();
        $data['id_usuario'] = isset($post['id_usuario'])? $post['id_usuario'] : NULL;
        $data['nome'] = isset($post['nome'])? $post['nome'] : NULL;
        $data['email'] = isset($post['email'])? $post['email'] : NULL;
        $data['sistema'] = isset($post['sistema'])? $post['sistema'] : NULL;
        $data['status'] = isset($post['status'])? $post['status'] : NULL;
        $data['senha'] = isset($post['senha'])? $post['senha'] : NULL;
        
    return $data;
  }  
  
  //Remove
  public function delusuarios() {
    $chave = $this->getParam($this->campo_chave);
    if (!is_null($chave)) {
      $model = new usuariosModel();
      $dados[$this->campo_chave] = $chave;
      $retorno = $model->delusuarios($dados);
      echo $retorno;
    }
  }  
  
}

?>
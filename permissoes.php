<?php

class permissoes {

  public function __construct() {
    
  }

  public function check_login($public_pages) {
    $system = new System();
    if (!isset($_SESSION['user']['col_id']) && !in_array($system->getUrl(), $public_pages)) {
      header('Location:/');
      die;
    }
  }

  public function is_logged() {
    if (isset($_SESSION['user']['col_id']))
      return true;
    else
      return false;
  }

  public function auth() {
    $system = new System();
    $permissao = new permissaoModel();
    $modulos = new moduloModel();
    $arrModulo = $modulos->getmodulo(null, null, $system->_controller);
    if (!isset($arrModulo[0]['mod_id'])) {
      echo "<script>showMessage('permissão negada a esse módulo procure um administrador')</script>";
      die;
      return false;
    } elseif (!$permissao->ChecaPermissao($arrModulo[0]['mod_id'])) {
      echo "<script>showMessage('permissão negada a esse módulo procure um administrador')</script>";
      die;
      return false;
      exit();
    }
    return true;
  }

}

?>

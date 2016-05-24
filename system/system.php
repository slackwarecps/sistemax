<?php

class System {

  private $_url;
  private $_explode;
  private $_model;
  public $_controller;
  public $_action;
  public $_params;
  public $settings = array();

  public function __construct() {
    $this->setUrl();
    $this->setExplode();
    $this->setController();
    $this->setAction();
    $this->setParams();
    
    if(defined('TABLE_SECURITY_PAGES')){
        $this->_model = new model();
        $this->_model->isSecurityPage(TABLE_SECURITY_PAGES);
    }
    $this->settings['title'] = NULL;
    $this->settings['description'] = NULL;
    $this->settings['keywords'] = NULL;
  }

  private function setUrl() {
    $_GET['url'] = (isset($_GET['url']) ? $_GET['url'] : 'index/index_action');
    $this->_url = $_GET['url'];
  }

  private function setExplode() {
    $this->_explode = explode('/', $this->_url);
  }

  private function setController() {
    $this->_controller = $this->_explode[0];
    $_SESSION['currentPage'] = $this->_controller;
  }

  private function setAction() {
    $aux = (!isset($this->_explode[1]) || $this->_explode[1] == NULL || $this->_explode[1] == "index" ? "index_action" : $this->_explode[1]);
    $this->_action = $aux;
  }

  private function setParams() {
    unset($this->_explode[0], $this->_explode[1]);
    if (end($this->_explode) == NULL)
      array_pop($this->_explode);
    $i = 0;

    if (!empty($this->_explode)) {
      foreach ($this->_explode as $value) {
        if ($i % 2 == 0) {
          $indexes[] = $value;
        } else {
          $values[] = $value;
        }
        $i++;
      }
    } else {
      $indexes = array();
      $values = array();
    }

    if (!empty($indexes) && !empty($values) && count($indexes) == count($values)) {
      $this->_params = array_combine($indexes, $values);
    } else {
      $this->_params = false;
    }
  }

  public function getParam($name) {
    if (is_array($this->_params) && array_key_exists($name, $this->_params)) {
      return $this->_params[$name];
    } else {
      return false;
    }
  }

  public function getParams() {
    if (is_array($this->_params)) {
      return $this->_params;
    } else {
      return false;
    }
  }
  
  public function getUrl(){
    return $this->_url;
  }

  public function safeString($string){
      if (get_magic_quotes_gpc()) {
          $string = stripslashes($string);
      }
      $string = str_replace("%", "", $string);
      return addslashes($string);
  }
  
  public function run() {     
    $controller_path = CONTROLLERS . $this->_controller . 'Controller.php';    
    
    if (!file_exists($controller_path)) {
      require_once(CONTROLLERS . 'erroController.php');
      echo '[DIE]System.run=> Nao existe o caminho :'.$controller_path;
      die;
    }
       
    require_once($controller_path);
    $app = new $this->_controller();
	
    if (!method_exists($app, $this->_action)) {
      require_once(CONTROLLERS . 'erroController.php');
      echo '[DIE]System.run=> Nao existe o metodo :'.$this->_action;
      die;
    }        
    $action = $this->_action;
    /*
     * Junta o nome do objeto com o nome do metodo e chama dentro do php.
     */
    $app->$action();    
  }

}

?>
<?php
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_ALL, NULL);
setlocale(LC_ALL, 'pt_BR');
session_start();

define('BARLNX', '/');
define ('SUB_PASTA','sistemax/');//NOME DA PASTA DENTRO DA RAIZ
define ('SUB_PASTA_TEMPLATE','/sistemax');//NOME DA PASTA DENTRO DA RAIZ
define('CONTROLLERS', 'controllers/');

define('VIEWS', 'views/');
define('MODELS', 'models/');
define('TEMPLATE', 'template/');
define('SYSTEM', 'system/');
define('HELPERS', SYSTEM.'helpers/');
define('PATH_ROOT', $_SERVER['DOCUMENT_ROOT'].BARLNX. SUB_PASTA);
define('SMARTYDIR', PATH_ROOT .'views');
define('LIBS', SYSTEM.'libs');
define('HTTP_ROOT', 'http://' . $_SERVER['HTTP_HOST']. SUB_PASTA_TEMPLATE);
define('NOME_SITE', "Fabio Alvaro - Sistema X");
define('BOOTSTRAP_DIST',HTTP_ROOT.'/files/css/bootstrap-3.0.0/dist');
/*
echo 'SUB_PASTA '.SUB_PASTA.'<br/>';
echo 'SUB_PASTA_TEMPLATE '.SUB_PASTA_TEMPLATE.'<br/>';
echo 'SYSTEM '.SYSTEM.'<br/>';
echo 'PATH_ROOT '.PATH_ROOT.'<br/>';
echo 'SMARTYDIR '.SMARTYDIR.'<br/>';
echo 'LIBS '.LIBS.'<br/>';
echo 'HTTP_ROOT '.HTTP_ROOT.'<br/>';
ECHO 'BOOTSTRAP_DIST '.BOOTSTRAP_DIST.'<BR/>';
echo '<pre>';
var_dump($_SERVER);
echo '</pre>';
*/
require_once('config.php');
require_once('defines.php');
require_once(SYSTEM.'system.php');
require_once(SYSTEM.'controller.php');
require_once(SYSTEM.'model.php');
//require_once(SYSTEM.'model_in.php');
require_once('permissoes.php');

require_once(LIBS . "/smarty/Smarty.class.php");
require_once(LIBS . "/debuglib/debuglib.php");
require_once(LIBS . "/phpmailer/class.phpmailer.php");
require_once(LIBS . "/canvas_image/canvas.php");

//forcar tela de pagamento em ambiente seguro
$arraySecurePages = array('/cadastro/pagamento/homolocacaoCielo/1', '/cadastro/pagamento');
if(PRODUCAO && in_array($_SERVER['REQUEST_URI'], $arraySecurePages) && !isset($_SERVER['HTTPS'])){
  header("Location: https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
}




// END SMARTY LOAD
// autoload models and helpers
function autoload($file) {

  if (file_exists(MODELS . $file . '.php')) {
    require_once(MODELS . $file . '.php');
  } elseif (file_exists(HELPERS . $file . '.php')) {
    require_once(HELPERS . $file . '.php');
  } elseif (file_exists(TEMPLATE . $file . '.php')) {
    require_once(TEMPLATE . $file . '.php');
  } else {
    return true;
  }
}

spl_autoload_register('autoload');

if ($_POST and !get_magic_quotes_gpc()) {
  foreach ($_POST as $field => $value) {
    if (!is_array($_POST[$field])) {
      $_POST[$field] = addslashes($value);
    }
  }
}

$start = new System;
$start->run();
?>
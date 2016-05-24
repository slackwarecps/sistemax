 <?php
//define('BARLNX', '/');
//define ('SUB_PASTA','sistemax/');//NOME DA PASTA DENTRO DA RAIZ
//define ('SUB_PASTA_TEMPLATE','/sistemax');//NOME DA PASTA DENTRO DA RAIZ
//define('CONTROLLERS', 'controllers/');
//
//define('VIEWS', 'views/');
//define('MODELS', 'models/');
//define('TEMPLATE', 'template/');
//define('SYSTEM', '/system/');
//define('HELPERS', SYSTEM.'helpers/');
//define('PATH_ROOT', $_SERVER['DOCUMENT_ROOT'].BARLNX. SUB_PASTA);
//define('SMARTYDIR', PATH_ROOT .'views');
//define('LIBS', SYSTEM.'libs');
//define('HTTP_ROOT', 'http://' . $_SERVER['HTTP_HOST']. SUB_PASTA_TEMPLATE);
//define('NOME_SITE', "Fabio Alvaro - Sistema X");
//define('BOOTSTRAP_DIST',HTTP_ROOT.'/files/css/bootstrap-3.0.0/dist');


require 'system/libs/smarty/Smarty.class.php'; 
$smarty = new Smarty; 

$smarty->setCaching(false); 
$smarty->force_compile = true; 

// set a separate cache_id for each unique URL 
$cache_id = md5($_SERVER['REQUEST_URI']); 

// capture the output 
$output = $smarty->fetch('teste.tpl', $cache_id); 

// do something with $output here 
echo $output; 
?>
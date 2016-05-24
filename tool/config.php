<?php 
/*Arquivo de configuracao do Tools 1.0*/
//var_dump();
//Em produção
if ($_SERVER["SERVER_NAME"]=="www.fabioalvaro.com.br"){
  define('TOOL_SUBPASTA_SISTEMA','sistemax');
  define('TOOLS_ROOTSITE',$_SERVER['DOCUMENT_ROOT'].'sistemax');
  define('DIRETORIO_SAIDA','/TOOL/SAIDA');
  define('TOOL_TEMPLATES',TOOLS_ROOTSITE.'/views/templates');
  define('TOOL_JS',TOOLS_ROOTSITE.'/files/js');
  define('TOOL_CONTROLLER',TOOLS_ROOTSITE.'/controllers');
  define('TOOL_MODEL',TOOLS_ROOTSITE.'/models');
  define('TOOL_MODELO_FOLDER','modelos');
}else{
  //local
  define('TOOL_SUBPASTA_SISTEMA','sistemax');
  define('TOOLS_ROOTSITE',$_SERVER['DOCUMENT_ROOT'].'/sistemax');
  define('DIRETORIO_SAIDA','/TOOL/SAIDA');
  define('TOOL_TEMPLATES',TOOLS_ROOTSITE.'/views/templates');
  define('TOOL_JS',TOOLS_ROOTSITE.'/files/js');
  define('TOOL_CONTROLLER',TOOLS_ROOTSITE.'/controllers');
  define('TOOL_MODEL',TOOLS_ROOTSITE.'/models');
  define('TOOL_MODELO_FOLDER','modelos');
}

ECHO 'INFO<br>';
ECHO 'TOOL_TEMPLATES : '.TOOL_TEMPLATES.'<br>';
ECHO 'TOOL_CONTROLLER : '.TOOL_CONTROLLER.'<br>';

ECHO 'Raiz do Site Alvo: '.TOOLS_ROOTSITE.'<br>';
/*Banco de Dados*/
//define('TOOL_SCHEMA','clarusin');
//define('TOOL_SERVER','192.168.2.18');
//define('TOOL_USER','root');
//define('TOOL_PASS','clarusbd11');
//define('DBENCODING', 'utf8');

/*Banco de Dados*/
define('TOOL_SCHEMA','fabioalvaro');
define('TOOL_SERVER','mysql.fabioalvaro.com.br');
define('TOOL_USER','fabioalvaro');
define('TOOL_PASS','pereira1302');
define('DBENCODING', 'utf8');


?>
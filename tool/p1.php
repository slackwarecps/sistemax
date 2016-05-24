<?php
require_once('config.php');
require('libs/Smarty.class.php');

//Parametros
$smarty = new Smarty;
//Obter os campos da tabela
$smarty->assign('lista_campos', 'opa');
$smarty->display('template_tool/pagina.html');



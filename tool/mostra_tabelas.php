<?php

require_once('config.php');
require('libs/Smarty.class.php');



//Verifico se é para retornar comandos AJAX / GETCAMPOS
if (isset($_GET['c']) and ($_GET['c'] == 'getcampos')) {
    $campos = $_GET['c'];
    $tabela = $_GET['t'];

    $dbh = new PDO('mysql:host=' . TOOL_SERVER . ';dbname=' . TOOL_SCHEMA, TOOL_USER, TOOL_PASS);
    $sql = 'show columns from ' . $tabela;

    foreach ($dbh->query($sql) as $row) {
        $lista_campos[] = $row['Field'];
    }
    // var_dump($lista_campos);die;
    $smarty = new Smarty;
    $smarty->force_compile = true;
    $smarty->debugging = false;
    $smarty->caching = false;
    $smarty->cache_lifetime = 120;


    $smarty->assign('lista_campos', $lista_campos);
    echo $smarty->fetch('template_tool/array_zerado.tpl');
    $dbh = null;


    die; //Mata Processamento  
}

//Verifico se é para retornar comandos AJAX / FORMULARIO
if (isset($_GET['c']) and ($_GET['c'] == 'getformulario')) {
    $campos = $_GET['c'];
    $tabela = $_GET['t'];

    $dbh = new PDO('mysql:host=' . TOOL_SERVER . ';dbname=' . TOOL_SCHEMA, TOOL_USER, TOOL_PASS);
    $sql = 'show columns from ' . $tabela;

    foreach ($dbh->query($sql) as $row) {
        $lista_campos[] = $row['Field'];
    }
    // var_dump($lista_campos);die;
    $smarty = new Smarty;
    $smarty->force_compile = true;
    $smarty->debugging = false;
    $smarty->caching = false;
    $smarty->cache_lifetime = 120;


    $smarty->assign('lista_campos', $lista_campos);
    echo $smarty->fetch('template_tool/formulario.tpl');
    $dbh = null;


    die; //Mata Processamento  
}

//comandos AJAX / RETORNA TABELAS
if (isset($_GET['c']) and ($_GET['c'] == 'gettabelas')) {
    $campos = $_GET['c'];
    $tabela = $_GET['t'];

    $dbh = new PDO('mysql:host=' . TOOL_SERVER . ';dbname=' . TOOL_SCHEMA, TOOL_USER, TOOL_PASS);
    $sql = 'show tables';

    foreach ($dbh->query($sql) as $row) {
        $lista_campos[] = $row[0];
    }
    // var_dump($lista_campos);die;
    $smarty = new Smarty;
    $smarty->force_compile = true;
    $smarty->debugging = false;
    $smarty->caching = false;
    $smarty->cache_lifetime = 120;


    $smarty->assign('lista_campos', $lista_campos); //array com os campos
    $smarty->assign('sel_name', 'sel_tabelas'); //nome do componente
    $smarty->assign('item_selecionado', 1); //item selecionado
    echo $smarty->fetch('template_tool/cria_selecao_completo.tpl');
    $dbh = null;


    die; //Mata Processamento  
}


//validacao
//var_dump($_GET);die;





$smarty = new Smarty;
$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;

$dbh = new PDO('mysql:host=' . TOOL_SERVER . ';dbname=' . TOOL_SCHEMA, TOOL_USER, TOOL_PASS);
$sql = 'show tables';

foreach ($dbh->query($sql) as $row) {
    $lista_tabelas[$row[0]] = $row[0] . "\t";
}
$smarty->assign('lista_tabelas', $lista_tabelas);

if (isset($_GET['erro'])) {   
    $smarty->assign('erro', $_GET['erro']);   
}else{
    $smarty->assign('erro',NULL);       
}


$smarty->display('template_tool/mostra_tabelas.tpl');
$dbh = null;
?>

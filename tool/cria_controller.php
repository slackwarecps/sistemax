<?php 

require_once('config.php');
require('libs/Smarty.class.php');

//var_dump();
if ($_POST['entidade']!=null)
cria_controller($_POST['entidade']);

function cria_controller($nome_controller=NULL){
$OUTPUT='';
$entidade_nome = $nome_controller;
$entidade_dir = $nome_controller;

$apenas_exclui = isset($_POST['apenas_exclui']) ? $_POST['apenas_exclui'] : NULL;
$nome_da_tabela =  'usuarios';
$nome_campo_chave =  'id_usuario';
//Parametros
$classe_painel_pagina =  'painel_basico';

$filename_modelo = null;
$filename_v = null;
$filename_view_grid = null;
$filename_view_novo = null;
$filename_c = null;
$filename_j = null;

$smarty = new Smarty;
$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = false;
$smarty->cache_lifetime = 120;
$smarty->assign("dir", $entidade_dir);
$smarty->assign("filename", $entidade_nome);


  
//Obter os campos da tabela
$lista_campos = pegacampos($nome_da_tabela);  
$smarty->assign('lista_campos', $lista_campos);
$array_vazio = $smarty->fetch('template_tool/array_zerado.tpl');
$array_tratapost = $smarty->fetch('template_tool/array_tratapost.tpl');





$smarty->assign("array_vazio", $array_vazio);
$smarty->assign("array_tratapost", $array_tratapost);
$smarty->assign("classe_painel_pagina", $classe_painel_pagina);
$smarty->assign("nome_da_tabela", $nome_da_tabela);
$smarty->assign("nome_campo_chave", $nome_campo_chave);


//Gera os Templates

//MODELO 
//var_dump($array_vazio);die;
$smarty->assign("entidade", $entidade_nome);
$conteudo_modelo = $smarty->fetch(TOOL_MODELO_FOLDER . '/modelo.tpl');

//Modelo FIM





//View
$conteudo_v = $smarty->fetch(TOOL_MODELO_FOLDER . '/page.tpl');
$conteudo_view_novo = $smarty->fetch(TOOL_MODELO_FOLDER . '/form_novo_entidade.tpl');
//View FIM

//View - GRID
$conteudo_view_grid = $smarty->fetch(TOOL_MODELO_FOLDER . '/grid.tpl');
//View - GRID FIM



$conteudo_c = $smarty->fetch(TOOL_MODELO_FOLDER . '/controller.tpl');
$conteudo_j = $smarty->fetch(TOOL_MODELO_FOLDER . '/javascript.tpl');
$OUTPUT.= '<a href="/' . $entidade_nome . '">Teste a Entidade ' . $entidade_nome . ' criada.</a><hr>';
$OUTPUT.= '<a href="/tool/index.php"> Criar nova Entidade</a><hr>';

//Cria a estrutura de diretórios
if (!file_exists(TOOL_TEMPLATES)) {
  mkdir(TOOL_TEMPLATES, 0755, true);
}
//echo 'Onde vai ser Salvo (Template): '. TOOL_TEMPLATES;die;
if (!file_exists(TOOL_TEMPLATES . '/' . $entidade_dir)) {
  mkdir(TOOL_TEMPLATES . '/' . $entidade_dir, 0755, true);
}
if (!file_exists(TOOL_JS)) {
  mkdir(TOOL_JS, 0755, true);
}
if (!file_exists(TOOL_JS . '/' . $entidade_dir)) {
  mkdir(TOOL_JS . '/' . $entidade_dir, 0755, true);
}
if (!file_exists(TOOL_CONTROLLER)) {
  mkdir(TOOL_CONTROLLER, 0755, true);
}
if (!file_exists(TOOL_MODEL)) {
  mkdir(TOOL_MODEL, 0755, true);
}

$filename_modelo = TOOL_MODEL . '/' . $entidade_nome . 'Model.php';

//View
$filename_v = TOOL_TEMPLATES . '/' . $entidade_dir . '/form_' . $entidade_nome . '_busca.html';
$filename_view_novo = TOOL_TEMPLATES . '/' . $entidade_dir . '/form_' . $entidade_nome . '_novo.tpl';
//View FIM

//View - GRID ex: grid_entidade.tpl
$filename_view_grid = TOOL_TEMPLATES . '/' . $entidade_dir . '/grid_' . $entidade_nome . '.tpl';
//View - GRID FIM



$filename_c = TOOL_CONTROLLER . '/' . $entidade_nome . 'Controller.php';
$filename_j = TOOL_JS . '/' . $entidade_dir . '/' . $entidade_nome . '.js';

//remove o arquivos
if (file_exists($filename_modelo))
  unlink($filename_modelo);

if (file_exists($filename_v))
  unlink($filename_v);
if (file_exists($filename_view_novo))
  unlink($filename_view_novo);

if (file_exists($filename_view_grid))
  unlink($filename_view_grid);

//Salva o Controller
if (file_exists($filename_c))
  unlink($filename_c);
//echo '<br>Arquivo Controller: '.$filename_c;
if (file_exists($filename_j))
  unlink($filename_j);

//Caso apenas exclui sai aqui
if ($apenas_exclui)
  die('Exluidos');


//Gera o Model
// "a" representa que o arquivo é aberto para ser escrito
$fp = fopen($filename_modelo, "a");
// Escreve "exemplo de escrita" no bloco1.txt
$escreve = fwrite($fp, "$conteudo_modelo");
// Fecha o arquivo
fclose($fp);

//Gera a Viewer
// "a" representa que o arquivo é aberto para ser escrito
$fp = fopen($filename_v, "a");
// Escreve "exemplo de escrita" no bloco1.txt
$escreve = fwrite($fp, "$conteudo_v");
// Fecha o arquivo
fclose($fp);

//Gera a Viewer TEMPLATE DO NOVO
// "a" representa que o arquivo é aberto para ser escrito
$fp = fopen($filename_view_novo, "a");
// Escreve "exemplo de escrita" no bloco1.txt
$escreve = fwrite($fp, "$conteudo_view_novo");
// Fecha o arquivo
fclose($fp);

//Gera a Viewer - GRID
// "a" representa que o arquivo é aberto para ser escrito
$fp = fopen($filename_view_grid, "a");
// Escreve "exemplo de escrita" no bloco1.txt
$escreve = fwrite($fp, "$conteudo_view_grid");
// Fecha o arquivo
fclose($fp);


//Gera o Controller
// "a" representa que o arquivo é aberto para ser escrito
$fp = fopen($filename_c, "a");
// Escreve "exemplo de escrita" no bloco1.txt
$escreve = fwrite($fp, "$conteudo_c");
// Fecha o arquivo
fclose($fp);

//Gera o javascript
// "a" representa que o arquivo é aberto para ser escrito
$fp = fopen($filename_j, "a");
// Escreve "exemplo de escrita" no bloco1.txt
$escreve = fwrite($fp, "$conteudo_j");
// Fecha o arquivo
fclose($fp);

echo '<br>criou, ent: '. $entidade_nome . ' dir /'. $entidade_dir;
 
 
}

    //Retorna os campos de uma tabela especificada
    function pegacampos($tabela) {
      $dbh = new PDO('mysql:host=' . TOOL_SERVER . ';dbname=' . TOOL_SCHEMA, TOOL_USER, TOOL_PASS);
      $sql = 'show columns from ' . $tabela;
      foreach ($dbh->query($sql) as $row) {
        $lista_campos[] = $row['Field'];
      }      
      $dbh = null;        
      return $lista_campos;
    }

?>
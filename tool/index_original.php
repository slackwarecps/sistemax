<?php
require_once('config.php');
require('libs/Smarty.class.php');

$entidade_nome ='bolachinha';
$entidade_dir ='bolachinha';

$smarty = new Smarty;
//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$smarty->assign("dir", $entidade_dir);
$smarty->assign("filename", $entidade_nome);

//Gera os Templates
$conteudo_m = $smarty->fetch(TOOL_MODELO_FOLDER.'/modelo.tpl');
$conteudo_v = $smarty->fetch(TOOL_MODELO_FOLDER.'/page.tpl');
$conteudo_c = $smarty->fetch(TOOL_MODELO_FOLDER.'/controller.tpl');
echo TOOL_MODELO_FOLDER.'/controller.tpl<br>';
$conteudo_j = $smarty->fetch(TOOL_MODELO_FOLDER.'/javascript.tpl');
ECHO '<hr>';


echo "Saida do Arquivo Model<br>";
echo "<textarea cols='150' rows='15' >$conteudo_m</textarea><br>";
echo "Saida do Arquivo Viewer<br>";
echo "<textarea cols='150' rows='15' >$conteudo_v</textarea><br>";
echo "Saida do Arquivo Controller<br>";
echo "<textarea cols='150' rows='15' >$conteudo_c</textarea><br>";
echo "Saida do Arquivo Javascript<br>";
echo "<textarea cols='150' rows='15' >$conteudo_j</textarea><br>";
ECHO '<hr>';


//Cria a estrutura de diretórios
if (!file_exists(TOOL_TEMPLATES)) { mkdir(TOOL_TEMPLATES, 0755,true);}
if (!file_exists(TOOL_TEMPLATES.'/'.$entidade_dir)) { mkdir(TOOL_TEMPLATES.'/'.$entidade_dir, 0755,true);}
if (!file_exists(TOOL_JS)) { mkdir(TOOL_JS, 0755,true);}
if (!file_exists(TOOL_JS.'/'.$entidade_dir)) { mkdir(TOOL_JS.'/'.$entidade_dir, 0755,true);}
if (!file_exists(TOOL_CONTROLLER)) { mkdir(TOOL_CONTROLLER, 0755,true);}
if (!file_exists(TOOL_MODEL)) { mkdir(TOOL_MODEL, 0755,true);}





$filename_m = TOOL_MODEL.'/'.$entidade_nome.'Model.php';
$filename_v = TOOL_TEMPLATES.'/'.$entidade_dir.'/'.$entidade_nome.'_page.html';
$filename_c = TOOL_CONTROLLER.'/'.$entidade_nome.'Controller.php';
$filename_j = TOOL_JS.'/'.$entidade_dir.'/'.$entidade_nome.'_page.js';

echo 'Arquivo M: '.$filename_m.'<br>';
echo 'Arquivo V: '. $filename_v.'<br>';
echo 'Arquivo C: '. $filename_c.'<br>';
echo 'Arquivo J: '. $filename_j.'<br>';ECHO '<hr>';

//remove o arquivos
if (file_exists($filename_m)) unlink($filename_m);
if (file_exists($filename_v)) unlink($filename_v);
if (file_exists($filename_c)) unlink($filename_c);
if (file_exists($filename_j)) unlink($filename_j);



//Gera o Model
// "a" representa que o arquivo é aberto para ser escrito
$fp = fopen($filename_m, "a");
// Escreve "exemplo de escrita" no bloco1.txt
$escreve = fwrite($fp, "$conteudo_m");
// Fecha o arquivo
fclose($fp);

//Gera a Viewer
// "a" representa que o arquivo é aberto para ser escrito
$fp = fopen($filename_v, "a");
// Escreve "exemplo de escrita" no bloco1.txt
$escreve = fwrite($fp, "$conteudo_v");
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


 
?>

Criado o arquivo html <a href="<?php echo $filename_m; ?>">html M</a><br/>
Criado o arquivo PHP V <a href="<?php echo $filename_v; ?>">PHP V</a><br/>
Criado o arquivo PHP C <a href="<?php echo $filename_c; ?>">PHP C</a><br/>
Criado o arquivo Javascript <a href="<?php echo $filename_j; ?>">Javascript J</a><br/>
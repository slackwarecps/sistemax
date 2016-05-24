<?php

/*
 * Configuracoes do Banco de Dados
 */

@define('DBHOST', 'mysql.fabioalvaro.com.br');
@define('DBPORT', '3306');
@define('DBUSER', 'fabioalvaro');
@define('DBPASS', 'pereira1302');
@define('DBNAME', 'fabioalvaro');
@define('DBENCODING', 'utf8');

@define('DBHOST_IN', 'mysql.fabioalvaro.com.br');
@define('DBPORT_IN', '3306');
@define('DBUSER_IN', 'fabioalvaro');
@define('DBPASS_IN', 'qweasdzxc');
@define('DBNAME_IN', 'fabioalvaro');

@define('PRODUCAO', true);
@define('MANUTENCAO', false);

/*
 * Configuracoes da CIELO
 */

define("CIELO", "1001734898");
define("CIELO_CHAVE", "e84827130b9837473681c2787007da5914d6359947015a5cdb2b8843db0fa832");
define("LOJA", "1006993069");
define("LOJA_CHAVE", "25fbb99741c739dd84d7b06ec78c9bac718838630f30b112d033ce2e621b34f3");
define('VERSAO', "1.2.0");
define("ENDERECO_BASE", "https://qasecommerce.cielo.com.br");
define("ENDERECO", ENDERECO_BASE."/servicos/ecommwsec.do");

?>
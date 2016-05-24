<?php    
require_once('config.php');
try {
      $db = new PDO('mysql:host=' . 
	  TOOL_SERVER. ';dbname=' . 
	  TOOL_SCHEMA . '', 
	  TOOL_USER, 
	  TOOL_PASS, 
	  array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES ' . DBENCODING));
	  
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
	
	$opa1= read('FORMPAG');
	print_r($opa1);
	//var_export($opa1);
	//var_dump($opa1);
	
  function read($table = NULL, $fields = NULL, $where = NULL, $group_by = NULL, $limit = NULL, $offset = NULL, $orderby = NULL, $freeQuerie = NULL) {
    $_table = ($table != NULL ? $table : NULL);
    if ($_table == NULL)
      return FALSE;
    $fields = ($fields != NULL ? implode(', ', $fields) : "*");
    $fields = ($fields != NULL ? "$fields" : NULL);
    $where = ($where != NULL ? "WHERE {$where}" : NULL);
    $group_by = ($group_by != NULL ? "GROUP BY {$group_by}" : NULL);
    $limit = ($limit != NULL ? "LIMIT {$limit}" : NULL);
    $offset = ($offset != NULL ? "OFFSET {$offset}" : NULL);
    $orderby = ($orderby != NULL ? "ORDER BY {$orderby}" : NULL);
    //$sql = "SELECT {$fields} FROM {$_table} {$where} {$group_by} {$orderby} {$limit} {$offset} {$freeQuerie}";
    //echo $sql.'<br / >';
	global $db;
	
    $q = $db->prepare("SELECT {$fields} FROM {$_table} {$where} {$group_by} {$orderby} {$limit} {$offset} {$freeQuerie}");
    $q->execute();
    $q->setFetchMode(PDO::FETCH_ASSOC);
    $data = $q->fetchAll();
    $count = count($data);
    return $data;
  }	

 echo 'opa foi';
?>


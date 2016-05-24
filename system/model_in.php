<?php
class model_in {

  protected $db;
  protected $host = DBHOST_IN;
  protected $database = DBNAME_IN;
  protected $user = DBUSER_IN;
  protected $password = DBPASS_IN;
  protected $last_query;
  protected $count;
  public $_table;
  protected $_sql;
  public $_start = false;

  public function __construct() {
    try {
      $this->db = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->database . '', $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES ' . DBENCODING));
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  protected function calculateValue($value, $key = false) {
    if ($value) {
      switch ($value) {
        case 'SUBTRACT' : return "$key - 1";
        case 'SUM' : return "$key + 1";
      }
      if (strstr($value, 'FLOATVAL')) {
        $value = str_replace('FLOATVAL ', '', $value);
        return str_replace(',', '.', $value);
      }
    }
    if ($value === null)
      return 'null';
    else
      return "'" . $value . "'";
  }

  public function startTransaction() {
    try {
      $this->db->beginTransaction();
    } catch (PDOException $e1) {

      echo $e1->getMessage();
    }
  }

  public function close_connection() {
    $this->db = NULL;
    return true;
  }

  public function commit() {
    $this->db->commit();
  }

  public function transaction($querie, $commit = FALSE) {
    try {
      if (is_object($querie)) {
        $data = $querie->execute();
        $lastId = $this->db->lastInsertId();
      } else {
        return false;
      }
      if ($commit) {
        try {
          $this->db->commit();
          return true;
        } catch (PDOException $e) {
          die($e->getMessage());
        }
      } else {
        return $lastId;
      }
    } catch (PDOException $e) {
      try {
        $this->db->rollBack();
        die($e->getMessage());
        return false;
      } catch (PDOException $e) {
      	die($e->getMessage());
        return false;
      }
    }
  }

  public function insert($table = NULL, array $data = NULL, $exec = TRUE) {
    $this->_table = ($table != NULL ? $table : NULL);
    if ($this->_table == NULL)
      return FALSE;
    $fields = implode(",", array_keys($data));
    $data = array_map(array($this, 'calculateValue'), $data);
    $values = implode(',', array_values($data));
    $this->_sql = "INSERT INTO `{$this->_table}` ({$fields}) VALUES ({$values})";
    //echo $this->_sql.'<br />';
    $prepare = $this->db->prepare($this->_sql);
    if ($exec) {
      try {
        $ready = $prepare->execute();
        return $this->db->lastInsertId();
      } catch (Exception $e) {
      	die($e->getMessage());
        return false;
      }
    } else {
      return $prepare;
    }
  }

  public function read($table = NULL, $fields = NULL, $where = NULL, $group_by = NULL, $limit = NULL, $offset = NULL, $orderby = NULL, $freeQuerie = NULL) {
    $this->_table = ($table != NULL ? $table : NULL);
    if ($this->_table == NULL)
      return FALSE;
    $fields = ($fields != NULL ? implode(', ', $fields) : "*");
    $fields = ($fields != NULL ? "$fields" : NULL);
    $where = ($where != NULL ? "WHERE {$where}" : NULL);
    $group_by = ($group_by != NULL ? "GROUP BY {$group_by}" : NULL);
    $limit = ($limit != NULL ? "LIMIT {$limit}" : NULL);
    $offset = ($offset != NULL ? "OFFSET {$offset}" : NULL);
    $orderby = ($orderby != NULL ? "ORDER BY {$orderby}" : NULL);
   // $sql = "SELECT {$fields} FROM {$this->_table} {$where} {$group_by} {$orderby} {$limit} {$offset} {$freeQuerie}";
    //echo $sql.'<hr />';

    $q = $this->db->prepare("SELECT {$fields} FROM {$this->_table} {$where} {$group_by} {$orderby} {$limit} {$offset} {$freeQuerie}");
    $q->execute();
    $q->setFetchMode(PDO::FETCH_ASSOC);
    $data = $q->fetchAll();
    $this->count = count($data);
    return $data;
  }

  public function countRows() {
    return $this->count;
  }

  public function update($table = NULL, array $data = NULL, $where, $exec = TRUE) {
    $this->_table = ($table != NULL ? $table : NULL);
    if ($this->_table == NULL)
      return FALSE;
    foreach ($data as $index => $value) {
      $fields[] = $index . " = " . $this->calculateValue($value, $index);
    }
    $fields = implode(', ', $fields);
    $sql = "UPDATE {$this->_table} SET {$fields} WHERE {$where}";
    //echo $sql."<br>";
    $prepare = $this->db->prepare($sql);
    if ($exec) {
      try {
        $ready = $prepare->execute();
        return $ready;
      } catch (Exception $e) {
        return false;
      }
    } else {
      return $prepare;
    }
  }

  public function delete($table = NULL, $where = NULL, $exec = TRUE) {
    $this->_table = ($table != NULL ? $table : NULL);
    if ($this->_table == NULL)
      return FALSE;
    $sql = "DELETE FROM `{$this->_table}` WHERE {$where}";
    //echo $sql;
    $prepare = $this->db->prepare($sql);
    if ($exec) {
      try {
        $ready = $prepare->execute();
        return true;
      } catch (Exception $e) {
        return false;
      }
    } else {
      return $prepare;
    }
  }

  //metodo para checar se necessita de pagina de segurança, consultando uma tabela no banco de dados.
  public function isSecurityPage($db_table = false) {
    /* if ($db_table) {
      if (isset($_SERVER['REDIRECT_URL'])) {
      $path = $_SERVER['REDIRECT_URL'];
      $this->read($db_table, null, "url = '{$path}'");
      if ($this->countRows() > 0) {
      if ($_SERVER["SERVER_PORT"] != 443) {
      header("Location:https://" . $_SERVER['HTTP_HOST'] . $path);
      }
      } else {
      if ($_SERVER["SERVER_PORT"] != 80) {
      header("Location:http://" . $_SERVER['HTTP_HOST'] . $path);
      }
      }
      }
      } */
  }

}

?>
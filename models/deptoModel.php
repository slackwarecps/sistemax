<?php

class deptoModel extends model {

  var $tableEmpresa = 'cad_empresa';
  var $tableContato = 'cad_empresa_contato';
  var $setContato;

  /**
   * Grava uma empresa e seus contatos e retorna o id do registro cadastrado.
   * @param array $array
   * @param array $contato (array com dados de contato)
   * @return int
   */
  public function setEmpresa($array, $contato) {

    $this->startTransaction();

    $id = $this->transaction($this->insert($this->tableEmpresa, $array, false));

    $contato['emp_id'] = $id;
    $contatp['sta_id'] = ST_ATIVO;
    
    $this->transaction($this->insert($this->tableContato, $contato));

    $this->commit();

    return $id;
  }

  /**
   * Obtem apenas uma empresa pelo seu id
   * @param int $id
   * @return array
   */
  public function getEmpresaById($id) {

    $empresa = $this->read($this->tableEmpresa, array('*'), "emp_id = $id");
    $empresa[0]["contatos"] = $this->read($this->tableContato, array('*'), "emp_id = $id");

    return $empresa;
  }

  /**
   * Obtem uma lista de empresas atraves de um filtro
   * @param string $where
   * @return array
   */
  public function getEmpresas($where = '') {
    $groupby = null;
    $orderby = 'nome_empresa';
    $fields = array('*');

    return $this->read($this->tableEmpresa, $fields, $where, $groupby, null, null, $orderby);
  }
 

  /**
   * Obtem a lista de contatos de uma empresa a partir de um filtro
   * @param string $where
   * @return array
   */
  public function getContatos($where = '') {
    $groupby = null;
    $orderby = 'emp_id,nome_contato';
    $fields = array('*');
    return $this->read($this->tableContato, $fields, $where, $groupby, null, null, $orderby);
  }

  public function getContatoByEmail($email = '') {
    $where = " email_contato = ('" . $email . "')";
    $fields = array('*');
    return $this->read($this->tableContato, $fields, $where, null, null, null);
  }

  public function getContatoByEmailById($email = '', $emp_con_id = '') {
    $where = " email_contato = '" . $email . "' and emp_con_id != '" . $emp_con_id . "'";
    $fields = array('*');
    return $this->read($this->tableContato, $fields, $where, null, null, null);
  }

  /**
   * Atualiza uma empresa
   * @param array $array
   * @param int $id
   * @return boolean
   */
  public function updEmpresa($array, $id) {
    $where = "emp_id = $id";
    return $this->update($this->tableEmpresa, $array, $where);
  }

  /**
   * Insere uma contato 
   * @param int $id
   * @param array $contato
   */
  public function setContato($emp_id, $data, $exec = false) {

    $data['emp_id'] = $emp_id;
    $data['sta_id'] = ST_ATIVO;

    $inserted_id = $this->insert($this->tableContato, $data, $exec);
  }

  public function updtContato($data) {

    $this->startTransaction();

    $where = "emp_con_id=" . $data['emp_con_id'];

    $edited_id = $this->transaction($this->update($this->tableContato, $data, $where));

    $this->commit();

    return true;
  }

}

?>

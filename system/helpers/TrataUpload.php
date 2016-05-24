<?php

/**
 * Classe para tratar upload
 * 
 * Ex:
 *   		$upload = new TrataUpload($_FILES['arquivo'], '/tmp', array('doc','docx'), 500000);
 *  		$upload->save();
 *  
 * @author frayel
 *
 */
class TrataUpload {

  private $files;			 // Variavel $_FILES['filename'] submetida
  private $upload_dir;		 // Diretorio onde serao armazenados os arquivos
  private $new_name;		 // Novo nome do arquivo de destino. (sem extensão)
  private $max_upload_size;  // Tamanho máximo do arquivo em bytes 
  private $extensions;		 // Array com as extensões permitidas
  private $error;			 // Mensagem de erro em caso de falha do upload
  private $fileName;		 // Nome e extensão do arquivo que foi salvo

  function __construct($file, $upload_dir, $extensions, $max_upload_size){
	$this->file = $file;
  	$this->upload_dir = $upload_dir;
 	$this->max_upload_size = $max_upload_size;
  	$this->extensions = $extensions;
  	 
  }

  /**
   * Salva no diretorio de destino, o arquivo que foi enviado.
   * Caso ocorra erro, sera armazenado em: $this->error
   *  
   * @return boolean
   */
  public function save() {
  	
  	if ($this->file['name'] == ''){
  		$this->error = "Nenhum arquivo enviado!";
  		return false;
  	}
  	
  	$prt = explode(".", $this->file['name']);
  	$ext = $prt[sizeof($prt)-1];

  	if ($this->new_name != null){
  		$this->fileName = $this->new_name . ".$ext";
  	}else{
  		$this->fileName = $this->file['name'];
  	}
  	
  	if (!in_array($ext, explode(",", str_replace(" ", "", $this->extensions)))){
  		$this->error = "Formato de arquivo não permitido!";
  		return false;
  	}
  	 
  	else if ($this->file['size'] > $this->max_upload_size || $this->file['size'] <= 0){
  		$this->error = "O Tamanho máximo do arquivo deve ser de ". number_format($this->max_upload_size/1024, 1).'KB';
  		return false;
  	}
  	
  	else if ($this->file['error'] > 0){
  		$this->error = "Erro ao enviar arquivo! COD: ".$this->file['error'];
  		return false;
  	}
  	
  	else if (move_uploaded_file($this->file['tmp_name'], $this->upload_dir . "/" . $this->fileName)) {
  		$this->error = "";
  	}else{
  		$this->error = "Erro ao enviar o arquivo!";
  		return false;
  	}
  	
  	return true;
  }
  
  /**
   * Obtem a mensagem de erro
   * @return string
   */
  public function getErrorMessage(){
  	return $this->error;
  }
  
  /**
   * Obtem o nome do arquivo de destino
   * @return string
   */
  public function getFileName(){
  	return $this->fileName;
  }

  /**
   * Define um novo nome para o arquivo de destino. (sem a extensão)
   * @param unknown $new_name
   */
  public function setNewName($new_name){
  	$this->new_name = $new_name;
  }
  
}
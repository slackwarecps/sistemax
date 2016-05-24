<?php

class keySimetric{
  
  var $text;
  var $key;
  var $td = MCRYPT_RIJNDAEL_256;
  var $_crypt;
  var $hex_crypt;
  var $iv_size;
  var $iv;
  var $_decrypt;
  
  function __construct(){
    $this->iv_size = mcrypt_get_iv_size($this->td, MCRYPT_MODE_ECB);
    $this->iv = mcrypt_create_iv($this->iv_size, MCRYPT_RAND);
    $this->key = CRYPT_KEY;
  }
  
  function encrypt($text){
    return $this->_crypt = base64_encode(mcrypt_encrypt($this->td, $this->key, $text, MCRYPT_MODE_CBC, $this->iv));
  }
  
  function decrypt($text_crypt, $random_iv){
    return $this->_decrypt = mcrypt_decrypt($this->td, $this->key, base64_decode($text_crypt), MCRYPT_MODE_CBC, base64_decode($random_iv));
  }
  
  function get_random_iv(){
    return $this->iv;
  }

}
?>

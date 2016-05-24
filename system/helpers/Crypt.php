<?php

class Crypt {

  private $chave;

  function __construct() {
    $this->chave = "jka3277rf59fdhno598";
  }

  public function Encrypt($string) {
    return base64_encode($this->StringXor($string, $this->chave));
  }

  public function Decrypt($string) {
    return $this->StringXor(base64_decode($string), $this->chave);
  }

  private function StringXor($a, $b) {
    if ($a == '')
      return '';
    $retorno = "";
    $i = strlen($a) - 1;
    $j = strlen($b);
    do {
      $retorno .= ($a{$i} ^ $b{$i % $j});
    } while ($i--);
    return strrev($retorno);
  }

}
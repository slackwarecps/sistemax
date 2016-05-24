<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of util
 *
 * @author dcaetano
 */
class util {

  //put your code here

  public function generateAcessKey($length) {
    $max = ceil($length / 32);
    $random = '';
    for ($i = 0; $i < $max; $i++) {
      $random .= md5(microtime(true) . mt_rand(10000, 90000));
    }
    return substr($random, 0, $length);
  }

  public static function limpa_campo($varSal) {
    $lixo = array(" ", ".", "/", "-", "(", ")");
    $varSal = str_replace($lixo, "", $varSal);

    return str_replace(",", ".", $varSal);
  }

  public static function fixUrl($string, $slug = '-') {

    $string = strtolower(utf8_decode($string));

    // Código ASCII das vogais
    $ascii['a'] = range(224, 230);
    $ascii['e'] = range(232, 235);
    $ascii['i'] = range(236, 239);
    $ascii['o'] = array_merge(range(242, 246), array(240, 248));
    $ascii['u'] = range(249, 252);

    // Código ASCII dos outros caracteres
    $ascii['b'] = array(223);
    $ascii['c'] = array(231);
    $ascii['d'] = array(208);
    $ascii['n'] = array(241);
    $ascii['y'] = array(253, 255);

    foreach ($ascii as $key => $item) {
      $acentos = '';
      foreach ($item AS $codigo)
        $acentos .= chr($codigo);
      $troca[$key] = '/[' . $acentos . ']/i';
    }

    $string = preg_replace(array_values($troca), array_keys($troca), $string);

    // Slug?
    if ($slug) {
      // Troca tudo que não for letra ou número por um caractere ($slug)
      $string = preg_replace('/[^a-z0-9]/i', $slug, $string);
      // Tira os caracteres ($slug) repetidos
      $string = preg_replace('/' . $slug . '{2,}/i', $slug, $string);
      $string = trim($string, $slug);
    }

    return $string;
  }

  //Retira espaços no início e fim, barras inversas
  //Troca por entities: ampersand (&), aspas dupla ("), aspas simples ('), menor que (<), maior que (>) 
  public static function fix_string($str) {
    return trim(_no_slashes(htmlspecialchars($str, ENT_QUOTES)));
  }

  public static function apenasNumeros($str) {
    return preg_replace("/[^0-9]/i", "", $str);
  }

  public static function moeda($valor) {
    $source = array('.', ',');
    $replace = array('', '.');
    $valor = str_replace($source, $replace, $valor);
    return $valor;
  }

  public static function limitaTexto($str, $val) {
    $sp = explode(' ', $str);
    $n = sizeof($sp);
    if ($n > $val) {
      for ($i = 0; $i < $val; $i++) {
        $cach .= $sp[$i] . " ";
      }
      return $cach . "[...]";
    } else {
      return $str;
    }
  }

  public function checkUrlAmigavel($url) {

    $url_produto = explode("/", $url);

    if (isset($url_produto[2]) && $url_produto[2] != null) {
      $url_produto = $url_produto[2];

      $proModel = new produtoModel();
      $checkUrl = $proModel->getUrlProduto($url_produto);

      if (count($checkUrl) > 0) {
        $arr['controller'] = 'produto';
        $arr['action'] = 'produtos';
        $arr['params'] = $checkUrl[0]['titulo_url'];
        return($arr);
      }
    }
  }

  public static function trataCaptcha() {

    $resp = null;
    $error = null;

    $captcha = new captcha();

    if ($_POST["recaptcha_response_field"]) {
      $resp = $captcha->recaptcha_check_answer(PRIVATE_KEY_CAPTCHA, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);
      if ($resp->is_valid) {
        return true;
      } else {
        echo '- Entrada incorreta no captcha';
        die;
      }
    }
    //echo recaptcha_get_html($publickey, $error);
  }
  
  public static function trataNomeArquivo($arquivo) {
    $extensao = pathinfo($arquivo, PATHINFO_EXTENSION);
    $filename = util::fixUrl(pathinfo($arquivo, PATHINFO_FILENAME));
    return $filename . '.' . $extensao;
  }

  public function copyr($src, $dst) {
    //caso nao exista o diretorio devo criar
    if (is_dir($dst) === false) {
      mkdir($dst, 0777);
    }
    $listFiles = scandir($src);
    foreach ($listFiles as $files) {
      if ($files != '.' && $files != '..') {
        if (is_dir($src . '/' . $files))
          $this->copyr($src . '/' . $files, $dst . '/' . $files);
        else
          copy($src . '/' . $files, $dst . '/' . $files);
      }
    }
  }

  public function rrmdir($dir) {
    foreach (glob($dir . '/*') as $file) {
      if (is_dir($file))
        $this->rrmdir($file);
      else
        unlink($file);
    }
    rmdir($dir);
  }

}

?>

<?php
//SISTEMA X
class template {

  protected $title;
  protected $seo_meta_tag;
  protected $css = array();
  protected $js = array();
  protected $path_root;
  protected $path_image;
  protected $settings;
  public $company_name;
  public $smarty;
  public $titleMenu;
  public $copyright;
  public $url;
  public $meta;
  public $google_verification;

  public function __construct($objSmarty) {
    $this->smarty = $objSmarty;
    $this->permissoes = new permissoes();
    if ($_SERVER["SERVER_PORT"] == 443) {
      $this->path_root = 'https://' . $_SERVER['HTTP_HOST']. SUB_PASTA_TEMPLATE;
    } else {
      $this->path_root = 'http://' . $_SERVER['HTTP_HOST']. SUB_PASTA_TEMPLATE;
    }
    $this->setTitle();
	
    $this->public_pages = array('index', 'erro');

    /* Loading default CSS and JS */
    
    $this->js[] = $this->path_root . '/files/js/jquery-1.10.2.min.js';
    $this->js[] = $this->path_root . '/files/js/jquery_ui/js/jquery-ui-1.10.3.custom.min.js';
    $this->css[] = $this->path_root.'/files/js/jquery_ui/css/smoothness/jquery-ui-1.10.3.custom.min.css';	
    $this->css[] = $this->path_root . '/files/css/style.css';
     
    $this->js[] = $this->path_root . '/files/js/jquery.mask.js';
    $this->js[] = $this->path_root . '/files/js/jquery.maskMoney.js';
    $this->js[] = $this->path_root . '/files/js/util.js';
    
    $this->js[] = $this->path_root . '/files/js/toastmessage/javascript/jquery.toastmessage.js';    
    $this->css[] = $this->path_root . '/files/js/toastmessage/resources/css/jquery.toastmessage.css';    

  }

  public function analytics() {
    $account = null;
    if (PRODUCAO == 'true') {
      $codigo_analytics = ANALYTICS;
      if (count($codigo_analytics)) {
        $account .= $this->set_analytics($codigo_analytics);
      }
    }
    return $account;
  }

  public function google_verification() {
    if (PRODUCAO == 'true') {
      $google_verificacao = GA_VERIFICATION;
      return $google_verificacao;
    }
  }

  public function setTitle($title = NOME_SITE) {
    $this->title = $title;
  }

  public function fetchCSS($css) {
    $this->css[] = $this->path_root . $css;	
  }
 


  public function fetchJS($js) {
    $this->js[] = $this->path_root . $js;
  }

  public function run($type = null) {
    $this->path_image = SUB_PASTA_TEMPLATE.'/files/images';	
    $this->smarty->assign('title', $this->title);
    $this->smarty->assign('analytics', $this->analytics());
    $this->smarty->assign('google_verification', $this->google_verification());
    $this->smarty->assign('css', $this->css);
    $this->smarty->assign('js', $this->js);
    $this->smarty->assign('path_root', $this->path_root);
    $this->smarty->assign('path_image', $this->path_image);
    $this->smarty->assign('BOOTSTRAP_DIST', BOOTSTRAP_DIST);
    $this->smarty->assign('copyright', $this->copyright);
    $this->smarty->assign('producao', PRODUCAO);
    $this->smarty->assign('manutencao', MANUTENCAO);
    $this->head();
    $this->header();
    $this->footer();

    if (MANUTENCAO == 'true') {
      $this->smarty->display('manutencao.html');
      die;
    }
    
    if (isset($_SESSION['cliente'])) {
      $this->menu_cliente();
    }
    
    if (isset($_SESSION['usuario'])) {
      $this->menu_usuario();
    }
  }
  
  public function menu_cliente() {
    $menu_cliente = $this->smarty->fetch("comuns/menu_cliente.html");
    $this->smarty->assign('menu_cliente', $menu_cliente);
  }
  
  public function menu_usuario() {
    $menu_usuario = $this->smarty->fetch("comuns/menu_usuario.html");
    $this->smarty->assign('menu_usuario', $menu_usuario);
  }

  public function header() {
    $header = $this->smarty->fetch("comuns/header.html");
    $this->smarty->assign('header', $header);
  }

  public function head() {
    $this->smarty->assign('path_root', $this->path_root);
    $this->smarty->assign('title', $this->title);
    $this->smarty->assign('css', $this->css);
    $this->smarty->assign('js', $this->js);
    $head = $this->smarty->fetch("comuns/head.html");
    $this->smarty->assign('head', $head);
  }

  public function footer() {
    $footer = $this->smarty->fetch("comuns/footer.html");
    $this->smarty->assign('footer', $footer);
  }

  public function banner() {
    $banner = $this->smarty->fetch("comuns/banner.html");
    $this->smarty->assign('banner', $banner);
  }

  private function set_analytics($account) {

    $ga = "<script type=\"text/javascript\">\n";
    $ga .= "var _gaq = _gaq || [];\n";
    $ga .= "_gaq.push(['_setAccount', '" . $account . "']);\n";
    $ga .= "_gaq.push(['_trackPageview']);\n";
    $ga .= "(function() {\n";
    $ga .= "var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;\n";
    $ga .= "ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';\n";
    $ga .= "var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);\n";
    $ga .= "})();\n";
    $ga .= "</script>\n";

    return $ga;
  }

}

?>
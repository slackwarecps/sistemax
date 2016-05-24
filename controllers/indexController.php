<?php

class index extends controller {

  public function index_action() {
    $this->template->fetchCSS('/files/js/jquery.nivo.slider/nivo-slider.css');
    $this->template->fetchCSS('/files/js/jquery.nivo.slider/themes/default/default.css');
    
	
	$this->template->fetchJS(SUB_PASTA_TEMPLATE.'/files/js/jquery.nivo.slider/jquery.nivo.slider.pack.js');
    $this->template->fetchJS(SUB_PASTA_TEMPLATE.'/files/js/dock/jquery.jqdock.min.js');
    $this->template->fetchJS(SUB_PASTA_TEMPLATE.'/files/js/dock/load_dock.js');
    $this->template->fetchJS(SUB_PASTA_TEMPLATE.'/files/js/index/index.js');

  /*
  echo'<pre>';
var_dump($this->template);die;
echo'</pre>';	*/
	

    $this->template->run();
    $this->template->banner();
    $this->smarty->display('index.html');
  }

}

?>
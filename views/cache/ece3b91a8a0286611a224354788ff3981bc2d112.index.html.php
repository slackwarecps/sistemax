<?php /*%%SmartyHeaderCode:1035850917529906289b1148-73161719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ece3b91a8a0286611a224354788ff3981bc2d112' => 
    array (
      0 => '/home/fabioalvaro/www//sistemax/views/templates/index.html',
      1 => 1381848662,
      2 => 'file',
    ),
    '1b44a7a9a712c2b9cde002c2b092bd18396340f6' => 
    array (
      0 => '/home/fabioalvaro/www//sistemax/views/templates/comuns/dropdown_menu.html',
      1 => 1381922847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1035850917529906289b1148-73161719',
  'variables' => 
  array (
    'head' => 0,
    'BOOTSTRAP_DIST' => 0,
    'analytics' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_529906289d5035_86831040',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529906289d5035_86831040')) {function content_529906289d5035_86831040($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="http://www.fabioalvaro.com.br/sistemax/files/css/bootstrap-3.0.0/dist../../assets/ico/favicon.png">
<!--  <link rel="shortcut icon" href="/sistemax/files/images/favicon.ico" />-->
  <title>Fabio Alvaro - Sistema X</title>

  <!-- Bootstrap core CSS -->
  <link href="http://www.fabioalvaro.com.br/sistemax/files/css/bootstrap-3.0.0/dist/css/bootstrap.css" rel="stylesheet">
 

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="http://www.fabioalvaro.com.br/sistemax/files/css/bootstrap-3.0.0/dist../../assets/js/html5shiv.js"></script>
    <script src="http://www.fabioalvaro.com.br/sistemax/files/css/bootstrap-3.0.0/dist../../assets/js/respond.min.js"></script>
  <![endif]-->

  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">
    <meta name="google-site-verification" content="UA-40887577-1" />
      <link href="http://www.fabioalvaro.com.br/sistemax/files/js/jquery_ui/css/smoothness/jquery-ui-1.10.3.custom.min.css" rel="stylesheet" type="text/css" />
    <link href="http://www.fabioalvaro.com.br/sistemax/files/css/style.css" rel="stylesheet" type="text/css" />
    <link href="http://www.fabioalvaro.com.br/sistemax/files/js/toastmessage/resources/css/jquery.toastmessage.css" rel="stylesheet" type="text/css" />
    <link href="http://www.fabioalvaro.com.br/sistemax/files/js/jquery.nivo.slider/nivo-slider.css" rel="stylesheet" type="text/css" />
    <link href="http://www.fabioalvaro.com.br/sistemax/files/js/jquery.nivo.slider/themes/default/default.css" rel="stylesheet" type="text/css" />
  
    <script type="text/javascript" src="http://www.fabioalvaro.com.br/sistemax/files/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="http://www.fabioalvaro.com.br/sistemax/files/js/jquery_ui/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script type="text/javascript" src="http://www.fabioalvaro.com.br/sistemax/files/js/jquery.mask.js"></script>
    <script type="text/javascript" src="http://www.fabioalvaro.com.br/sistemax/files/js/jquery.maskMoney.js"></script>
    <script type="text/javascript" src="http://www.fabioalvaro.com.br/sistemax/files/js/util.js"></script>
    <script type="text/javascript" src="http://www.fabioalvaro.com.br/sistemax/files/js/toastmessage/javascript/jquery.toastmessage.js"></script>
    <script type="text/javascript" src="http://www.fabioalvaro.com.br/sistemax/sistemax/files/js/jquery.nivo.slider/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript" src="http://www.fabioalvaro.com.br/sistemax/sistemax/files/js/dock/jquery.jqdock.min.js"></script>
    <script type="text/javascript" src="http://www.fabioalvaro.com.br/sistemax/sistemax/files/js/dock/load_dock.js"></script>
    <script type="text/javascript" src="http://www.fabioalvaro.com.br/sistemax/sistemax/files/js/index/index.js"></script>
      
</head>  
<!-- NAVBAR
================================================== -->
  <body>
    
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/paineldecontrole">SISBE - Painel</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="exemplo1">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
<ul class="dropdown-menu">
  <li><a href="#">Ação</a></li>
  <li><a href="#">Another action</a></li>
  <li><a href="#">Something else here</a></li>
  <li class="divider"></li>
  <li class="dropdown-header">Envio de SMS</li>
  <li><a href="/paineldecontrole/sms">Teste de Envio</a></li>
  <li><a href="#">Saldo dos Clientes</a></li>
</ul>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="data:image/png;base64," data-src="holder.js/100%x500/auto/#777:#7a7a7a/text:First slide" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-large btn-primary" href="#">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="data:image/png;base64," data-src="holder.js/100%x500/auto/#777:#7a7a7a/text:Second slide" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-large btn-primary" href="#">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="data:image/png;base64," data-src="holder.js/100%x500/auto/#777:#7a7a7a/text:Third slide" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-large btn-primary" href="#">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/png;base64," data-src="holder.js/140x140" alt="Generic placeholder image">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/png;base64," data-src="holder.js/140x140" alt="Generic placeholder image">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/png;base64," data-src="holder.js/140x140" alt="Generic placeholder image">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="data:image/png;base64," data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="data:image/png;base64," data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="data:image/png;base64," data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://www.fabioalvaro.com.br/sistemax/files/css/bootstrap-3.0.0/dist../../assets/js/jquery.js"></script>
    <script src="http://www.fabioalvaro.com.br/sistemax/files/css/bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>
    <script src="http://www.fabioalvaro.com.br/sistemax/files/css/bootstrap-3.0.0/dist../../assets/js/holder.js"></script>
    <script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-40887577-1']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>

  </body>
</html><?php }} ?>
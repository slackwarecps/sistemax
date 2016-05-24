<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Departamento</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Sistema de Gestão Online">
        <meta name="Fabio Alvaro Pereira" content="Sitema de Gerenciamento Online">

        <!-- Le styles -->
        <link href="/files/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="/files/css/bs_sistema.css" rel="stylesheet">   
        <link href="/files/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="../assets/js/html5shiv.js"></script>
        <![endif]-->
       {$head}
    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                {include file="comuns/navegacao.tpl"}
            </div>
        </div>

        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3">
                    <div class="well sidebar-nav">
                        {include file="comuns/menu_lateral.tpl"}
                    </div><!--/.well -->
                </div><!--/span-->


                <div class="span9">
<div id="painel_basico">
  <div class="titulos_paginas" id="parametros">
    <h2>      
      Novo departamento</h2>
  </div>

  <fieldset>
    <legend>Cadastro de departamento</legend>  

    <form id="my_cad_form_departamento" name="my_cad_form_departamento" 
          action="#" method="POST" enctype="multipart/form-data">      

              <label for="DEPCOD">DEPCOD</label><input type="text" id="DEPCOD" name="DEPCOD" value="{$registro.DEPCOD}"><br>
              <label for="DEPNOM">DEPNOM</label><input type="text" id="DEPNOM" name="DEPNOM" value="{$registro.DEPNOM}"><br>
            
    </form>            


    <br>     
    <a href="/departamento" class="btn btn-default">Voltar</a> 
    <input type="button" class="btn btn-success" value="Salvar departamento" onclick="btn_salvar_departamento()"/>
    
    </form>
  </fieldset>
</div>


                </div><!--/span-->
            </div><!--/row-->

            <hr>
            <footer>
                {include file="comuns/footer.html"}
            </footer>
        </div><!--/.fluid-container-->
    </body>
</html>







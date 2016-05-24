<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Tool Home</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->        
        <link href="css/custom.css" rel="stylesheet">

    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                {include file='template_tool/navegacao.tpl' foo='bar'}
            </div>
        </div>
        <div class="container pagina"> 
            {if ($erro!==NULL)}
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Erro!!</strong> {$erro}
                </div>                                
            {/if}          
            
            
            
            
            <h1>Gerador de Modelo </h1>

            <div id="retorno">retorno</div>
            <div class="form-group">    
                <label  for="sel_tabelas">Tabelas</label>
                <select name="sel_tabelas" id="sel_tabelas">
                    {html_options options=$lista_tabelas}
                </select>
            </div>

            <div class="form-group">
                <label for="tacampos">Campos</label><br>
                <textarea id="tacampos" name="tacampos" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="taform">Formulario</label><br>
              <textarea id="taform" name="taform" class="form-control"></textarea>                
            </div>
                
               <div id="bobesponja" class="pull-right">{*bobesponja*}</div> 
               
               
 <!-- Button trigger modal -->
  <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Launch demo modal</a>

  <!-- Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Modal title</h4>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->           
               
               
        </div><!-- /.container -->

        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mostra_tabelas.js"></script>
    </body>
</html>
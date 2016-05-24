<?php /* Smarty version Smarty-3.1.13, created on 2013-08-09 17:25:20
         compiled from "template_tool/home.html" */ ?>
<?php /*%%SmartyHeaderCode:99638724552054ed720b0f3-67851664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6aa845f6f5ed45e159bee325aab4cbf95ca71e2b' => 
    array (
      0 => 'template_tool/home.html',
      1 => 1376079667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99638724552054ed720b0f3-67851664',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52054ed72474e0_90343941',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52054ed72474e0_90343941')) {function content_52054ed72474e0_90343941($_smarty_tpl) {?><!DOCTYPE html>
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
    <link href="starter-template.css" rel="stylesheet">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <?php echo $_smarty_tpl->getSubTemplate ('template_tool/navegacao.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('foo'=>'bar'), 0);?>

      </div>
    </div>

    <div class="container">	
        <div class="starter-template">
            <h1>Tool 1.0 - Gera Entidade</h1>
            <p class="lead">Coloque o nome da Entidade por Exemplo 'Cidade'</p>			
            <form name="frm_gera_entidade" id="frm_gera_entidade" action="gera_entidade.php" method="POST" enctype="multipart/form-data"
			class="form-inline">
                <fieldset>
                    <legend>Valores </legend>			
				<div class="form-group">
					<label for="nomeentidade">nome da Entidade</label>      
					<input type="text" class="form-control" name="nomeentidade" id="nomeentidade" value="visitante" placeholder="Nome da Entidade" /> 
					<input type="submit" value="Gerar Entidade" name="btn_gerar_entidade" class="btn btn-default"/>					
				</div>
				

				<div class="checkbox">
					<label>
						<input type="checkbox" value="S" id="apenas_exclui" name="apenas_exclui"/> Apenas Exclui
					</label>
				</div>
                
                
				<div class="checkbox">
					<label>
						<input type="checkbox"  value="N" id="mostra_info" name="mostra_info"/> Mostra Informacao
					</label>
            	</div>
                <br/>
 </fieldset>
                <fieldset>
                    <legend>Campos</legend>
					<div class="form-group">
                    <label for="nome_tabela">Nome da tabela</label>
					<input type="text" class="form-control" name="nome_tabela" id="nome_tabela" value="cad_portaria_visitante" />
					</div>
					
					<div class="form-group">
                    <label for="nome_campo_chave"> Campo Chave</label>					
					<input type="text" class="form-control" name="nome_campo_chave" id="nome_campo_chave" value="por_vis_id" />
					</div>
					
					<div class="form-group">
					<label for="lista_tabelas">Tabelas</label>		
                    <select class="form-control" name="lista_tabelas" id="lista_tabelas">
					<option value="">Selecione uma Tabela</option>
					</select>
					</div>
                </fieldset>
            </form>

            <form name="frm_options" action="#" method="POST">
                <textarea name="campos_referencia" id="campos_referencia" rows="15" cols="60"></textarea>
            </form>
            <input type="button" value="btn2" name="btn2" id="btn2" class="btn btn-primary"/>
        </div>	  
	  
    </div><!-- /.container -->

     <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
	 <script>
            $(function() {
                $("input[type=submit], button")                        
                        .click(function(event) {
                    event.preventDefault();
                    $('#frm_gera_entidade').submit();
                });
                //Carrega as Tabelas na combox
                $("#lista_tabelas").load('mostra_tabelas.php?c=gettabelas', function() {
                    $("#lista_tabelas").on("change", function() {
                        $("#nome_tabela").val($(this).find("option:selected").text());
                        $("#campos_referencia").load('mostra_tabelas.php?c=getcampos&t=' + $(this).find("option:selected").text());

                    });
                });


            });
        </script>
  </body>
</html><?php }} ?>
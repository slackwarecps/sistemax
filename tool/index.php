<?php
/* * * */
?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <head>
        <meta charset="utf-8" />
        <title> Framework Tool 1.0   </title>
        <link href='http://fonts.googleapis.com/css?family=Alef:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/files/css/style.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="js/index.js"></script>
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
    </head>    
    <body>
        <div class="painel_superior" ><img src="/files/imagens/fabio_monica.png" height="65">TOOL</div>
        <div class="wrapper painel_geral">

            <h1>Tool 1.0 - Gera Entidade</h1>

            <a href="mostra_tabelas.php">Gerar Array/Form</a>

            <p>Coloque o nome da Entidade por Exemplo 'Cidade'</p>

            <form name="frm_gera_entidade" id="frm_gera_entidade" action="gera_entidade.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="nomeentidade" id="nomeentidade" value="xuxu" size="60" />  
                <input type="submit" value="Gerar Entidade" name="btn_gerar_entidade" />
                <fieldset>
                  <div id='retorno_div'>Status:OK</div>
                  <input type="button" value="Gera Controller" name="btngeracontroller" onclick='btngeracontrollerClick()'/>
                </fieldset>
                <br/>
                <label>Apenas Exclui</label><input type="checkbox" value="S" id="apenas_exclui" name="apenas_exclui"/><br/>
                <label>mostra info</label>
                <input type="checkbox" value="N" id="mostra_info" name="mostra_info"/>
                <br/>

                <fieldset class="painel_geral">
                    <legend>Campos</legend>
                    <label>Nome da tabela</label><input type="text" name="nome_tabela" id="nome_tabela" value="cad_portaria_visitante" /><br/> 
                    <label> Campo Chave</label><input type="text" name="nome_campo_chave" id="nome_campo_chave" value="por_vis_id" /><br/> 

                    <select name="lista_tabelas" id="lista_tabelas"></select>
                </fieldset>
            </form>

            <form name="frm_options" action="#" method="POST">
                <textarea name="campos_referencia" id="campos_referencia" rows="15" cols="60"></textarea>
            </form>
            <input type="button" value="btn2" name="btn2" id="btn2"/>
        </div>
    </body>
</html>
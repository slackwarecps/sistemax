<!DOCTYPE html>
<html lang="pt-br">
    {$head}
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
                    <!--conteudo-->

              


                     


                    <div class="container_padrao">
                        <fieldset>
                            <legend>Cadastro de cliente</legend>  

                            <form id="my_cad_form_cliente" name="my_cad_form_cliente" 
                                  action="#" method="POST" enctype="multipart/form-data"
                                  class="form-inline"  role="form"
                                  >      

                                <div class="form-group">
                                    <label for="CLICOD" class="sr-only">Código</label>                                
                                  
                                        <input class="form-control" type="text" id="CLICOD"  name="CLICOD" value="{$registro.CLICOD}">
                                  
                                </div>

                                <div class="form-group">
                                    <label for="CLINOM" class="sr-only">Nome do Cliente</label>
                               
                                        <input class="form-control" type="text" id="CLINOM" name="CLINOM" value="{$registro.CLINOM}">
                               
                                </div>



                                <div class="form-group"><label for="CLIEND" class="col-lg-3 control-label">Endereço</label>
                                    <div class="col-lg-7" >
                                        <input  class="form-control" type="text" id="CLIEND" name="CLIEND" value="{$registro.CLIEND}"></div>
                                </div>
                                <div class="form-group"><label for="CLICEP" class="col-lg-2 control-label" >CEP</label><div class="col-lg-10"><input  class="form-control" type="text" id="CLICEP" name="CLICEP" value="{$registro.CLICEP}"></div></div>
                                <div class="form-group"><label for="CLIBAI" class="col-lg-2 control-label">Bairro</label><div class="col-lg-10"><input  class="form-control" type="text" id="CLIBAI" name="CLIBAI" value="{$registro.CLIBAI}"></div></div>
                                <div class="form-group"><label for="CLICID" class="col-lg-2 control-label">cidade</label><div class="col-lg-10"><input  class="form-control" type="text" id="CLICID" name="CLICID" value="{$registro.CLICID}"></div></div>
                                <div class="form-group"><label for="CLIUF" class="col-lg-2 control-label">Estado</label><div class="col-lg-10"><input  class="form-control" type="text" id="CLIUF" name="CLIUF" value="{$registro.CLIUF}"></div></div>


                                <div class="form-group">
                                    <label for="CLIRG" class="sr-only" >CLIRG</label>
                                  
                                    <input type="text" id="CLIRG"   class="form-control" name="CLIRG" value="{$registro.CLIRG}">
                                  
                                </div>
                                <div class="form-group">
                                    <label for="CLILIM" class="col-lg-2 control-label" >CLILIM</label>
                                    <div class="col-lg-10">
                                        <input type="text" id="CLILIM"   class="form-control" name="CLILIM" value="{$registro.CLILIM}">                                        
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="status" class="col-lg-2 control-label" >status</label>
                                    <div class="col-lg-5">
                                        <input type="text" id="status"   class="form-control" name="status" value="{$registro.status}">
                                    </div>
                               
                                    <label for="CLIDNA" class="col-lg-2 control-label" >CLIDNA</label>
                                    <div class="col-lg-5">
                                        <input type="text" id="CLIDNA"   class="form-control" name="CLIDNA" value="{$registro.CLIDNA}">
                                    </div>
                                </div>


                                <div class="form-group"><label for="CLIDCA" class="col-lg-2 control-label" >CLIDCA</label><div class="col-lg-10"><input type="text" id="CLIDCA"   class="form-control" name="CLIDCA" value="{$registro.CLIDCA}"></div></div>
                                <div class="form-group"><label for="CLIEMA" class="col-lg-2 control-label" >CLIEMA</label><div class="col-lg-10"><input type="text" id="CLIEMA"   class="form-control" name="CLIEMA" value="{$registro.CLIEMA}"></div></div>
                                <div class="form-group"><label for="CLITIP" class="col-lg-2 control-label" >CLITIP</label><div class="col-lg-10"><input type="text" id="CLITIP"   class="form-control" name="CLITIP" value="{$registro.CLITIP}"></div></div>
                                <div class="form-group"><label for="CLISIT" class="col-lg-2 control-label" >CLISIT</label><div class="col-lg-10"><input type="text" id="CLISIT"   class="form-control" name="CLISIT" value="{$registro.CLISIT}"></div></div>
                                <div class="form-group"><label for="CLIFO1" class="col-lg-2 control-label" >CLIFO1</label><div class="col-lg-10"><input type="text" id="CLIFO1"   class="form-control" name="CLIFO1" value="{$registro.CLIFO1}"></div></div>
                                <div class="form-group"><label for="CLIFO2" class="col-lg-2 control-label" >CLIFO2</label><div class="col-lg-10"><input type="text" id="CLIFO2"  class="form-control"  name="CLIFO2" value="{$registro.CLIFO2}"></div></div>
                                <div class="form-group"><label for="CLICLA" class="col-lg-2 control-label" >CLICLA</label><div class="col-lg-10"><input type="text" id="CLICLA"   class="form-control" name="CLICLA" value="{$registro.CLICLA}"></div></div>
                                <div class="form-group"><label for="CLIOBS" class="col-lg-2 control-label" >CLIOBS</label><div class="col-lg-10"><input type="text" id="CLIOBS"   class="form-control" name="CLIOBS" value="{$registro.CLIOBS}"></div></div>
                                <div class="form-group"><label for="DIAS_PRAZO" class="col-lg-2 control-label" >DIAS_PRAZO</label><div class="col-lg-10"><input type="text" id="DIAS_PRAZO"   class="form-control" name="DIAS_PRAZO" value="{$registro.DIAS_PRAZO}"></div></div>
                                <div class="form-group"><label for="CONTROLA_LIMITE" class="col-lg-2 control-label" >CONTROLA_LIMITE</label><div class="col-lg-10"><input type="text" id="CONTROLA_LIMITE"   class="form-control" name="CONTROLA_LIMITE" value="{$registro.CONTROLA_LIMITE}"></div></div>
                                <div class="form-group"><label for="BLOQUEIA_APOSLIMITE" class="col-lg-2 control-label" >BLOQUEIA_APOSLIMITE</label><div class="col-lg-10"><input type="text" id="BLOQUEIA_APOSLIMITE"   class="form-control" name="BLOQUEIA_APOSLIMITE" value="{$registro.BLOQUEIA_APOSLIMITE}"></div></div>
                                <div class="form-group"><label for="CLIIE" class="col-lg-2 control-label" >CLIIE</label><div class="col-lg-10"><input type="text" id="CLIIE"   class="form-control" name="CLIIE" value="{$registro.CLIIE}"></div></div>
                                <div class="form-group"><label for="CLICNP" class="col-lg-2 control-label" >CLICNP</label><div class="col-lg-10"><input type="text" id="CLICNP"   class="form-control" name="CLICNP" value="{$registro.CLICNP}"></div></div>
                                <div class="form-group"><label for="CLICPF" class="col-lg-2 control-label" >CLICPF</label><div class="col-lg-10"><input type="text" id="CLICPF"   class="form-control" name="CLICPF" value="{$registro.CLICPF}"></div></div>
                                <div class="form-group"><label for="CLIDCO" class="col-lg-2 control-label" >CLIDCO</label><div class="col-lg-10"><input type="text" id="CLIDCO"   class="form-control" name="CLIDCO" value="{$registro.CLIDCO}"></div></div>
                                <div class="form-group"><label for="PONTOS" class="col-lg-2 control-label" >PONTOS</label><div class="col-lg-10"><input type="text" id="PONTOS"   class="form-control" name="PONTOS" value="{$registro.PONTOS}"></div></div>
                                <div class="form-group"><label for="CONTROLA_PONTOS" class="col-lg-2 control-label" >CONTROLA_PONTOS</label><div class="col-lg-10"><input type="text" id="CONTROLA_PONTOS"   class="form-control" name="CONTROLA_PONTOS" value="{$registro.CONTROLA_PONTOS}"></div></div>

                            </form>            


                            <br>     



                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-default" onclick="btn_salvar_cliente()">Salvar cliente</button>
                                    <a href="/cliente" class="btn btn-primary">Voltar</a>
                                </div>
                            </div>            


                            </form>
                        </fieldset>
                    </div>
                    <!--fim do conteudo-->
                </div><!--/span-->
            </div><!--/row-->

            <hr>
            {$rodape}
        </div><!--/.fluid-container-->
    </body>
</html>
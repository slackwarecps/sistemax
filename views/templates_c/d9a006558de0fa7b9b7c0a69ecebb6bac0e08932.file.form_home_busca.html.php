<?php /* Smarty version Smarty-3.1.8, created on 2013-07-04 20:48:38
         compiled from "D:/wamp/www/www.sistemax.com.br/views/templates\home\form_home_busca.html" */ ?>
<?php /*%%SmartyHeaderCode:1201151d609d6616587-16632518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9a006558de0fa7b9b7c0a69ecebb6bac0e08932' => 
    array (
      0 => 'D:/wamp/www/www.sistemax.com.br/views/templates\\home\\form_home_busca.html',
      1 => 1372975188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1201151d609d6616587-16632518',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51d609d66cf664_91880331',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d609d66cf664_91880331')) {function content_51d609d66cf664_91880331($_smarty_tpl) {?><html>
    <?php echo $_smarty_tpl->getSubTemplate ('comuns/head2.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'xuxu'), 0);?>

    <body>
        <div id="pagina">
            <div id="esquerda">    
                <?php echo $_smarty_tpl->getSubTemplate ('comuns/esquerda.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
            </div>
            <div id="direita">
                <div class="topo">
                    <?php echo $_smarty_tpl->getSubTemplate ('comuns/topo.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
                </div>		
                <?php echo $_smarty_tpl->getSubTemplate ('comuns/info.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 

                <div id="conteudo">
                    <div class="painel_basico">
                        Painel Basico
                    
                    <!--conteudo-->    

                    <a class="box_home" href="index.php?op=sup_mcf&op2=lis_forn">Listar Fornecedor<br /><br />
                        <img src="/files/imagens/icones/clientes.gif" title="Listar Fornecedor" border="0" /></a>	
                    <a class="box_home" href="index.php?op=sup_mcf&op2=lis_forn&tipo_rel=inativos">Fornecedores inativos<br /><br />
                        <img src="/files/imagens/icones/clientes.gif" title="Listar Fornecedor inativos" border="0" /></a>	
                    <!--Fim do conteudo--> 
                    </div>
                </div>	   
            </div>		
        </div>
    </body>
</html>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.8, created on 2013-08-13 19:14:17
         compiled from "/home/fabioalvaro/www/sistemax//views/templates/home/form_home_busca.html" */ ?>
<?php /*%%SmartyHeaderCode:889274218520aafb95b1381-48350013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1233c425b3b8410256042f976daa226fe860de55' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax//views/templates/home/form_home_busca.html',
      1 => 1372947314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '889274218520aafb95b1381-48350013',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_520aafb95c40b3_45300693',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520aafb95c40b3_45300693')) {function content_520aafb95c40b3_45300693($_smarty_tpl) {?><html>
    <?php echo $_smarty_tpl->getSubTemplate ('comuns/head2.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>'xuxu'), 0);?>

    <body>
        <div id="pagina">
            <div id="esquerda">    
                <?php echo $_smarty_tpl->getSubTemplate ('comuns/esquerda.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
 
            </div>
            <div id="direita">
                <div class="topo">
                    <?php echo $_smarty_tpl->getSubTemplate ('comuns/topo.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
 
                </div>		
                <?php echo $_smarty_tpl->getSubTemplate ('comuns/info.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
 

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
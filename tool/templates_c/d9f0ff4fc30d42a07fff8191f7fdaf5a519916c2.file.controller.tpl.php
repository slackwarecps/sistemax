<?php /* Smarty version Smarty-3.1.13, created on 2013-11-28 15:07:47
         compiled from "modelos/controller.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12200018952977863304ea6-62929554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9f0ff4fc30d42a07fff8191f7fdaf5a519916c2' => 
    array (
      0 => 'modelos/controller.tpl',
      1 => 1385655384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12200018952977863304ea6-62929554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'entidade' => 0,
    'nome_campo_chave' => 0,
    'dir' => 0,
    'array_tratapost' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52977863383193_66631037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52977863383193_66631037')) {function content_52977863383193_66631037($_smarty_tpl) {?><<?php ?>?php

/*
 * Classe: <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
 Controller
 *
 */

class <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
 extends controller {
    var $campo_chave = '<?php echo $_smarty_tpl->tpl_vars['nome_campo_chave']->value;?>
';
    
  public function index_action() {    
    $this->template->fetchJS('/files/js/<?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
.js');
    $this->template->run();

    $model = new <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
Model();
    $sql = $this->campo_chave ." > 0 and (status<>0)";
    $<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
_lista = $model->getlista<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
($sql);  
    $this->smarty->assign('<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
_lista', $<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
_lista);  

    $this->smarty->display('<?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
/form_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
_busca.html');
  }

  public function busca_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
() {
    $texto = $_REQUEST['texto'];
    
    //var_dump($_REQUEST);die;

    sleep(1); //simula demora
    $model = new <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
Model();
    //Mude o zero pelo nome do campo a aser buscado....
    $sql = "upper(0) like upper('%" . $texto . "%') and (status<>0)";
    $resultado = $model->getlista<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
($sql);
    if (sizeof($resultado) > 0) {
      $this->smarty->assign('<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
_lista', $resultado);
      $tabela_html = $this->smarty->fetch('<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
/grid_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
.tpl');
      echo $tabela_html;
    } else {
      echo '<tr><td colspan="3">A Busca não retornou resultados.</td><tr>';
    }
  }
  
  //Novo Edita Registro
  public function novo_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
(){   
    $campo_chave = $this->getParam($this->campo_chave);
    $campo_chave = isset($campo_chave)?$campo_chave:NULL;
    $this->template->fetchJS('/files/js/<?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
.js');    
    $this->template->run();
    $model = new <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
Model();
    $registro = $model->get<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
($campo_chave);
    if (!is_null($campo_chave)){
      
    }
   // var_dump($registro);die;
    $this->smarty->assign('registro', $registro[0]);    
    $this->smarty->display('<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
/form_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
_novo.tpl');
  }
  
  
  //Gravar <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>

  public function gravar_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
() {
    $model = new <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
Model();
    $data = $this->trataPost($_POST);
    if ($data[$this->campo_chave] == NULL)
      $model->set<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
($data);
    else
      $model->upd<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
($data);
    return;
  }

  private function trataPost($post) {
    //$date = new date();
    <?php echo $_smarty_tpl->tpl_vars['array_tratapost']->value;?>
    
    return $data;
  }  
  
  //Remove
  public function del<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
() {
    $chave = $this->getParam($this->campo_chave);
    if (!is_null($chave)) {
      $model = new <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
Model();
      $dados[$this->campo_chave] = $chave;
      $retorno = $model->del<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
($dados);
      echo $retorno;
    }
  }  
  
}

?<?php ?>><?php }} ?>
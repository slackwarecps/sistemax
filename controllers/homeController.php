<?php

/*
 * Classe: home Controller
 *
 */

class home extends controller {

    var $campo_chave = 'id_departamento';

    public function __construct() {
       parent::__construct();
        //Verifica Sessao
        if (!isset($_SESSION['user']['email'])) {
            header('Location: /login/negado');
            exit();
        }
    }

    public function index_action() {
        //var_dump($_REQUEST);die;  
        $this->template->fetchJS('/files/js/home/home.js');
        $this->template->run();
        //$this->smarty->display('home/form_home_busca.html');
        $this->smarty->display('home/home.tpl');
    }

    public function busca_home() {
        $texto = $_REQUEST['texto'];



        sleep(1); //simula demora
        $model = new homeModel();
        //Mude o zero pelo nome do campo a aser buscado....
        $sql = "upper(0) like upper('%" . $texto . "%') and (status<>0)";
        $resultado = $model->getlistahome($sql);
        if (sizeof($resultado) > 0) {
            $this->smarty->assign('home_lista', $resultado);
            $tabela_html = $this->smarty->fetch('home/grid_home.tpl');
            echo $tabela_html;
        } else {
            echo '<tr><td colspan="3">A Busca não retornou resultados.</td><tr>';
        }
    }

    //Novo Edita Registro
    public function novo_home() {
        $campo_chave = $this->getParam($this->campo_chave);
        $campo_chave = isset($campo_chave) ? $campo_chave : NULL;
        $model = new homeModel();
        $registro = $model->gethome($campo_chave);
        if (!is_null($campo_chave)) {
            
        }
        // var_dump($registro);die;
        $this->smarty->assign('registro', $registro[0]);
        $this->smarty->display('home/form_home_novo.tpl');
    }

    //Gravar home
    public function gravar_home() {
        $model = new homeModel();
        $data = $this->trataPost($_POST);
        if ($data[$this->campo_chave] == NULL)
            $model->sethome($data);
        else
            $model->updhome($data);
        return;
    }

    private function trataPost($post) {
        //$date = new date();
        $data['id_departamento'] = isset($post['id_departamento']) ? $post['id_departamento'] : NULL;
        $data['id_sistema'] = isset($post['id_sistema']) ? $post['id_sistema'] : NULL;
        $data['codigo'] = isset($post['codigo']) ? $post['codigo'] : NULL;
        $data['descricao'] = isset($post['descricao']) ? $post['descricao'] : NULL;

        return $data;
    }

    //Remove
    public function delhome() {
        $chave = $this->getParam($this->campo_chave);
        if (!is_null($chave)) {
            $model = new homeModel();
            $dados[$this->campo_chave] = $chave;
            $retorno = $model->delhome($dados);
            echo $retorno;
        }
    }

}

?>
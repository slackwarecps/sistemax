<?php

/*
 * Classe: cliente Controller
 *
 */

class cliente extends controller {

    var $campo_chave = 'CLICOD';

    public function index_action() {
        $this->template->fetchJS('/files/js/cliente/cliente.js');
        $this->template->run();

        $model = new clienteModel();
        $sql = $this->campo_chave . " > 0 and (status<>0)";
        $cliente_lista = $model->getlistacliente($sql);
        $this->smarty->assign('cliente_lista', $cliente_lista);

        $this->smarty->display('cliente/form_cliente_busca.html');
    }

    public function busca_cliente() {
        $texto = $_REQUEST['texto'];
        //var_dump($_REQUEST);die;
        $model = new clienteModel();
        $sql = "upper(clinom) like upper('%" . $texto . "%')";
        $resultado = $model->getlistacliente($sql);
        if (sizeof($resultado) > 0) {
            $this->smarty->assign('cliente_lista', $resultado);
            $tabela_html = $this->smarty->fetch('cliente/grid_cliente.tpl');
            echo $tabela_html;
        } else {
            echo '<tr><td colspan="3">A Busca não retornou resultados.</td><tr>';
        }
    }

    public function busca_cliente_generico() {
        $texto = $_REQUEST['texto'];
        $model = new clienteModel();
        $sql = "upper(clinom) like upper('%" . $texto . "%')";
        $resultado = $model->getlistacliente($sql);
        if (sizeof($resultado) > 0) {
            $this->smarty->assign('cliente_lista', $resultado);
            $tabela_html = $this->smarty->fetch('cliente/grid_cliente_generico.tpl');
            echo $tabela_html;
        } else {
            echo '<tr><td colspan="2">A Busca não retornou resultados.</td><tr>';
        }
    }

    //Novo Edita Registro
    public function novo_cliente() {
        $this->template->fetchJS('/files/js/cliente/cliente.js');
        $this->template->run();
        $campo_chave = $this->getParam($this->campo_chave);
        $campo_chave = isset($campo_chave) ? $campo_chave : NULL;
        $model = new clienteModel();
        $registro = $model->getcliente(NULL, NULL, $campo_chave);
        if (!is_null($campo_chave)) {
            
        }
        $this->smarty->assign('registro', $registro[0]);
        $this->smarty->display('cliente/form_cliente_novo.tpl');
    }

    //Gravar cliente
    public function gravar_cliente() {
        $model = new clienteModel();
        $data = $this->trataPost($_POST);
        if ($data[$this->campo_chave] == NULL)
            $model->setcliente($data);
        else
            $model->updcliente($data);
        return;
    }

    private function trataPost($post) {
        //$date = new date();
        $data['CLICOD'] = ($post['CLICOD'] != '') ? $post['CLICOD'] : null;
        $data['CLINOM'] = ($post['CLINOM'] != '') ? $post['CLINOM'] : null;
        $data['CLIEND'] = ($post['CLIEND'] != '') ? $post['CLIEND'] : null;
        $data['CLICEP'] = ($post['CLICEP'] != '') ? $post['CLICEP'] : null;
        $data['CLIBAI'] = ($post['CLIBAI'] != '') ? $post['CLIBAI'] : null;
        $data['CLICID'] = ($post['CLICID'] != '') ? $post['CLICID'] : null;
        $data['CLIUF'] = ($post['CLIUF'] != '') ? $post['CLIUF'] : null;
        $data['CLIRG'] = ($post['CLIRG'] != '') ? $post['CLIRG'] : null;
        $data['CLILIM'] = ($post['CLILIM'] != '') ? $post['CLILIM'] : null;
        $data['status'] = ($post['status'] != '') ? $post['status'] : null;
        $data['CLIDNA'] = ($post['CLIDNA'] != '') ? $post['CLIDNA'] : null;
        $data['CLIDCA'] = ($post['CLIDCA'] != '') ? $post['CLIDCA'] : null;
        $data['CLIEMA'] = ($post['CLIEMA'] != '') ? $post['CLIEMA'] : null;
        $data['CLITIP'] = ($post['CLITIP'] != '') ? $post['CLITIP'] : null;
        $data['CLISIT'] = ($post['CLISIT'] != '') ? $post['CLISIT'] : null;
        $data['CLIFO1'] = ($post['CLIFO1'] != '') ? $post['CLIFO1'] : null;
        $data['CLIFO2'] = ($post['CLIFO2'] != '') ? $post['CLIFO2'] : null;
        $data['CLICLA'] = ($post['CLICLA'] != '') ? $post['CLICLA'] : null;
        $data['CLIOBS'] = ($post['CLIOBS'] != '') ? $post['CLIOBS'] : null;
        $data['DIAS_PRAZO'] = ($post['DIAS_PRAZO'] != '') ? $post['DIAS_PRAZO'] : null;
        $data['CONTROLA_LIMITE'] = ($post['CONTROLA_LIMITE'] != '') ? $post['CONTROLA_LIMITE'] : null;
        $data['BLOQUEIA_APOSLIMITE'] = ($post['BLOQUEIA_APOSLIMITE'] != '') ? $post['BLOQUEIA_APOSLIMITE'] : null;
        $data['CLIIE'] = ($post['CLIIE'] != '') ? $post['CLIIE'] : null;
        $data['CLICNP'] = ($post['CLICNP'] != '') ? $post['CLICNP'] : null;
        $data['CLICPF'] = ($post['CLICPF'] != '') ? $post['CLICPF'] : null;
        $data['CLIDCO'] = ($post['CLIDCO'] != '') ? $post['CLIDCO'] : null;
        $data['PONTOS'] = ($post['PONTOS'] != '') ? $post['PONTOS'] : null;
        $data['CONTROLA_PONTOS'] = ($post['CONTROLA_PONTOS'] != '') ? $post['CONTROLA_PONTOS'] : null;

        return $data;
    }

    //Remove
    public function delcliente() {
        $chave = $this->getParam($this->campo_chave);
        if (!is_null($chave)) {
            $model = new clienteModel();
            $dados[$this->campo_chave] = $chave;
            $retorno = $model->delcliente($dados);
            echo $retorno;
        }
    }

}

?>
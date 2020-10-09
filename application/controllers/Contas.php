<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Contas extends MY_Controller {
 
public function index()
    {
       echo 'Listas de Todas as Contas';   
    }

    public function pagar($mes = 0, $ano = 0) {
        //salva os dados da nova conta caso exista
        $this->load->model('ContasModel', 'conta');
        $this->conta->cria('pagar');

        //recupera alista de contas a pagar
        $v['lista'] = $this->conta->lista('pagar');
        $v['tipo']  = 'pagar';
        //carrega a view e passa a lista de contas
        $html = $this->load->view('contas/lista_contas', $v, true);

        //exibe esta view
        $this->show($html);
    }

    public function receber($mes = 0, $ano = 0){
        
    }

}


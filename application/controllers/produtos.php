<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

    public function index() {
        
        $this->load->model("produtos_model");

        $produtos = $this->produtos_model->buscarTodos();
        
        $this->load->helper(array("url","currency","form"));
        $dados = array("produtos" => $produtos);
        $this->load->view("produtos/index.php", $dados);
    }

}

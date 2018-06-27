<?php

class Produtos_model extends CI_model{
    //busca os dados da tabela produtos
    public function buscarTodos(){
        return $this->db->get("produtos")->result_array();
    }
}


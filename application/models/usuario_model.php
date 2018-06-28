<?php

class Usuario_model extends CI_model{
    public function salva($usuario){
        $this->db->insert("usuarios", $usuario);
    }
    
}
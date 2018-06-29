<?php

class Usuario_model extends CI_model{
    public function salva($usuario){
        $this->db->insert("usuarios", $usuario);
    }
    
    public function buscarPorEmailESenha($email, $senha){
        $this->db->where("email", $email);
        $this->db->where("senha", $senha);
        $usuario = $this->db->get("usuarios")->row_array();
        return $usuario;
    }
}
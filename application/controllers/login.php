<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    
    public function autenticar(){
        $this->load->model("usuario_model");
        $email = $this->input->post("email");
        $senha = md5($this->input->post("senha"));
        $usuario = $this->usuario_model->buscarPorEmailESenha($email, $senha);
        
        if($usuario){
            //criar o usuario da sessão
            $this->session->set_userdata("usuario_logado" , $usuario);
            $dados = array("mensagem" => "Logado com sucesso");
        }else{
            $dados = array("mensagem" => "Usuario ou senha inválida");
        }
        $this->load->view("login/autenticar",$dados);
    }
}


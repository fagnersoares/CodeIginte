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
            //cria uma sensao para a proxima requisao feita
            $this->session->set_flashdata("sucess", "Logado com sucesso");
        }else{
            $this->session->set_flashdata("danger", "Usuario ou senha inválida");
        }
        redirect('/');
    }
    
    public function logout(){
        $this->session->unset_userdata("usuario_logado");
        $this->session->set_flashdata("sucess", "Desalogado com sucesso");
         redirect('/');
    }
}


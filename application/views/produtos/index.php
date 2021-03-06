<html>
    <head>
        <title>teste 1233</title>
        <link rel="stylesheet" href="<?= base_url('css/bootstrap.css') ?>">
    </head>
    <body>
        <div class="container">
            
            <!--Mosta a mensagem que foi setada no flash -->
            <?php if($this->session->flashdata("sucess")) : ?>
                <p class=" alert alert-success"> <?php echo $this->session->flashdata("sucess") ?> </p>
            <?php endif ?>
            <?php if($this->session->flashdata("danger")) : ?>
                <p class="alert alert-danger"> <?php echo $this->session->flashdata("danger") ?> </p>
            <?php endif ?>
            
            <h1>Produtos</h1>
            <table class="table">
                <?php foreach ($produtos as $produto) : ?>
                    <tr>
                        <td><?php echo $produto["nome"] ?></td>
                        <td><?php echo numeroEmReais($produto["preco"]) ?></td>
                    </tr>  
                <?php endforeach ?>
            </table>
            
            <?php if($this->session->userdata("usuario_logado")) : ?>
                <?php echo anchor('produtos/formulario','Novo produto',array("class"=>"btn btn-primary"))?>
            
                <?php echo anchor('login/logout','Logout',array("class"=>"btn btn-primary"))?>
            
                <?php else : ?>
            <h1>Login</h1>
            <?php 
                echo form_open("login/autenticar");
                echo form_label("Email", "email");
                echo form_input(array(
                    "name" => "email",
                    "id" => "email",
                    "class" => "form-control",
                    "maxlength" => "255"
                ));
                
                echo form_label("Senha", "senha");
                echo form_password(array(
                    "name" => "senha",
                    "id" => "senha",
                    "class" => "form-control",
                    "maxlength" => "255"
                ));
                
                echo form_button(array(
                   "class" => "btn btn-primary",
                    "content" => "Login",
                    "type" => "submit"
                ));
                echo form_close();
                
            ?>
            
            <h1>Cadastro</h1>
            
            <?php 
                echo form_open("usuarios/novo");
                echo form_label("Nome", "nome");
                echo form_input(array(
                    "name"=>"nome",
                    "id"=>"nome",
                    "class"=>"form-control",
                    "maxlength"=>"255"
                ));
                
                echo form_label("Email", "email");
                echo form_input(array(
                    "name" => "email",
                    "id" => "email",
                    "class" => "form-control",
                    "maxlength" => "255"
                ));
                
                echo form_label("Senha", "senha");
                echo form_password(array(
                    "name" => "senha",
                    "id" => "senha",
                    "class" => "form-control",
                    "maxlength" => "255"
                ));
                
                echo form_button(array(
                   "class" => "btn btn-primary",
                    "content" => "Cadastrar",
                    "type" => "submit"
                ));
                
                echo form_close();
            ?>
            
            <?php endif ?>
        </div>
    </body>
</html>


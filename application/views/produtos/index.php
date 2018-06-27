<html>
    <head>
        <title>teste 1233</title>
        <link rel="stylesheet" href="<?= base_url('css/bootstrap.css') ?>">
    </head>
    <body>
        <div class="container">
            <h1>Produtos</h1>
            <table class="table">
                <?php foreach ($produtos as $produto) : ?>
                    <tr>
                        <td><?php echo $produto["nome"] ?></td>
                        <td><?php echo numeroEmReais($produto["preco"]) ?></td>
                    </tr>  
                <?php endforeach ?>
            </table>
            
            <h1>Cadastro</h1>
            
            <?php 
                echo form_open("usuario/novo");
                echo form_label("Nome", "nome");
                echo form_input(array(
                    "name"=>"nome",
                    "id"=>"nome",
                    "class"=>"form-control",
                    "maxlength"=>"255"
                ));
                
                echo form_close();
            ?>
        </div>
    </body>
</html>


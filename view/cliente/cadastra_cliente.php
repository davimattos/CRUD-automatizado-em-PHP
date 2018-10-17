<?php
    if(isset($_POST['submit'])) {

        require_once("../../controller/cliente.controller.class.php");
        require_once("../../model/cliente.class.php");

        //Criando as novas instancias das classes 
        $controller = new clienteController;
        $cliente = new Cliente;

        $cliente->setId($_POST['c_id']);
        $cliente->setNome($_POST['c_nome']);
        $cliente->setSobrenome($_POST['c_sobrenome']);
        $cliente->setEmail($_POST['c_email']);
        $cliente->setTelefone($_POST['c_telefone']);
        $cliente->setCelular($_POST['c_celular']);
        $cliente->setEndereco($_POST['c_endereco']);
        $cliente->setNumero($_POST['c_numero']);
        $cliente->setBairro($_POST['c_bairro']);
        $cliente->setId_cidade($_POST['c_idcidade']);
        $cliente->setCpf($_POST['c_cpf']);
        $cliente->setComplemento($_POST['c_complemento']);

        $controller->save($cliente);
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Cadastra cliente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <header>
        <h1>Cadastro de clientes</h1>
    </header>

    <section>
        <div>
            <form action="cadastra_cliente.php" method="POST">
                <input type="text" name="c_id" placeholder="Id"><br>
                <input type="text" name="c_nome" placeholder="Nome"><br>
                <input type="text" name="c_sobrenome" placeholder="Sobrenome"><br>
                <input type="email" name="c_email" placeholder="Email"><br>
                <input type="text" name="c_telefone" placeholder="Telefone"><br>
                <input type="text" name="c_celular" placeholder="Celular"><br>
                <input type="text" name="c_endereco" placeholder="Endereco"><br>
                <input type="text" name="c_numero" placeholder="Numero"><br>
                <input type="text" name="c_bairro" placeholder="Bairro"><br>
                <input type="text" name="c_idcidade" placeholder="ID Cidade"><br>
                <input type="text" name="c_cpf" placeholder="CPF"><br>
                <input type="text" name="c_complemento" placeholder="Complemento"><br>
                <input type="submit" name="submit" value="salvar">
            </form>
        </div>   
    </section>

</body>
</html>
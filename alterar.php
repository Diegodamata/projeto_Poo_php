<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/alteerei.css">
    <title>Home Care</title>
</head>
<body>
    <div class="voltar">
        <a href="login.php">Voltar</a>
    </div>

    <div class="container">
        <form action="alterar.php" method="post" class="form">
            <div class="alterar">
                <h1> Alteração de Senha</h1>
            </div>
            <div>
                <input type="text" name="cpf" placeholder="Informe o Cpf">
            </div>
            <div>
                <input type="password" name="senha" placeholder="Nova Senha">
            </div>
            <div>
                <input type="password" name="confirma-senha" placeholder="Confirmar Nova Senha">
            </div>
            <div class="button">
                <button type="submit" name="send" >Alterar Senha</button>
            </div>
        </form>
    </div>
</body>
</html>

<?php
    //  CR(U)D - update

    //verificando se existe o metodo post 'send'
    if(isset($_POST['send'])){
        //se existir ira incluir as classes
        include('classe/Alterar.php');
        include('classe/Db.class.php');

        //instancia da classe Alterar
        $alterar = new Alterar();

        $db  = new Db();
        $db->conectar();
        $db->setTabela("usuarios");

        //validando para o usuario não alterar os campos com eles vazios
        if(empty($_POST['cpf']) ) {
            echo '<div class="resposta">Informe o CPF </div>';
            exit();
        }
        if(empty($_POST['senha']) ) {
            echo '<div class="resposta">Informe a Senha </div>';
            exit();
        } elseif ($_POST['senha'] !== $_POST['confirma-senha']) {
            echo '<div class="resposta">As senhas não coincidem </div>';
            exit();
        }

        //passo para a classe Alterar o cpf e a senha nova
        $alterar->setCpf($_POST['cpf']);
        $alterar->setSenha($_POST['senha']);

        //aqui estou dizendo o campo que eu quero alterar, acesse o banco vai no usuario que tem esse cpf e altere a senha 
        // colocando a nova passada pelo usuario
        $where = ['cpf', $_POST['cpf']];
        $dados = ['senha' => $alterar->getSenha()];

        //se não der nenhum erro ira mostrar a msg de sucesso
        if ($db->alterar($where, $dados)) {
            echo "<script>alert('Senha Alterada com Sucesso!'); window.location.href = 'login.php';</script>";
        }

    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="./css/cad.css" >
    <title>Home Care</title>
    <style>
        .erro{
            text-align: center;
            font-size: 20px;
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    
    <div class="voltar">
        <a href="index.php">Voltar</a>
     </div>
    <form action="cadastro.php" method="post" enctype="multipart/form-data">
        <div class="form">
            <div class="login">
                <p>Cadastre-se</p>
            </div>
            <div>
                <input type="text" name="cpf" id="cpf"  placeholder="CPF:">
            </div>

            <div>
                <input type="text" name="nome" id="nome"  placeholder="Nome Completo:">
            </div>

            <div>
                <input type="text" name="celular" id="celular"  placeholder="Celular:">
            </div>

            <div>
                <input type="email" name="email" id="email" placeholder="E-mail:">
            </div>
            <div>
                <input type="text" name="login" id="login" placeholder="Usuário:">
            </div>
            <div>
                <input type="text" name="senha" id="senha" placeholder="Senha:">
            </div>

            <div>
                <button type="submit" name="send" class="button">Cadastrar</button>
            </div>
        </div>
    </form>

<?php

//verificando se existe o metodo post send
if(isset($_POST['send'])){

    //validando para o usuario não fazer um cadastro com algum campo vazio
    if(empty($_POST['cpf']) || empty($_POST['nome']) || empty($_POST['celular']) || empty($_POST['email']) || empty($_POST['login']) || empty($_POST['senha'])){
        echo '<div class="erro"> Os Campos Não Pode Estar Vazios! </div>';
        exit();
    }else{

        //incluindo as classes
        include("classe/Cadastro.class.php");
        include("classe/Db.class.php");
    
        $db  = new Db();
        $db->conectar();
        $db->setTabela("usuarios");
    
        //(C)RUD - Create
        $cadastro = new Cadastro();
        $cadastro->setCpf($_POST['cpf']);
        $cadastro->setNome($_POST['nome']);
        $cadastro->setCelular($_POST['celular']);
        $cadastro->setEmail($_POST['email']);
        $cadastro->setLogin($_POST['login']);
        $cadastro->setSenha(md5($_POST['senha']));
       
        //grvando no banco de dados
        $cadastro -> gravar($db);
    
        /*$where = "idusuarios = '65'";
        $cadastro->excluir($db, $where);*/
        echo "<script type='text/javascript'>
                alert('Usuário Cadastrado com Sucesso!');
                window.location.href = 'login.php';
              </script>";
        exit();
        
    }

}

?>
</body>
</html>
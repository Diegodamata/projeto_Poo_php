
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link href="./css/entrarr.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="voltar">
        <a href="index.php">Voltar</a>
    </div>

    <form method="post" action="login.php" >
        <div class="form">
			<div class="login">
                <img src="./img/casa.webp" alt="">
            </div>
		    <div>
			    <input type="text" id="login" class="login" name="login" placeholder="E-mail:">
                
			</div>

			<div>
			    <input type="password" class="password" id="senha" name="senha" placeholder="Senha:">
                
			</div>

            <div>
                <button type="submit" name="send" class="button">Entrar</button>
            </div>
  
            <div>
                <a href="alterar.php" class="alterar-senha">Esqueceu a Senha?</a>
            </div>
        </div>
	</form>

   <?php

    // verificando se existe o metodo post 'send' do formulario que esta no button enviar
    if(isset($_POST['send'])){
       
        // validando os inputs se o usuario apertar entrar e o login e senha do usuario estiver vazio ira mostrar os erros
        if(empty($_POST['login'])){
            echo '<div class="erro"> Informe o E-mail! </div>';
            exit();
        }
        if(empty($_POST['senha'])){
            echo '<div class="erro"> Informe a Senha! </div>';
            exit();
        }
        

        //incluindo as classe login e Db
        include('classe/Login.class.php');
        include('classe/Db.class.php');

        //criei um objeto banco de dados
        $db  = new Db();
        $db->conectar();
        $db->setTabela("usuarios");

        //criei uma instancia de login
        $login = new Login();

        //atribui os valores informados pelo usuario aos atributos de login
        $login->setLogin($_POST['login']);
        $login->setSenha(md5($_POST['senha']));

        //criei o campos passando os campos que eu quero acessar no banco de dados
        $campos = "login, senha";
        //$where = "";

        //login e senha informada pelo usuario 
        $usuario = $_POST['login'];
        $senha = md5($_POST['senha']);
        
        
        //chamei a função consultar e passei o meu banco, o campo que eu quero acessar no banco
        //e o meu usuario e senha para comparar se existe no banco
        $login->consultar($db, $campos, $usuario, $senha);
    }

   ?>
</body>
</html>
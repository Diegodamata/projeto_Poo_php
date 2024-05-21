
<?php

class Login{

    private $email;
    private $senha;

    public function setLogin($email){
        $this->email = $email;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function consultar (Db $db, $campos, $login, $senha){
        $dados = $db->consultar($campos);

        if(empty($dados)){
            echo '<div class="erro">Usuário e senha inválidos.</div>';
        }else{
            // Verifica se o usuário e a senha estão corretos
            $usuarioEncontrado = false;

            foreach($dados as $row) {
                if($row['login'] === $login && $row['senha'] === $senha) {
                    $usuarioEncontrado = true;
                    break;
                }
            }
    
            if(!$usuarioEncontrado) {
                // Redireciona para a página principal
                echo '<div class="erro">Usuário e senha inválidos.</div>';
            } else{
                header('Location: principal.php');
            }
        }
    }
}
?>
<?php

//classe que serve para alterar a senha do usuario
class Alterar{

    private $cpf;
    private $senha;

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function setSenha($senha){
        $this->senha = md5($senha);
    }

    public function getSenha() {
        return $this->senha;
    }
}


?>
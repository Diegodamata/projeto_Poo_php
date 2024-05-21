<?php

class Cadastro{

    private $idusuarios;
    private $cpf;
    private $nome;
    private $celular;
    private $email;
    private $login;
    private $senha;

     //getters e (setters)
     public function setCpf($cpf){
        $this -> cpf = $cpf;
    }

    public function setNome($nome){
        $this -> nome = $nome;
    }

    public function setCelular($celular){
        $this -> celular = $celular;
    }

    public function setEmail($email){
        $this -> email = $email;
    }

    public function setLogin($login){
        $this -> login = $login;
    }

    public function setSenha($senha){
        $this -> senha = $senha;
    }

     //método que irá gravar no banco de dados
     public function gravar(Db $db){
        $dados = [];
        $dados["cpf"]       = $this -> cpf;
        $dados["nome"]      = $this -> nome;
        $dados["celular"]   = $this -> celular;
        $dados["email"]     = $this -> email;
        $dados["login"]     = $this -> login;
        $dados["senha"]     = $this -> senha;

        //chamando a função gravar do banco de dados
        $db -> gravar($dados);
    }

    public function excluir(Db $db, $where){
        $db->excluir($where);
    }
}
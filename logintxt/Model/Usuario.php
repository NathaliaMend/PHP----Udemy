<?php

class Usuario {

    private $nome;  //a variável é um atributo
    private $email;
    private $senha;
    private $data;

    //set = Atribuir
    //get = Obter

    public function setNome($nome) {  //Function é um Método
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function getData() {
        return $this->data;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setData($data) {
        $this->data = $data;
    }
}

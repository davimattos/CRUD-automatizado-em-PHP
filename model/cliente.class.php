<?php

class Cliente {

    //Atributos
    private $id;
    private $nome;
    private $sobrenome;
    private $email;
    private $telefone;
    private $celular;
    private $endereco;
    private $numero;
    private $bairro;
    private $id_cidade;
    private $cpf;
    private $complemento;

    //Getter
    public function getId() {
        return $this->id;
    }

    //Setter
    public function setId($id) {
        $this->id = id;
    }
    //Getter
    public function getNome() {
        return $this->nome;
    }

    //Setter
    public function setNome($nome) {
        $this->nome = nome;
    }

    //Getter
    public function getSobrenome() {
        return $this->sobrenome;
    }

    //Setter
    public function setSobrenome($sobrenome) {
        $this->sobrenome = sobrenome;
    }

    //Getter
    public function getEmail() {
        return $this->email;
    }

    //Setter
    public function setEmail($email) {
        $this->email = email;
    }

    //Getter
    public function getTelefone() {
        return $this->telefone;
    }

    //Setter
    public function setTelefone($telefone) {
        $this->telefone = telefone;
    }

    //Getter
    public function getCelular() {
        return $this->celular;
    }

    //Setter
    public function setCelular($celular) {
        $this->celular = celular;
    }

    //Getter
    public function getEndereco() {
        return $this->endereco;
    }

    //Setter
    public function setEndereco($endereco) {
        $this->endereco = endereco;
    }

    //Getter
    public function getNumero() {
        return $this->numero;
    }

    //Setter
    public function setNumero($numero) {
        $this->numero = numero;
    }

    //Getter
    public function getBairro() {
        return $this->bairro;
    }

    //Setter
    public function setBairro($bairro) {
        $this->bairro = bairro;
    }

    //Getter
    public function getId_cidade() {
        return $this->id_cidade;
    }

    //Setter
    public function setId_cidade($id_cidade) {
        $this->id_cidade = id_cidade;
    }

    //Getter
    public function getCpf() {
        return $this->cpf;
    }

    //Setter
    public function setCpf($cpf) {
        $this->cpf = cpf;
    }

    //Getter
    public function getComplemento() {
        return $this->complemento;
    }

    //Setter
    public function setComplemento($complemento) {
        $this->complemento = complemento;
    }
}

?>
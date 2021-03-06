<?php
/*
*    Descrição do arquivo
*     @autor - Davi Mizael
*     @data de criação -09/10/2018 08:12:01
*     @arquivo - Clientes.class.php
*/

class Clientes {

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


//Getters

public function getId() {
     return $this->id;
}

public function getNome() {
     return $this->nome;
}

public function getSobrenome() {
     return $this->sobrenome;
}

public function getEmail() {
     return $this->email;
}

public function getTelefone() {
     return $this->telefone;
}

public function getCelular() {
     return $this->celular;
}

public function getEndereco() {
     return $this->endereco;
}

public function getNumero() {
     return $this->numero;
}

public function getBairro() {
     return $this->bairro;
}

public function getId_cidade() {
     return $this->id_cidade;
}

public function getCpf() {
     return $this->cpf;
}

public function getComplemento() {
     return $this->complemento;
}



//Setters

public function setId($id) {
$this->id = $id;
}

public function setNome($nome) {
$this->nome = $nome;
}

public function setSobrenome($sobrenome) {
$this->sobrenome = $sobrenome;
}

public function setEmail($email) {
$this->email = $email;
}

public function setTelefone($telefone) {
$this->telefone = $telefone;
}

public function setCelular($celular) {
$this->celular = $celular;
}

public function setEndereco($endereco) {
$this->endereco = $endereco;
}

public function setNumero($numero) {
$this->numero = $numero;
}

public function setBairro($bairro) {
$this->bairro = $bairro;
}

public function setId_cidade($id_cidade) {
$this->id_cidade = $id_cidade;
}

public function setCpf($cpf) {
$this->cpf = $cpf;
}

public function setComplemento($complemento) {
$this->complemento = $complemento;
}

}
?>
<?php
/*
*    Descrição do arquivo
*     @autor - Davi Mizael
*     @data de criação -25/09/2018 10:26:04
*     @arquivo - Produtos.class.php
*/

class Produtos {

//Atributos
private $id;
private $nome;
private $fornecedor;
private $valor;
private $descricao;


//Getters

public function getId() {
     return $this->id;
}

public function getNome() {
     return $this->nome;
}

public function getFornecedor() {
     return $this->fornecedor;
}

public function getValor() {
     return $this->valor;
}

public function getDescricao() {
     return $this->descricao;
}



//Setters

public function setId($id) {
$this->id = $id;
}

public function setNome($nome) {
$this->nome = $nome;
}

public function setFornecedor($fornecedor) {
$this->fornecedor = $fornecedor;
}

public function setValor($valor) {
$this->valor = $valor;
}

public function setDescricao($descricao) {
$this->descricao = $descricao;
}

}
?>
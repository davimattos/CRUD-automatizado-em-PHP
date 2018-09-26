<?php
/*
*    Descrição do arquivo
*     @autor - Davi Mizael
*     @data de criação -25/09/2018 10:26:04
*     @arquivo - Vendas.class.php
*/

class Vendas {

//Atributos
private $id;
private $url;
private $tipo;
private $imovel;
private $cidade;
private $terreno;
private $construcao;
private $descricao;


//Getters

public function getId() {
     return $this->id;
}

public function getUrl() {
     return $this->url;
}

public function getTipo() {
     return $this->tipo;
}

public function getImovel() {
     return $this->imovel;
}

public function getCidade() {
     return $this->cidade;
}

public function getTerreno() {
     return $this->terreno;
}

public function getConstrucao() {
     return $this->construcao;
}

public function getDescricao() {
     return $this->descricao;
}



//Setters

public function setId($id) {
$this->id = $id;
}

public function setUrl($url) {
$this->url = $url;
}

public function setTipo($tipo) {
$this->tipo = $tipo;
}

public function setImovel($imovel) {
$this->imovel = $imovel;
}

public function setCidade($cidade) {
$this->cidade = $cidade;
}

public function setTerreno($terreno) {
$this->terreno = $terreno;
}

public function setConstrucao($construcao) {
$this->construcao = $construcao;
}

public function setDescricao($descricao) {
$this->descricao = $descricao;
}

}
?>
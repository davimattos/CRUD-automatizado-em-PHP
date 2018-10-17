<?php
/*
*    Descrição do arquivo
*     @autor - Davi Mizael
*     @data de criação -09/10/2018 08:12:01
*     @arquivo - Populacao.class.php
*/

class Populacao {

//Atributos
private $id;
private $municipiocompleto;
private $populacao;


//Getters

public function getId() {
     return $this->id;
}

public function getMunicipiocompleto() {
     return $this->municipiocompleto;
}

public function getPopulacao() {
     return $this->populacao;
}



//Setters

public function setId($id) {
$this->id = $id;
}

public function setMunicipiocompleto($municipiocompleto) {
$this->municipiocompleto = $municipiocompleto;
}

public function setPopulacao($populacao) {
$this->populacao = $populacao;
}

}
?>
<?php
/*
*    Descrição do arquivo
*     @autor - Davi Mizael
*     @data de criação -09/10/2018 08:12:01
*     @arquivo - Municipios.class.php
*/

class Municipios {

//Atributos
private $uf;
private $nomedauf;
private $mesorregiaogeografica;
private $nomemesorregiaogeografica;
private $microrregiaogeografica;
private $nomemicrorregiao;
private $municipio;
private $municipiocompleto;
private $nomemunicipio;


//Getters

public function getUf() {
     return $this->uf;
}

public function getNomedauf() {
     return $this->nomedauf;
}

public function getMesorregiaogeografica() {
     return $this->mesorregiaogeografica;
}

public function getNomemesorregiaogeografica() {
     return $this->nomemesorregiaogeografica;
}

public function getMicrorregiaogeografica() {
     return $this->microrregiaogeografica;
}

public function getNomemicrorregiao() {
     return $this->nomemicrorregiao;
}

public function getMunicipio() {
     return $this->municipio;
}

public function getMunicipiocompleto() {
     return $this->municipiocompleto;
}

public function getNomemunicipio() {
     return $this->nomemunicipio;
}



//Setters

public function setUf($uf) {
$this->uf = $uf;
}

public function setNomedauf($nomedauf) {
$this->nomedauf = $nomedauf;
}

public function setMesorregiaogeografica($mesorregiaogeografica) {
$this->mesorregiaogeografica = $mesorregiaogeografica;
}

public function setNomemesorregiaogeografica($nomemesorregiaogeografica) {
$this->nomemesorregiaogeografica = $nomemesorregiaogeografica;
}

public function setMicrorregiaogeografica($microrregiaogeografica) {
$this->microrregiaogeografica = $microrregiaogeografica;
}

public function setNomemicrorregiao($nomemicrorregiao) {
$this->nomemicrorregiao = $nomemicrorregiao;
}

public function setMunicipio($municipio) {
$this->municipio = $municipio;
}

public function setMunicipiocompleto($municipiocompleto) {
$this->municipiocompleto = $municipiocompleto;
}

public function setNomemunicipio($nomemunicipio) {
$this->nomemunicipio = $nomemunicipio;
}

}
?>
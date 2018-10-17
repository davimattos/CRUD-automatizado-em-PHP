<?php

//Inclui a classe genérica CRUD
include_once("../../functions/crud.class.php");

class clienteController extends crud {

    //Método construtor
    public function __construct() {
        //Passa como parametro a tabela
        parent::__construct("Cliente");
    }

    //Método específico
    public function listaOrdenada() {
        return $this->execute_query("SELECT * FROM Cliente ORDER BY nome;");
    }
}

?>
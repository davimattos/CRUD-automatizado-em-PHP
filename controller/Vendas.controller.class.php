<?php
/*
*    Descrição do arquivo
*     @autor - Davi Mizael
*     @data de criação -09/10/2018 08:12:01
*     @arquivo - Vendas.controller.class.php
*/

//Inclui a classe generica CRUD
require_once("../../functions/crud.class.php");

class VendasController extends Crud {

//Método construtor
 public function __construct() {
//Passa como parametro a tabela
     parent::__construct("Vendas");
 }

 public function listaVendas() {
     return $this->execute_query("SELECT * FROM Vendas");
 }}
?>
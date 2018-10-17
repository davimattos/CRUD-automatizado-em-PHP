<?php
/*
*    Descrição do arquivo
*     @autor - Davi Mizael
*     @data de criação -09/10/2018 08:12:01
*     @arquivo - Clientes.controller.class.php
*/

//Inclui a classe generica CRUD
require_once("../../functions/crud.class.php");

class ClientesController extends Crud {

//Método construtor
 public function __construct() {
//Passa como parametro a tabela
     parent::__construct("Clientes");
 }

 public function listaClientes() {
     return $this->execute_query("SELECT * FROM Clientes");
 }}
?>
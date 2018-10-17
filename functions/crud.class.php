<?php 
/*
 * 	Descrição do Arquivo
 * 	@author - Davi Mizael
 * 	@date - 
 * 	@file - functions/crud.class.php
 * 	@description  - Classe genérica do Crud
 */

//Importa as classes
require_once("../../functions/reflection.class.php");
require_once("../../functions/connection.class.php");

abstract class Crud {

	//Atributos
    private $tabela;

	//Construtor
    public function __construct($tabela) {
        $this->tabela = $tabela;
    }

	//Get
    public function getTabela() {
        return $this->tabela;
    }

    /**
     *
     * @method save
     * @param $object (Objeto que será persitido no banco de dados)
     * @return true || false
     *
     * */
    public function save($object) {

        $ref = new Reflections();
        $values = $ref->convert($object);

        $sql = "insert into " . $this->tabela;
        $sql .= " (" . implode(",", $values['fields']) . ") VALUES ( ";

        $size = count($values['fields']);
        $loop = 1;

        for ($j = 0; $j < $size; $j++) {
            $sql .= $ref->get_value_by_type($values['values'][$j]);
            $sql .= ($loop < $size) ? "," : "";
            $loop++;
        }

        $sql .= " ) ;";

		$this->execute_query($sql);

		$sqlmax = "select MAX(id) as ultimo from ".$this->tabela;
		$ressave = $this->execute_query($sqlmax);
		$regsave = mysqli_fetch_array($ressave);

        return $regsave["ultimo"];
    }

    /**
     *
     * @method update
     * @param $object (Objeto que será persitido no banco de dados)
     * @param $attr (Atributo usado na condição where)
     * @return true || false
     *
     * */
    public function update($object, $attr) {

        if (empty($attr))
            return false;

        $ref = new Reflections();
        $values = $ref->convert($object);

        $sql = "update " . $this->tabela . " set ";

        $size = count($values['fields']);
        $loop = 1;

        for ($j = 0; $j < $size; $j++) {

            if ($values['fields'][$j] != $attr) {
                $sql .= $values['fields'][$j] . ' = ' . $ref->get_value_by_type($values['values'][$j]);
                $sql .= ($loop < $size) ? ", " : " ";
            }
            $loop++;
        }

        $attribute = $ref->get_value_by_type($values['values'][array_search($attr, $values['fields'])]);

        $sql .= "where " . $attr . " = " . $attribute . " ;";

        return $this->execute_query($sql);
    }

    /**
     *
     * @method remove
     * @param $value (valor que será usado na condição where)
     * @param $attr (Atributo usado na condição where)
     * @return true || false
     *
     * */
    public function remove($value, $attr) {

        if (empty($attr))
            return false;

        $sql = "delete from " . $this->tabela . " where " . $attr . " = " . $value . " ;";

        return $this->execute_query($sql);
    }
    
    
    /**
     *
     * @method inactivate
     * @param $value (valor que será usado na condição where)
     * @param $attr (Atributo usado na condição where)
     * @return true || false
     *
     * */
    public function inactivate($value, $attr) {

        if (empty($attr))
            return false;

        $sql = "update " . $this->tabela . " set status = 0 where " . $attr . " = " . $value . " ;";

        return $this->execute_query($sql);
    }
    

    /**
     *
     * @method load
     * @param $value (valor que será usado na condição where)
     * @param $attr (Atributo usado na condição where)
     * @return false || Array
     *
     * */
    public function load($value, $attr) {

        if (empty($attr))
            return false;

        $sql = "select * from " . $this->tabela . " where " . $attr . " = " . $value . " ;";

        return mysqli_fetch_assoc($this->execute_query($sql));
    }

    /**
     *
     * @method loadObject
     * @param $value (valor que será usado na condição where)
     * @param $attr (Atributo usado na condição where)
     * @return false || Object
     *
     * */
    public function loadObject($value, $attr) {

        if (empty($attr))
            return false;

        $sql = "select * from " . $this->tabela . " where " . $attr . " = " . $value . " ;";

        return mysqli_fetch_object($this->execute_query($sql), $this->tabela);
    }

    
    /**
     *
     * @method execute_query
     * @param $sql (SQL Script que será executado no banco)
     * @return true || false
     *
     * */
    public function execute_query($sql) {
		
        $conn = new Connection;
        $conn->openConnection();
        $executed = mysqli_query($conn->getConnection(),$sql)or die("Erro: ". mysqli_error($conn->getConnection()). " na query ". $sql);
		$conn->closeConnection();
		
		return $executed;
    }
}
?>
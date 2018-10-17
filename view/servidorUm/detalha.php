<?php

header("Content-type: application/json; charset=utf-8");

//recebe o parametro via URL
$codigo = $_GET["codigo"];

//Inclui as classes controladoras
require_once("../../controller/Municipios.controller.class.php");

//Criando as novas intâncias das classes
$controller = new MunicipiosController;

//Método de listagem
$registros = $controller->municipioPorCodigo($codigo);

//Verifica se retornou algo
if(mysqli_num_rows($registros)>0) {

    //Prepara o array que receberá o JSON
    $json = array();

    while($reg=mysqli_fetch_array($registros)) {
        //Adiciono os itens no JSON
        array_push($json, $reg);
    }

    //Exibo o JSON
    echo json_encode($json);
}
?>
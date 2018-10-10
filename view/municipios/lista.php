<?php

//recebe o parametro via URL
$estado = $_GET["estado"];

//Inclui as classes controladoras
require_once("../../controller/Municipios.controller.class.php");

//Criando as novas intâncias das classes
$controller = new MunicipiosController;

//Método de listagem
$registros = $controller->cidadesPorEstado($estado);

//Verifica se retornou algo
if(mysqli_num_rows($registros)>0) {
    while($reg=mysqli_fetch_array($registros)) {
        echo "- ".$reg['nomemunicipio']."<br>";
    }
}
?>
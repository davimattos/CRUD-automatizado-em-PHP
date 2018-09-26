<?php

//Opcional
ini_set('display_errors', 1);
ini_set('log_erros', '');
ini_set('error_log', dirname(__FILE__).'/error_log.txt');
error_reporting(E_ALL);
date_default_timezone_set("Brazil/East");

$parameters = array("host"=>"localhost", "user"=>"root","password"=>"yes","database"=>"projeto");
$conecta = mysqli_connect($parameters["host"],$parameters["user"],$parameters["password"]);
mysqli_select_db($conecta, $parameters["database"]);

//Opcional
mysqli_query($conecta, "SET NAMES 'utf8'");
mysqli_query($conecta, "SET character_set_connection=utf8");
mysqli_query($conecta, "SET character_set_client=utf8");
mysqli_query($conecta, "SET character_set_results=utf8");


$sql = "SHOW TABLES";
$result = mysqli_query($conecta, $sql);
?>

<?php
while($reg = mysqli_fetch_array($result)){
?>    

<?php 
echo "-".$reg[0]."<br>"; 

//Listar arquivo
$sqlB = "SHOW COLUMNS FROM ".$reg[0];
$resultB = mysqli_query($conecta, $sqlB);
$resultC = mysqli_query($conecta, $sqlB);
$resultD = mysqli_query($conecta, $sqlB);

//Criar Arquivo
$nome = "../model/".$reg[0].".class.php";

$conteudo ="<?php";
$conteudo .="\n/*";
$conteudo .="\n*    Descrição do arquivo";
$conteudo .="\n*     @autor - Davi Mizael";
$conteudo .="\n*     @data de criação -".date("d/m/Y h:i:s")."";
$conteudo .="\n*     @arquivo - ".$reg[0].".class.php";
$conteudo .="\n*/";
$conteudo .="\n";
$conteudo .="\n";
$conteudo .="class ".$reg[0]." {";
$conteudo .="\n";
$conteudo .="\n//Atributos";
$conteudo .="\n";


while($regB = mysqli_fetch_array($resultB)) {
    $conteudo .= "private $".$regB[0].";\n";
}

$conteudo .="\n\n//Getters\n\n";

while($regC = mysqli_fetch_array($resultC)) {
    $conteudo .= "public function get".ucfirst($regC[0]."() {\n     return \$this->".$regC[0].";\n}\n\n");
}

$conteudo .="\n\n//Setters\n\n";

while($regD = mysqli_fetch_array($resultD)) {
    $conteudo .= "public function set".ucfirst($regD[0])."(\$".$regD[0].") {\n\$this->".$regD[0]." = \$".$regD[0].";\n}\n\n";
}

$conteudo .= "}";
$conteudo .= "\n";
$conteudo .= "?>";

$file = fopen($nome, 'a');
fwrite($file, $conteudo);
fclose($file);

//Fim

?>

<?php
}
?>
<?php

$parameters = array("host"=>"localhost","user"=>"root","password"=>"yes","database"=>"projeto");
$connecta = mysqli_connect($parameters["host"], $parameters["root"],
$parameters["yes"]);

mysqli_select_db($connecta, $parameters["database"]);
$sql = "SELECT * FROM Venda";
$result = mysqli_query($connecta, $sql);
$resultB = mysqli_fetch_array($result);

echo $resultB;

$cURL = curl_init();
curl_setopt($cURL, CURLOPT_URL, "http://www.widehaus/curl/exibe.php");
curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
curl_setopt($cURL, CURLOPT_REFERER, "http://localhost:8080/venda/venda.php");


$post = array(
    "url" => $resultB["url"],
    "tipo" => $resultB["imovel"],
    "imovel" => $resultB["cidade"],
    "cidade" => $resultB["cidade"],
    "terreno" => $resultB["terreno"],
    "construcao" => $resultB["construcao"],
    "descricao" => $resultB["descricao"],

);

curl_setopt($cURL, CURLOPT_POST, true);
curl_setopt($cURL, CURLOPT_POSTFIELDS, $post);

$resultado = curl_exec($cURL);

echo $resultado;

curl_close($cURL);
?>
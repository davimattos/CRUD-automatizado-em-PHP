<?php
#Vamos colocar o caminho da action do formulario, ou seja, o script que vai receber o POST
$cURL = curl_init();
curl_setopt($cURL, CURLOPT_URL, "http://localhost:8080/curl/recebe.php");
curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
curl_setopt($cURL, CURLOPT_REFERER, "http://localhost:8080/curl/envia.php");

#Vamos criar um array, com as informações que queremos enviar
#Exemplo <input type="text" name="campo_nome"
#Usaremos o name, então "campo_nome" => "Davi"
$post = array(
    "nome" => "Davi Mizael",
    "email" => "davi@email.com",
    "mensagem" => "Teste Curl"
);

#Vamos mandar os dados via POST
curl_setopt($cURL, CURLOPT_POST, true);
#Agora vamos passar o array ($POST), vão ser passador pelo POST
curl_setopt($cURL, CURLOPT_POSTFIELDS, $post);

#Executamos o curl
$resultado = curl_exec($cURL);

echo $resultado;

#Fechamos o cURL
curl_close($cURL);
?>
<?php

$ch = curl_init();

//informar URL e outras funções ao CURL
curl_setopt($ch, CURLOPT_URL, "http://www.joogle.com.br/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//acessar URL
$output = curl_exec($ch);
//pegar o código da resposta
$response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//Not Found?
if($response_code == "404") {
    echo "Página não existe";
} else {
    echo $output;
}

?>
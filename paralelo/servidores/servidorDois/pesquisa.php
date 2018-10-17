<html>
    <header>
        <title>Teste</title>
    </header>
    <body>
        <form method="POST">
            <input name="expressao" placeholder="Digite aqui sua expressao">
            <input type="submit" value="Buscar"><br>
        </form>
    </body>
</html>

<?php

$expressao = $_POST["expressao"];

if($expressao) {
    $curl = curl_init("http://localhost:8080/view/servidorUm/pesquisa.php?expressao=1100015");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $json = curl_exec($curl);
    curl_close($curl);

    // O php recebe e interpreta o JSON
    $encoded = json_decode($json);

    echo "<h1>$encoded<br></h1>";
}


?>
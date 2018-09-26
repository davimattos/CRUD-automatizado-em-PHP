<?php

$curl = curl_init("http://www.omdbapi.com/?i=tt1232346&apikey=46846323");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$json = curl_exec($curl);
curl_close($curl);

// O php recebe e interpreta o JSON
$encoded = json_decode($json);

//Imprime o nome do filme
echo "<h1>$encoded->Title.<br></h1>";
echo "<p><strong>Released:</strong> $encoded->Released <strong>Runtime:</strong> $encoded->Runtime</p>";
echo "<p><strong>Director:</strong> $encoded->Director</p>";
echo "<p><strong>Writer:</strong> $encoded->Writer</p>";
echo "<img width=350 height=500 src=$encoded->Poster>";

?>
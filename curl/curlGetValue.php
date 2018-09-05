<?php

$ch = curl_init("https://www.google.com/");
$fp = fopen("example.txt", "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);


curl_exec($ch);
curl_close($ch);
fclose($fp);

?>
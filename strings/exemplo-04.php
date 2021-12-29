<?php

$frase = "A repetiçao e a mãe da retenção.";
$palavra = "mãe";

$q = strpos($frase, $palavra);

var_dump($q);


echo "<br>";

$q = strpos($frase, $palavra);
$texto = substr($frase,0,$q);

var_dump($texto);

echo "<br>";

$q = strpos($frase, $palavra);
$texto2 = substr($frase, $q);

var_dump($texto2);

echo "<br>";

$q = strpos($frase, $palavra);
$texto3 = substr($frase, $q + strlen($palavra),strlen($frase));
//strlren retorna tamanho de uma string


var_dump($texto3);




?>
<?php

$empresa = "Hcode";

echo $empresa;

echo"<br>";
//str_replace e usado pra substituir o que esta entre aspas 
$empresa = str_replace("o",0, $empresa);
$empresa = str_replace("e",3, $empresa);

echo $empresa;

?>
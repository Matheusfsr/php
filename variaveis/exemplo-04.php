<?php

$nome =$_GET["a"];

//var_dump usado pra ver valor e tipo da variavel
var_dump($nome);

//$sserver usado pra buscar info do ambiente
$ip = $_SERVER["REMOTE_ADDR"];


$ip =$_SERVER["SCRIPT_NAME"];
//SCRIPT USADO PRA BUSCAR O NOME DO ARQUIVO NO CASO VARIAVEIS/EXEMPLO-04.PHP

echo $ip;
// no caso ira aparecer ::1 no lugar do ip pq nao temos um ip, apenas a maquina simulado
?>

<?php
//basicos
$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1999;

$salario = 5500.99;
$bloqueado = false;
/////////////////////////////////
//compostos

//array é uma estrutura de dados que armazena uma coleção de elementos 
$frutas = array("abacaxi","laranja","uva");

//echo $frutas[2];


////////////////////////////////
//objetos
// toda vez que for usada a palavra new e pq orientaçao a objeto esta sendo usado
$nascimento = new DateTime();

//var_dump($nascimento);
///////////////////////
//especias
//funçao abaixo serve pra fazer leitura de arquivos no disco rigido no computador
//resource
$arquivos = fopen("exemplo-03.php","r");

//var_dump ($arquivos)

//null

$nulo = NULL;
$vazio = "";


?>
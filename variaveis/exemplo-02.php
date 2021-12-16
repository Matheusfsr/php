<?php
//exemplos de concatenacao 
$anoNascimento = 1999;

$nomeCompleto = " ";
// barras duplas sap para comentarios inline
/*
comentario com inicio "/*"e fim em "* e com fim/ " e usado par fazer 
comentario em blocos

*/
// na linha de baixo temos uma varivel com numero no nome
$nome1 = "Felipe";

$sobrenome = "Matheus";
//. e usado pra concatenar, que significa juntar 
// para as variaveis nao ficarem juntas e so concatenar com mais  um espaço vazio entre duas aspas "  " com espaço entre elas.

$nomeCompleto = $nome1 ." " . $sobrenome;

echo $nome1;


echo "<br/>";


//unset($nome1)
//unset acima e usado pra eliminar a variavel da memorio

//if isset e ussado pra saber se a variavel existe
if(isset($nome1))

echo $nomeCompleto;

?>
<?php

//  Variavel
//simbolo usado antes de declarar uma variavel e o cifrao $
// variaveis sao conteiner temporarios de dados, que ficam alocado nda memoria  

$nome = "Glaucio";

//funcao
//Função em PHP é um trecho de código que pode ser chamado (invocado) de qualquer parte do código para executar uma tarefa qualquer e retornar algum valor.
//padrao para se fazer uma function nome da function (){} 

function teste(){
    //para que a funcao seja retornada corretamente e necessario declarar a  variavel criada como global
    //par que ela entenda que elas sao as msm variaveis
    global $nome;
    echo $nome;
}

function  teste2(){
    //ponto abaixo e usado pra concatenar
    global $nome;
    echo $nome."agora no teste2";

}
// PARA CHAMAR FUNCAO (); abrir e fechar parenteses e ponto e virgula

teste();

teste2();

?>
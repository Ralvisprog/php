<?php

//VARIAVEIS PRÉ-DEFINIDAS (SUPER GLOBAIS)

$nome = $_GET["a"];
var_dump($nome);
// fazer o teste abrindo o arquivo no navegador, inserindo ?a=123 depois da url

//Agora fazendo cast, ou seja, convertendo o retorno em inteiro
$nome = (int) $_GET["a"];
var_dump($nome);

echo "<BR/>";

//Pegando o ip
$ip = $_SERVER["REMOTE_ADDR"];
$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

?>
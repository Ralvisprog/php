<?php

//Criando variáveis
$anoNascimento = 1980;
$nomeCompleto = "Roberto";

//Apresentando na tela
echo $anoNascimento;
echo "<br/>"; //Quebra linha
echo $nomeCompleto;

//Apagando variável nascimento
unset ($anoNascimento , $nomeCompleto);

//Apresentando variável apagada
echo $anoNascimento;
echo "<br/>"; //Quebra linha
echo $nomeCompleto;


echo "<br/>"; //Quebra linha
echo "<br/>"; //Quebra linha

//Concatenando texto
$nome = "Roberto";
$sobrenome = "Oliveira";
echo $nome . " " . $sobrenome;

	
?>
<?php

////Tipos básicos

$home = "Roberto";
$site = "www.roberto.com.br";
$ano = 1980;
$salario = 5500.99;
$bloqueado = false;

/////////////////Tipos compostos

//Array
$frutas = array("abacaxi","laranja","manga");
echo $frutas[2];

//Objeto
$nascimento = new DateTime();
echo "<br/>";
var_dump($nascimento);
echo "<br/>";

////////////////Tipos especiais

//Tipo Resource
$arquivo = fopen("exemplo03.php", "r");
var_dump($arquivo);


//Tipo NULL
$nulo = NULL;


?>
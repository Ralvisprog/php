<?php
//ESCOPO DE VARIÁVEL

//Declaro fora
$nome = "Roberto";

//Faço uma função e uso o comando global para que a função enxergue a variável lá fora na raiz do código
function teste(){
	global $nome;	
	echo $nome;
}

//Outra função, sem o comendo global (não verá a variável)
function teste2(){
	echo $nome;
}

//Outra função, com variável local
function teste3(){
	$nome = "Renato";
	echo $nome;
}

//Chamando as funções
echo "teste chamando global";
echo "<br/>";
teste();
echo "<br/>";
echo "<br/>";
echo "teste sem global";
teste2();
echo "<br/>";
echo "<br/>";
echo "teste com variável local";
echo "<br/>";
teste3();
?>
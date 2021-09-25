<?php
//compara pulando o nulo

$A = NULL;
$B = NULL;
$c = 10;

echo $a ?? $B ?? $c;
echo "<br/>";


$A = NULL;
$B = 8;
$c = 10;

echo $a ?? $B ?? $c;
echo "<br/>";

?>
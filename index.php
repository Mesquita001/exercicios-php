<?php

$categorias = [];
$categorias []= 'infantil';
$categorias [] = 'adolescentes';
$categorias [] = 'adultos';
$categorias [] = 'idoso';
//print_r($categorias);

$nome = 'Andre';
$idade = 8;

//var_dump($nome);
//var_dump($idade);

if ($idade >= 6 && $idade <= 12)
{
   echo 'Infantil';
}
else if ($idade == 13 && $idade == 18)
{
    echo 'Adolescente';
}
else
{
    echo 'Adulto';
}

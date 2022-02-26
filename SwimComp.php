<?php
/*
Crie um projeto em PHP para uma competição de natação,
o sistema deverá permitir a inserção de competidores com
seu nome e idade, e o sistema deverá identificar qual categoria o
nadador irá competir, por exemplo, 6 a 12 anos categoria infantil,
de 13 a 18 categoria adolescente, acima de 18 categoria adulto, o
sistema deverá retornar a categoria para cada nadador que for cadastrado.
*/

$categoria = [];
$categoria[] = 'Infantil';
$categoria[] = 'Adolescente';
$categoria[] = 'Adulto';
//print_r($categoria);
//mostra os elementos e
//em qual indice se encontra o elemento dentro de uma lista

$nome = 'Rissala';
$idade = 19;
// var_dump($nome, $idade);
//mostra o tipo da variavel declarada
// pode ser passada sem especifica-la dependendo de como ela é passada
 
#condicionais PHP
if ($idade < 6){
    echo 'O competidor é menor de idade!';
}
if($idade >= 6 && $idade <= 12){
    //echo 'Infantil';
    for($i = 0; $i <= count($categoria); $i++)
        if($categoria[$i] == 'Infantil')
            echo 'O nadador ', $nome, ' compete na categoria ', $categoria[$i];
}else if($idade >= 13 && $idade <= 18){
    //echo 'Adolescente';
    for($i = 0; $i <= count($categoria); $i++)
        if($categoria[$i] == 'Adolescente')
            echo 'O nadador: ', $nome, ' compete na categoria: ', $categoria[$i];
}else{
    //echo 'Adulto';
    for($i = 0; $i <= count($categoria); $i++)
        if($categoria[$i] == 'Infantil')
        echo "O nadador ", $nome, ' compete na categoria: ', $categoria[$i];
}

<?php
error_reporting(0);
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = $_POST['nome'];//informaçao que vem por post nao vem no corpo do header da requisição
$idade = $_POST['idade'];

if (empty($nome)){
    echo 'O nome não pode ser vazio';
    return;
}
if (strlen($nome) < 3){
    echo 'O nome deve conter mais de 3 caracteres';
    return;
}
if (strlen($nome) > 40){
    echo 'O nome é muito extenso';
    return;
}
if (!is_numeric($idade)){/* o simbolo ! representa negação*/
    echo 'Informe um número no campo idade!';
}

if ($idade < 6) {
    echo 'O nadador ', $nome ,' deve ser maior de idade.';
}else if ($idade >= 6 && $idade <= 12){
    for ($i = 0; $i <= count($categorias); $i++)
        if ($categorias[$i] == 'infantil')
            echo 'O nadador: ', $nome, ' compete na categoria: ', $categorias[$i],'.';
}else if ($idade >= 13 && $idade <= 18){
    for ($i = 0; $i <= count($categorias); $i++)
        if ($categorias[$i] == 'adolescente')
            echo 'O nadador: ', $nome, ' compete na categoria: ', $categorias[$i],'.';
}else{
    for ($i = 0; $i <= count($categorias); ++$i)
        if ($categorias[$i] == 'adulto')
            echo "O nadador: ", $nome, ' compete na categoria: ', $categorias[$i],'.';
}

<?php
error_reporting(0);
session_start();

$categorias = []; // array numerico cada posiçao representado por um numero começando do elemento 0
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = $_POST['nome'];//informaçao que vem por post nao vem no corpo do header da requisição
$idade = $_POST['idade'];//o metodo post tbm é um array associativo

if (empty($nome)){
    $_SESSION["mensagem de erro"] = 'O nome não pode ser vazio, por favor digite novamente!';//array associativo do metodo session, para associar a um valor
    header('location: index.php');//redireciona a pagina para o index.php
    return;
}
else if (strlen($nome) < 3){
    $_SESSION["mensagem de erro"] =  'O nome deve conter mais de 3 caracteres!';
    header('location: index.php');
    return;
}
else if (strlen($nome) > 40){
    $_SESSION["mensagem de erro"] =  'O nome é muito extenso!';
    header('location: index.php');
    return;
}
else if (!is_numeric($idade)){/* o simbolo ! representa negação*/
    $_SESSION["mensagem de erro"] =  'Informe um número no campo idade!';
    header('location: index.php');
    return;
}
else if ($idade < 6){
    $_SESSION["mensagem de erro"] =  'O competidor deve ter mais que 5 anos de idade.';
    header('location: index.php');
    return;
}

if ($idade >= 6 && $idade <= 12)
{
    for ($i = 0; $i <= count($categorias); $i++)
        if ($categorias[$i] == 'infantil')
        {
            $_SESSION["mensagem de sucesso"] = 'O nadador: ', $nome, ' compete na categoria: ', $categorias[$i],'.';
            header('location: index.php');
            return;
        }
}
else if ($idade >= 13 && $idade <= 18)
{
    for ($i = 0; $i <= count($categorias); $i++)
        if ($categorias[$i] == 'adolescente')
        {
            $_SESSION["mensagem de sucesso"] = 'O nadador: ', $nome, ' compete na categoria: ', $categorias[$i],'.';
            header('location: index.php');
            return;
        }
}else
{
    for ($i = 0; $i <= count($categorias); ++$i) {
        if ($categorias[$i] == 'adulto')
        {
            $_SESSION["mensagem de sucesso"] = "O nadador: ", $nome, ' compete na categoria: ', $categorias[$i],'.';
            header('location: index.php');
            return;
        }
    }
}

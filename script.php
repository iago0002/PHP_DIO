<?php
error_reporting(0);
include 'servicos/servicoMensagemSessao.php';
include 'servicos/servicoValidacao.php';
include 'servicos/servicoCategoriaCompetidor.php';

$nome = $_POST['nome'];//informaçao que vem por post nao vem no corpo do header da requisição
$idade = $_POST['idade'];//o metodo post tbm é um array associativo

defineCategoriaCompetidor($nome, $idade);

header('location: index.php');
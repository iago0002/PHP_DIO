<?php

session_start();

function setarMensagemdDeErro(string $mensagem) : void
{
    $_SESSION['mensagem de erro'] = $mensagem;
}

function obterMensagemDeErro() : ?string //funcao pra resgatar essa funçao futuramente
{
    if(isset($_SESSION['mensagem de erro']))
//pode retornar ou servir de entrada para o metodo como uma string ou um null
        return $_SESSION['mensagem de erro'];

    return null;
}

function setarMensagemdDeSucesso(string $mensagem) : void
{
    $_SESSION['mensagem de sucesso'] = $mensagem;
}

function obterMensagemDeSucesso() : ?string
{
    if(isset($_SESSION['mensagem de sucesso']))
        return $_SESSION['mensagem de sucesso'];

    return null;
}

function removerMensagemDeErro()
{
    if(isset($_SESSION['mensagem de erro']))
        unset($_SESSION['mensagem de erro']);
}
function removerMensagemDeSucesso()
{
    if(isset($_SESSION['mensagem de sucesso']))
        unset($_SESSION['mensagem de sucesso']);
}
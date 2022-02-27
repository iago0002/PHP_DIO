<?php

function validaNome(string $nome) : bool
{
    if (empty($nome)){
        setarMensagemDeErro('O nome não pode ser vazio, por favor digite novamente!'); //array associativo do metodo session, para associar a um valor
        //header('location: index.php');redireciona a pagina para o index.php
        return false;
    }
    else if (strlen($nome) < 3){
        setarMensagemDeErro('O nome deve conter mais de 3 caracteres!');
        return false;
    }
    else if (strlen($nome) > 40){
        setarMensagemDeErro('O nome é muito extenso!');
        return false;
    }
    return true;
}
function validaIdade(string $idade) : bool
{
    if (!is_numeric($idade))
    {/* o simbolo ! representa negação*/
        setarMensagemDeErro('Informe um número no campo idade!');
        return false;
}
    else if ($idade < 6)
    {
        setarMensagemDeErro('O competidor deve ter mais que 5 anos de idade.');
        return false;
    }
    return true;
}



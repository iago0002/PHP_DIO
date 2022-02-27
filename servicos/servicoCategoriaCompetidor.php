<?php

function defineCategoriaCompetidor(string $nome, string $idade)
{
    $categorias = []; // array numerico cada posiçao representado por um numero começando do elemento 0
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    if (validaNome($nome) && validaIdade($idade))
    {
        removerMensagemDeErro();
        if ($idade >= 6 && $idade <= 12)
        {
            for ($i = 0; $i <= count($categorias); $i++)
            {
                if ($categorias[$i] == 'infantil')
                {
                    setarMensagemDeSucesso('O nadador: ', $nome, ' compete na categoria: ', $categorias[$i],'.');
                    return null;
                }
            }
        }
        else if ($idade >= 13 && $idade <= 18)
        {
            for ($i = 0; $i <= count($categorias); $i++)
            {
                if ($categorias[$i] == 'adolescente')
                {
                    setarMensagemDeSucesso('O nadador: ', $nome, ' compete na categoria: ', $categorias[$i], '.');
                    return null;
                }
            }
        }
        else
        {
            for ($i = 0; $i <= count($categorias); ++$i)
            {
                if ($categorias[$i] == 'adulto')
                {
                    setarMensagemDeSucesso('O nadador: ', $nome, ' compete na categoria: ', $categorias[$i],'.');
                    return null;
                }
            }
        }
    }
    else
    {
        removerMensagemDeSucesso();
        return obterMensagemDeErro();//grava a mensagem na sessa caso o nome nao seja valido
    }
}

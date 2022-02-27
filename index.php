<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Formulário de inscrição</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

<form action="script.php" method="post">
    <!-action responsavel por entender qual arquivo/rota
    ou endereço de url eu quero enviar script.php responsavel por processar os dados seguido pelo metodo da requisição->
    <?php //blocos de comportamento indexado por extensao php; manual PHP
    $mensagemDeSucesso = obterMensagemDeSucesso();
    if (!empty($mensagemDeSucesso))
    {
        echo $mensagemDeSucesso;
    }
    $mensagemDeErro = obterMensagemDeErro();
    if (!empty($mensagemDeErro))
    {
        echo $mensagemDeErro;
    }
    // ? representa a execução do if
    // : representa a execução do else
    ?>
    <p>Seu nome: <input type="text" name="nome" /></p>
    <p>Sua idade: <input type="text" name="idade" /></p>
    <p><input type="submit" value="Enviar"/></p>
</form>

</body>

</html>
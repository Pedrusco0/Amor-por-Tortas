<?php
    session_start();
    
    $tempo = $_SERVER['REQUEST_TIME'];
    $duracao_inatividade = 10;
    if (isset($_SESSION['ULTIMA_ATIVIDADE']) && ($tempo - $_SESSION['ULTIMA_ATIVIDADE']) > $duracao_inatividade) {
        $_SESSION = array();
        session_destroy();
    }


    if(!isset($_SESSION['email'])) {
        header("Location: signup.html");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Finalizado - Amor por Comida</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <div class="finalizacao-container">
        <h1 class="finalizacao-titulo">Cadastro Finalizado!</h1>
        <p class="finalizacao-mensagem">Seu cadastro foi concluído com sucesso. Agora você pode aproveitar todas as funcionalidades do site.</p>
        <button class="finalizacao-botao" onclick="window.location.href='../index.html'">Voltar à Página Inicial</button>
    </div>
</body>
</html>
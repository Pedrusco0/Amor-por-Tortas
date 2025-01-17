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
    <title>oii</title>
</head>
<body>
    <p1>oiee chegamo</p1>
</body>
</html>
<?php
    session_start();
    
    $tempo = $_SERVER['REQUEST_TIME'];
    $duracao_inatividade = 10;
    if (isset($_SESSION['ULTIMA_ATIVIDADE']) && ($tempo - $_SESSION['ULTIMA_ATIVIDADE']) > $duracao_inatividade) {
        $_SESSION = array();
        session_destroy();
    }


    if(!isset($_SESSION['login'])) {
        header("Location: login.html");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Concluído - Amor por Comida</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <div class="finalizacao-container">
        <h1 class="finalizacao-titulo">Login Concluído!</h1>
        <p class="finalizacao-mensagem">Você está logado e pode aproveitar todas as funcionalidades do site.</p>
        <div class="botoes-container">
            <button class="editar-perfil" onclick="window.location.href='editar-perfil.html'">Editar Perfil</button>
            <button class="voltar-inicio" onclick="window.location.href='../index.html'">Voltar à Página Inicial</button>
        </div>
    </div>
</body>
</html>

<!--
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Páginal Inicial</title>
</head>
<body>
<h1>Seja bem vindo, as melhores tortas desse brasil varonil</h1>
<php
echo "Seja bem-vindo, " . $_SESSION['usuario'] . "!";
?>
<br>
<a href="logout.php">Sair</a>
<php
// Atualizando a última atividade do usuário
$_SESSION['ULTIMA_ATIVIDADE'] = $tempo;
?>
</body>
</html>
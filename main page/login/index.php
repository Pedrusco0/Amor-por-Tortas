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
<html>
<head>
<meta charset="utf-8">
<title>Páginal Inicial</title>
</head>
<body>
<h1>Seja bem vindo, as melhores tortas desse brasil varonil</h1>
<?php
echo "Seja bem-vindo, " . $_SESSION['usuario'] . "!";
?>
<br>
<a href="logout.php">Sair</a>
<?php
// Atualizando a última atividade do usuário
$_SESSION['ULTIMA_ATIVIDADE'] = $tempo;
?>
</body>
</html>
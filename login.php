<?php
    session_start();
    include "conecta.php";

    if(isset($_POST['botao'])) {
        $login = $_POST['login_usuario'];
        $senha = $_POST['senha_usuario'];
        //echo "O login é " . $login . " e a senha é " . $senha . ".";
        $sql = "SELECT * FROM usuarios WHERE usuario = '$login' AND senha = '$senha'";

        $resultado = pg_query($conexao, $sql);
        //echo pg_num_rows($resultado);

        if (pg_num_rows($resultado) == 1) {
            $registro = pg_fetch_array($resultado);
            $_SESSION['usuario'] = $registro['nome_usuario'];
            $_SESSION['login'] = $login;
            header("Location: index.php");
        }
        else {
            header("Location: login.html");
        }

    }
?>
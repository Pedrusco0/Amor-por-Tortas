<?php
session_start();
include "conect.php";

if (isset($_POST['botao'])) {

    $signup = $_POST['signup_usuario'];
    $email = $_POST['signup_email'];
    $senha = $_POST['signup_senha'];
    //echo "O login é " . $login . " e a senha é " . $senha . ".";
    $confirmsql = "SELECT * FROM usuarios WHERE email = '$email'";
    $resultconfirm = pg_query($conexao, $confirmsql);
    echo 'oii';
    if(pg_num_rows($resultconfirm) < 1){
        $sql = "INSERT INTO usuarios (usuario, email, senha) VALUES ('$signup', '$email', '$senha')";
        $sqlregister = pg_query($conexao, $sql);
        $registro = pg_fetch_array($sqlregister);
        /*$_SESSION['usuario'] = $registro['nome_usuario'];
        $_SESSION['email'] = $email;*/
        echo 'talvez';
        header("Location: index.php");
    }else{
        header("Location: signup.html");
    }
    //echo pg_num_rows($resultado);
}

?>

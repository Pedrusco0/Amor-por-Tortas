<?php
session_start();
include "conectar.php";

if (isset($_POST['botao'])) {
    
    $user = $_POST['signup_user'];
    $email = $_POST['signup_email'];
    $senha = $_POST['signup_senha'];
    $nome = $_POST['signup_nome'];
    $sobrenome = $_POST['signup_sobrenome'];
    $fone = $_POST['signup_fone'];
    $gender = $_POST['signup_gender'];
    $nasc = $_POST['signup_nasc'];

    //echo "O login é " . $login . " e a senha é " . $senha . ".";
    $confirmsql = "SELECT * FROM usuarios WHERE email = '$email' OR usuario = '$user'";
    $resultconfirm = pg_query($conexao, $confirmsql);
    
    if(pg_num_rows($resultconfirm) == 0){
        $sql = "INSERT INTO usuarios (usuario, email, senha, nome, sobrenome, telefone, genero, nasc) VALUES ('$user', '$email', '$senha', '$nome', '$sobrenome', '$fone', '$gender', '$nasc')";
        $sqlregister = pg_query($conexao, $sql);
        $registro = pg_fetch_array($sqlregister);
        $_SESSION['usuario'] = $registro['nome_usuario'];
        $_SESSION['email'] = $email;
        $_SESSION['user'] = $user;
        echo 'talvez';
        header("Location: index.php");
    }else{
        header("Location: signout.php");
    }
    //echo pg_num_rows($resultado);
}

?>

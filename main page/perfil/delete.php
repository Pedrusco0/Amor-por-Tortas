<?php
session_start();
include "conectar.php";

echo "oi";
if(isset($_POST['botao'])) {
    $user = $_POST['user'];
    echo $user;

    $sql = "SELECT * FROM usuarios WHERE usuario = '$user'";
    $resultado = pg_query($conexao, $sql);
    echo pg_num_rows($resultado);

    if (pg_num_rows($resultado) == 1) {
        $deletesql = "DELETE * FROM usuarios WHERE usuario = '$user'";
        $deleteResult = pg_query($conexao, $deletesql);
        $delete = pg_fetch_array($deleteResult);

        header("Location: index.php");
    }
    else {
        header("Location: perfil.html");
    }   
}
?>
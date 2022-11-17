<?php
    include("conecta.php");

    session_start();

    $email = $_SESSION["email"];
    $comando = $pdo -> prepare("SELECT cod_usuario FROM usuario WHERE email = :email");
    $comando -> bindValue(":email",$email);
    
    $comando->execute();

    if($comando->rowCount()== 1){
        $resultado = $comando->fetch();
        $cod_usuario = $resultado["cod_usuario"];
    }

    $cod_usuario = $_GET["cod_usuario"];

    $comando = $pdo->prepare("DELETE FROM usuario WHERE cod_usuario = :cod_usuario");

    $comando->bindValue(":cod_usuario",$cod_usuario);
    
    $comando->execute();

    $_SESSION['loggedin'] = false;

    header("location:cadastro.php");

    unset($comando);
    unset($pdo);
?>
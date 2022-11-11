<?php
    include("conecta.php");

    session_start();

    $email = $_SESSION["email"];
    $comando = $pdo -> prepare("SELECT cod_usuario FROM usuario WHERE email = :email");
    $comando -> bindValue(":email",$email);
    
    $comando->execute();

    echo($email);

    if($comando->rowCount()== 1){
        $resultado = $comando->fetch();
        $cod_usuario = $resultado['cod_usuario'];
    }

    //comando sql.
    $comando = $pdo->prepare("DELETE FROM usuario WHERE cod_usuario = :cod_usuario");

    //insere valores das variaveis no comando sql.
    $comando->bindValue(':cod_usuario',$cod_usuario);
    
    //executa a consulta no banco de dados.
    $comando->execute();

    session_start();
    $_SESSION['loggedin'] = false;

    //redireciona para a pagina informada.
    header("location:cadastro.php");

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
?>
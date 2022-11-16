<?php

    include("conecta.php");


    $email = $_POST["email"];
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $senha = MD5($_POST["senha"]);
    $telefone = $_POST["telefone"];
    $cpf = $_POST["cpf"];
    $data_nascimento = $_POST["data_nascimento"];

    $comando = $pdo -> prepare("UPDATE usuario SET email=:email,nome=:nome,sobrenome=:sobrenome,senha=:senha,telefone=:telefone,cpf=:cpf,data_nascimento=:data_nascimento WHERE cod_usuario=:codigo");
    $comando->bindValue(":email", $email);
    $comando->bindValue(":nome", $nome);
    $comando->bindValue(":sobrenome", $sobrenome);
    $comando->bindValue(":senha", $senha);
    $comando->bindValue(":telefone", $telefone);
    $comando->bindValue(":cpf", $cpf);
    $comando->bindValue(":data_nascimento", $data_nascimento);
    session_start();
    $comando->bindValue(":codigo", $_SESSION["cod_usuario"]);

    $comando->execute();
    
    unset($comando);
    unset($pdo);

    header("location: perfil.php?email=$email");
?>
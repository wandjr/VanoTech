<?php

    include("conecta.php");

    $email = $_POST["email"];
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $senha = MD5 ($_POST["senha"]);
    $telefone = $_POST["telefone"];
    $cpf = $_POST["cpf"];
    $data_nascimento = $_POST["data_nascimento"];

    $comando = $pdo -> prepare("INSERT INTO usuario(email,nome,sobrenome,senha,telefone,cpf,data_nascimento) VALUES(:email,:nome,:sobrenome,:senha,:telefone,:cpf,:data_nascimento)");
    $comando->bindValue(":email", $email);
    $comando->bindValue(":nome", $nome);
    $comando->bindValue(":sobrenome", $sobrenome);
    $comando->bindValue(":senha", $senha);
    $comando->bindValue(":telefone", $telefone);
    $comando->bindValue(":cpf", $cpf);
    $comando->bindValue(":data_nascimento", $data_nascimento);
    
    $comando->execute();

    header("Location:login.html");
    
    unset($comando);
    unset($pdo);
?>
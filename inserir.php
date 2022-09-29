<?php

    include("conecta.php");

    $email = $_POST["email"];
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $senha = $_POST["senha"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $telefone = $_POST["telefone"];
    $bairro = $_POST["bairro"];
    $cpf = $_POST["cpf"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $data_nascimento = $_POST["data_nascimento"];

    $comando = $pdo -> prepare("INSERT INTO usuario(email,nome,sobrenome,senha,estado,cidade,bairro,rua,numero,telefone,cpf,data_nascimento) VALUES(:email,:nome,:sobrenome,:senha,:estado,:cidade,:bairro,:rua,:numero,:telefone,:cpf,:data_nascimento)");
    $comando->bindValue(":email", $email);
    $comando->bindValue(":nome", $nome);
    $comando->bindValue(":sobrenome", $sobrenome);
    $comando->bindValue(":senha", $senha);
    $comando->bindValue(":estado", $estado);
    $comando->bindValue(":cidade", $cidade);
    $comando->bindValue(":bairro", $bairro);
    $comando->bindValue(":rua", $rua);
    $comando->bindValue(":numero", $numero);
    $comando->bindValue(":telefone", $telefone);
    $comando->bindValue(":cpf", $cpf);
    $comando->bindValue(":data_nascimento", $data_nascimento);
    
    $comando->execute();

    header("Location:login.html");
?>
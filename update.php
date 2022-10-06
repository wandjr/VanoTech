<?php

    include("conecta.php");

    $codigo = $_POST["cod_usuario"];
    $email = $_POST["email"];
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $senha = MD5 ($_POST["senha"]);
    $telefone = $_POST["telefone"];
    $cpf = $_POST["cpf"];
    $data_nascimento = $_POST["data_nascimento"];

    $comando = $pdo -> prepare("UPDATE usuario SET email=:email,nome=:nome,senha=:senha,telefone=:telefone,cpf=:cpf,data_nascimento=:data_de_nascimento) WHERE codigo=:codigo");
    $comando->bindValue(":email", $email);
    $comando->bindValue(":nome", $nome);
    $comando->bindValue(":sobrenome", $sobrenome);
    $comando->bindValue(":senha", $senha);
    $comando->bindValue(":telefone", $telefone);
    $comando->bindValue(":cpf", $cpf);
    $comando->bindValue(":data_nascimento", $data_nascimento);
    $comando->bindValue(":codigo", $codigo);
    
    $comando->execute();
    
    unset($comando);
    unset($pdo);
?>
<?php
    session_start();

    include("conecta.php");
    $cod_contrato = $_SESSION["cod_contrato"];
    $preco = $_SESSION["preco"];
    $tipo_servico = $_SESSION["tipo_servico"];
    $duracao_contrato = $_SESSION["duracao_contrato"];
    $funcionario = $_SESSION["funcionario"];
    $cod_usuario = $_SESSION["cod_usuario"];

    $local_servico = $_POST["local_servico"];
    $data_servico = $_POST["data_servico"];
    $horario_servico = $_POST["horario_servico"];

    $comando = $pdo -> prepare("UPDATE contrato SET local_servico=:local_servico,data_servico=:data_servico,horario_servico=:horario_servico,preco=:preco,funcionario=:funcionario,tipo_servico=:tipo_servico,duracao_contrato=:duracao_contrato,cod_usuario=:cod_usuario WHERE cod_contrato=:cod_contrato");
    $comando->bindValue(":local_servico", $local_servico);
    $comando->bindValue(":data_servico", $data_servico);
    $comando->bindValue(":horario_servico", $horario_servico);    
    $comando->bindValue(":preco", $preco);
    $comando->bindValue(":funcionario", $funcionario);
    $comando->bindValue(":tipo_servico", $tipo_servico);
    $comando->bindValue(":duracao_contrato", $duracao_contrato);
    $comando->bindValue(":cod_usuario", $cod_usuario);

    $comando->execute();
?>
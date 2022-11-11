<?php
    session_start();

    include("conecta.php");
    $cod_contrato = $_SESSION["cod_contrato"];
    $preco = $_SESSION["preco"];
    $tipo_servico = $_SESSION["tipo_servico"];
    $duracao_contrato = $_SESSION["duracao_contrato"];

    $local_servico = $_POST["local_servico"];
    $data_servico = $_POST["data_servico"];
    $horario_servico = $_POST["horario_servico"];

    $comando = $pdo -> prepare("UPDATE contrato SET local_servico=:local_servico,data_servico=:data_servico,horario_servico=:horario_servico WHERE cod_contrato=:cod_contrato");
    $comando->bindValue(":local_servico", $local_servico);
    $comando->bindValue(":data_servico", $data_servico);
    $comando->bindValue(":horario_servico", $horario_servico);

    $comando->execute();

    unset($comando);
    unset($pdo);
?>
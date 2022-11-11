<?php
    session_start();

    include("conecta.php");

    $email = $_SESSION["email"];
    $comando = $pdo -> prepare("SELECT cod_usuario FROM usuario WHERE email = :email");
    $comando -> bindValue(":email",$email);

    $comando->execute();

    if($comando->rowCount()== 1){
        $resultado = $comando->fetch();
        $cod_usuario = $resultado['cod_usuario'];
    }

    $tipo_servico = $_POST["tipo_servico"];
    $duracao_contrato = $_POST["duracao_contrato"];

    if($tipo_servico=="Recursos Humanos");
    {
        $preco = "25";
    }
    if($tipo_servico=="Contabilidade");
    {
        $preco = "45";
    }
    if($tipo_servico=="Fiscal (Tax)");
    {
        $preco = "35";
    }
    if($tipo_servico=="Direito Societário");
    {
        $preco = "30";
    }
    if($tipo_servico=="Assessoria e Consultoria Empresarial");
    {
        $preco = "60";
    }

    $comando = $pdo -> prepare("INSERT INTO contrato(preco,tipo_servico,duracao_contrato,cod_usuario) VALUES(:preco,:tipo_servico,:duracao_contrato,:cod_usuario)");
    $comando->bindValue(":preco", $preco);
    $comando->bindValue(":tipo_servico", $tipo_servico);
    $comando->bindValue(":duracao_contrato", $duracao_contrato);
    $comando->bindValue(":cod_usuario", $cod_usuario);
    
    $comando->execute();

    header("location:perfil.php?email=$email");
    
    unset($comando);
    unset($pdo);
?>
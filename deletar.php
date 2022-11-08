<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];
    
    //comando sql.
    $comando = $pdo->("DELETE FROM usuario WHERE cod_usuario = :codigo");

    //insere valores das variaveis no comando sql.
    $comando->bindValue(':codigo',$codigo);
    
    //executa a consulta no banco de dados.
    $comando->execute();

    //redireciona para a pagina informada.
    header("location:cadastro.php");

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
?>
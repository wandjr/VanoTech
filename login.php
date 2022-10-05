<?php
    include("conecta.php");

        $email = $_POST["email"];
        $senha = $_POST["senha"];
       
        $comando = $pdo -> prepare("SELECT cod_usuario,senha From usuario where email = :email");

        $comando -> bindValue(":email",$email);

        $comando -> execute();

        if($comando->rowCount()== 1){
            $resultado = $comando->fetch();
            if ($resultado['senha']== MD5($senha)){
                    header("location:perfil.html");
            }else{
                echo("Email ou senha inválidos");
            }
        }else{
            echo("Email ou senha Inválido");
        }
?>
<?php
    include("conecta.php");

        $email = $_POST["email"];
        $senha = $_POST["senha"];
       
        echo(MD5($senha));
        echo($email);

        $comando = $pdo -> prepare("SELECT cod_usuario,senha,email,adm From usuario where email = :email");

        $comando -> bindValue(":email",$email);

        $comando -> execute();

        if($comando->rowCount()== 1){
            $resultado = $comando->fetch();
            if ($resultado['senha']== MD5($senha)){
                    
                session_start();

                $_SESSION['cod_usuario'] = $resultado['cod_usuario'];
                $_SESSION['senha'] = $resultado['senha'];
                $_SESSION['email'] = $resultado['email'];
                $_SESSION['adm'] = $resultado['adm'];
                $_SESSION['loggedin'] = true;

                    header("location:perfil.php?email=$email");

            }else{
                echo("Email ou senha inválidos");
            }
        }else{
            echo("Email ou senha Inválido");
        }
?>
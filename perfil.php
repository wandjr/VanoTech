<?php
    session_start();
    // Verifique se o usuário está logado, se não, redirecione-o para uma página de login
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: cadastro.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible">
    <title>PERFIL</title>
    <link rel="stylesheet" href="vanotech.css"/>
    <link href='https://fonts.googleapis.com/css?family=Volkhov' rel='stylesheet'>
    <script src="vanotech.js"></script>
    <script src="jquery-3.6.0.min.js"></script>
    <style>

.informacoes_perfil
{
    display: flex;
    flex-direction: column;
    justify-items: center;
    justify-content: center;
    align-content: center;
    align-items: center;
}

.caixa_info
{
    text-align: center;
}

    </style>

</head>

<?php

echo        '<div class="menu">
                <img src="imagem/logo.png" id="logo" width="70px" height="70px">
                <a href="home.php?email='.urlencode($_SESSION['email']). '"><button class="botao">HOME</button></a>
                <a href="servicos.php?email='.urlencode($_SESSION['email']). '"><button class="botao">SERVIÇOS</button></a>
                <a href="trabalhe_conosco.php?email='.urlencode($_SESSION['email']). '"><button class="botao">TRABALHE CONOSCO</button></a>
                <a href="simulacao_de_Contrato.php?email='.urlencode($_SESSION['email']). '"><button class="botao">SIMULAÇÃO DE CONTRATO</button></a>
                <a href="contato.php?email='.urlencode($_SESSION['email']). '"><button class="botao">CONTATO</button></a>
                <button class="botao_selecionado">PERFIL</button>
            </div>';


include("conecta.php");

$email=$_GET["email"];

$comando = $pdo -> prepare("SELECT * From usuario where email = :email");

        $comando -> bindValue(":email",$email);

        $comando -> execute();

        if($comando->rowCount()== 1){
            $resultado = $comando->fetch();
            $nome=$resultado['nome'];
            $sobrenome=$resultado['sobrenome'];
            $email=$resultado['email'];
            $telefone=$resultado['telefone'];
            $cpf=$resultado['cpf'];
            $data_nascimento=$resultado['data_nascimento'];
        }

?>

<body>

<br><br>

    <div class="informacoes_perfil">
        <img src="imagem/perfil.png">
        <br>

        <form id="formulario" action="update.php" method="POST">
            <input type="text" class="caixa_info" value="<?php echo($nome) ?>" name="nome">

            <div>Sobrenome</div>
            <input type="text" class="caixa_info" value="<?php echo($sobrenome) ?>" name="sobrenome">
            
            <div>E-mail</div>
            <input type="email" class="caixa_info" value="<?php echo($email) ?>" name="email">

            <div>Senha</div>
            <input type="text" class="caixa_info" value="" name="senha">

            <div>Telefone</div>
            <input type="text" class="caixa_info" value="<?php echo($telefone) ?>" name="telefone">

            <div>CPF</div>
            <input type="text" class="caixa_info" value="<?php echo($cpf) ?>" name="cpf">

            <div>Data de Nascimento</div>
            <input type="date" class="caixa_info" value="<?php echo($data_nascimento) ?>" name="data_nascimento">

            <button>Criar Novo Perfil</button>
            <input type="submit" value="Salvar Informações">
            <button>Deletar Perfil</button>
        </form>
    </div>

    <div>Simulações de Contrato</div>

    <table border="2">
        <thead>
        <tr>
            <td>Código do Contrato</td>
            <td>Contratante</td>
            <td>Serviço</td>
            <td>Tempo de Contrato</td>
            <td>Local de Encontro</td>
            <td>Profissional</td>
            <td>Preço Total</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Paulo Roberto</td>
            <td>Fiscal</td>
            <td>2 anos</td>
            <td>MN Contabilidade</td>
            <td>Ruan Souza</td>
            <td>15000R$</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </thead>
    </table>

    
</body>

</html>
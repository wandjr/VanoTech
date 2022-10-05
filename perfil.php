<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible">
    <title>PERFIL</title>
    <link rel="stylesheet" href="vanotech.css"/>
    <link href='https://fonts.googleapis.com/css?family=Volkhov' rel='stylesheet'>

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
            $codigo=$resultado['cod_usuario'];
        }

?>

<body>
        <div class="menu">
                <img src="imagem/logo.png" id="logo" width="70px" height="70px">
                <a href="home.html"><button class="botao">HOME</button></a>
                <a href="servicos.html"><button class="botao">SERVIÇOS</button></a>
                <a href="trabalhe_conosco.html"><button class="botao">TRABALHE CONOSCO</button></a>
                <a href="simulacao_de_Contrato.html"><button class="botao">SIMULAÇÃO DE CONTRATO</button></a>
                <a href="contato.html"><button class="botao">CONTATO</button></a>
                <button class="botao_selecionado">PERFIL</button>
        </div>


    <div class="informacoes_perfil">
        <img src="imagem/perfil.png">
        <br>

        <form id="formulario" action="" method="POST">
            <input type="text" class="caixa_info" value="<?php echo($nome) ?>">

            <div>Sobrenome</div>
            <input type="text" class="caixa_info" value="<?php echo($sobrenome) ?>">
            
            <div>E-mail</div>
            <input type="email" class="caixa_info" value="<?php echo($email) ?>">

            <div>Telefone</div>
            <input type="text" class="caixa_info" value="<?php echo($telefone) ?>">

            <div>CPF</div>
            <input type="text" class="caixa_info" value="<?php echo($cpf) ?>">

            <input type="hidden" name="codigo" value="<?php echo($nome) ?>">

            <div>Data de Nascimento</div>
            <input type="date" class="caixa_info" value="<?php echo($data_nascimento) ?>">
        </form>


        <button>Criar Novo Perfil</button>
        <button onclick="Alterar();">Salvar Informações</button>
        <button>Deletar Perfil</button>
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
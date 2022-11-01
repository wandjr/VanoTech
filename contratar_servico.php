<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible">
    <title>CADASTRO</title>
    <link rel="stylesheet" href="vanotech.css" />
    <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
</head>

<style>

.Tipo
{
    position: absolute;
    width: 238px;
    height: 39px;
    left: 699px;
    top: 130px;
    

    font-family: 'Inter';
    font-weight: 400;
    font-size: 32px;
    color:white;
}

.Escolha
{
    position: absolute;
    width: 763px;
    height: 51px;
    left: 436px;
    top: 220px;

    border-radius: 90px;
}

.tempo
{
    position: absolute;
    width: 294px;
    height: 39px;
    left: 671px;
    top: 310px;

    font-family: 'Inter';
    font-weight: 400;
    font-size: 32px;
    color:white;
}

.Escolhatempo
{
    position: absolute;
    width: 763px;
    height: 54px;
    left: 438px;
    top: 420px;

    background: white;
    border-radius: 90px;
}

.box
{
    box-sizing: border-box;
    position: absolute;
    width: 594px;
    height: 109px;
    left: 521px;
    top: 530px;
    border-radius: 90px;
}

.resultado
{
    position: absolute;
    width: 949px;
    height: 151px;
    left: 343px;
    top: 710px;
    background: #FFFFFF;
}
</style>

<body>
    <div class="menu">
            <img src="imagem/logo.png" id="logo" width="70px" height="70px">
            <a href="home.php"><button class="botao">HOME</button></a>
            <a href="servicos.php"><button class="botao">SERVIÇOS</button></a>
            <a href="trabalhe_conosco.php"><button class="botao">TRABALHE CONOSCO</button></a>
            <a href="simulacao_de_Contrato.php"><button class="botao">SIMULAÇÃO DE CONTRATO</button></a>
            <a href="contato.php"><button class="botao">CONTATO</button></a>
            <a href="perfil.php"> <button class="botao">PERFIL</button></a>
    </div>

    <div class="Tipo">Tipo de serviço</div>

    <button class="Escolha">- Escolha o Serviço -</button>

    <div class="tempo">Tempo do contrato</div>

    <button class="Escolhatempo">- Escolha o Tempo de Contrato -</button>

    <button class="box"> Contratar Serviço </button>

    <div class="resultado"></div>

    


    



        

</body>


</html>
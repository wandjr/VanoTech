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
<body>
    <div class="menu">
            <img src="imagem/logo.png" id="logo" width="70px" height="70px">
            <a href="home.html"><button class="botao">HOME</button></a>
            <a href="servicos.html"><button class="botao">SERVIÇOS</button></a>
            <a href="trabalhe_conosco.html"><button class="botao">TRABALHE CONOSCO</button></a>
            <a href="simulacao_de_Contrato.html"><button class="botao">SIMULAÇÃO DE CONTRATO</button></a>
            <a href="contato.html"><button class="botao">CONTATO</button></a>
            <a href="perfil.html"> <button class="botao">PERFIL</button></a>
    </div>

    <div class="conteudo">
        <div class="texto">
            <p id="paragrafos_servico">
                Faça simulações e contratações de serviços com sua conta. É simples e rápido:
            </p>
        </div>
    </div>

    <form action="inserir.php" method="post">
        <div class="cadastro">
            E-mail
            <input type="email" id="email" name="email" class="caixa_texto" placeholder="pedro@gmail.com">
        </div>
        <br>


        <div class="cadastro">
            Nome
            <input type="text" name="nome" class="caixa_texto" placeholder="Mirianda">
        </div>
        <br>

        <div class="cadastro">
                Sobrenome
                <input type="text" name="sobrenome" class="caixa_texto" placeholder="Souza">
            </div>
            <br>

        <div class="cadastro">
            Senha
            <input type="password" name="senha" class="caixa_texto" placeholder="Senha123">
        </div>
        <br>

        <div class="cadastro">
            Confirmar Senha
            <input type="password" name="senha" class="caixa_texto" placeholder="Senha123">
        </div>
        <br>

        <div class="cadastro">
            Telefone
            <input type="number" name="telefone" class="caixa_texto" placeholder="(47) 99593-9247">
        </div>
        <br>

        <div class="cadastro">
            CPF
            <input type="text" name="cpf" class="caixa_texto" placeholder="123.456.789-10">
        </div>
        <br>

        <div class="cadastro">
            Data de Nascimento
            <input type="date" name="data_nascimento" class="caixa_texto" placeholder="22/06/1992">
        </div>
        <br>

        <a href="login.html"><button onmousemove="validar();" class="botao_cadastro">Fazer Cadastro</button></a>
        <br>
    </form>

    <div id="texto">Já possui cadastro?<a href="login.html" >Login</a></div>
    
    <br>
</body>


</html>
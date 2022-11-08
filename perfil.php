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
    <script src="jquery-3.6.0.min.js"></script>
    <script src="vanotech.js"></script>
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

#meu_upload
{
    display: none;
}

#outputImage
{
    
    width: 150px;
    height: 150px;
    border-radius: 200px;
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
            $imagem=$resultado['foto'];
        }else{
            $imagem="imagem/pessoa.png";
        }
?>

<body>

<br><br>
    <form id="formulario" action="" method="POST" enctype="multipart/form-data" >
    <div class="informacoes_perfil">
        <div id="foto" onclick="Trocar_imagem();">
            <canvas id="outputImage" width="176px" height="174px"></canvas>
        </div>

        <input type="file" id="meu_upload" name="foto_perfil">
        <br>

        
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

            <button onclick="Meu_click(1);">Salvar Informações</button>
            <button onclick="Meu_click(2);">Deletar Perfil</button>
            <button onclick="Abrir_cadastro();">Criar Novo Perfil</button>
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
    <?php echo($imagem) ?>
</body>
<script>

function Meu_click(meu_botao)
{
    if(meu_botao==1){
        formulario.action="update.php?botao="+meu_botao;
    }
    if(meu_botao==2){
        formulario.action="deletar.php?botao="+meu_botao;
    }

  formulario.submit();
}

function Abrir_cadastro()
{
  window.open("cadastro.php?", "_blank");
}

function Trocar_imagem()
{
    meu_upload.click();
}

$(document).on("change", "#meu_upload", function(e) {
    showThumbnail(this.files);
});

const inputImage = new Image();

function showThumbnail(files) {
    if (files && files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) 
        {
            //foto.style.backgroundImage = 'url(' +e.target.result+ ')';
            
            inputImage.src = e.target.result;

            crop(inputImage.src, 1/2)
        }
        
        reader.readAsDataURL(files[0]);
    }
}

var outputImageAspectRatio = 1;

function crop(url, aspectRatio) 
{
    
// we return a Promise that gets resolved with our canvas element
return new Promise(resolve => 
{
    inputImage.onload = () => 
    {

        var outputImage = document.getElementById('outputImage');

        // set it to the same size as the image
        outputImage.width = inputImage.naturalWidth;
        outputImage.height = inputImage.naturalHeight;

        var inputWidth = inputImage.naturalWidth;
        var inputHeight = inputImage.naturalHeight;

        var inputImageAspectRatio = inputWidth / inputHeight;
    
        // if it's bigger than our target aspect ratio
        let outputWidth = inputWidth;
        let outputHeight = inputHeight;

        if (inputImageAspectRatio > outputImageAspectRatio) 
        {
            outputWidth = inputHeight * outputImageAspectRatio;
        } 
        else if (inputImageAspectRatio < outputImageAspectRatio) 
        {
            outputHeight = inputHeight / outputImageAspectRatio;
        }

        var outputX = (outputWidth - inputWidth) * .5;
        var outputY = (outputHeight - inputHeight) * .5;

        // set it to the same size as the image
        outputImage.width = outputWidth;
        outputImage.height = outputHeight;

        // draw our image at position 0, 0 on the canvas

        var ctx = outputImage.getContext('2d');
        ctx.drawImage(inputImage, outputX, outputY);  
    };
})
}

inputImage.src = "<?php echo($imagem) ?>";
crop(inputImage.src, 1/2)
</script>
</html>
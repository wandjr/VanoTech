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
    border-color: black;
    border-width: 30px;
}

#caixa_info_nome
{
    border-color: #042653;
    color: black;
    border-style: none;
    background: #042653;
    text-align: center;
}

.caixa_info
{
    margin-top: 10px;
    height: 20px;
    border-color: #042653;
    color: black;
    border-style: none;
    background: white;
}
    </style>

</head>

<?php

echo        '<div class="menu">
                <img src="imagem/logo.png" id="logo" width="70px" height="70px">
                <a href="home.php?email='.urlencode($_SESSION['email']). '"><button class="botao">HOME</button></a>
                <a href="servicos.php?email='.urlencode($_SESSION['email']). '"><button class="botao">SERVIÇOS</button></a>
                <a href="cadastro.php?email='.urlencode($_SESSION['email']). '"><button class="botao">CADASTRO</button></a>
                <a href="simulacao_de_Contrato.php?email='.urlencode($_SESSION['email']). '"><button class="botao">SIMULAÇÃO DE CONTRATO</button></a>
                <button class="botao_selecionado">PERFIL</button>
            </div>';


include("conecta.php");

$email=$_GET["email"];
$ImgDecode="imagem/pessoa.png";

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
            $cod_usuario=$resultado['cod_usuario'];
            $ImgRaw=$resultado['foto'];
           
            $ImgRaw         = str_replace("base64,", "", $ImgRaw);

            $ImgDecode      = base64_decode($ImgRaw);
            
        }
?>

<body>

<br><br>
    <form id="formulario" action="" method="POST" enctype="multipart/form-data" >
    <div class="informacoes_perfil">
    <?php echo("<img id='imagem' src='".$ImgDecode."'>"); ?>
        <div id="foto" onclick="Trocar_imagem();">
            <canvas id="outputImage" width="176px" height="174px">
            </canvas>
        </div>

        <input type="file" id="meu_upload" name="foto_perfil">
        <br>

        
            <input type="text" id="caixa_info_nome" value="<?php echo($nome) ?>" name="nome">

            <div class="">Sobrenome</div>
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

           
        </form>
    </div>
    <a href="cadastro.php"> <button>Criar Novo Perfil</button></a>

    <div>Contrato</div>

    <table border="2">
    <tr>
        <td>Código</td>
        <td>Local</td>
        <td>Data</td>
        <td>Horário</td>
        <td>Preço</td>
        <td>Funcionário</td>
        <td>Serviço</td>
        <td>Duração</td>
        <td></td>
    </tr>
        <?php 
        $comando = $pdo -> prepare("SELECT * From contrato where cod_usuario = :cod_usuario");

        $comando -> bindValue(":cod_usuario",$cod_usuario);

        $comando -> execute();

        $resultado = $comando->fetchAll();
        foreach($resultado as $linha)
        {
            $cod_contrato=$linha["cod_contrato"];
            $local_servico=$linha["local_servico"];
            $data_servico=$linha["data_servico"];
            $horario_servico=$linha["horario_servico"];
            $preco=$linha["preco"];
            $funcionario=$linha["funcionario"];
            $tipo_servico=$linha["tipo_servico"];
            $duracao_contrato=$linha["duracao_contrato"];

            if($duracao_contrato==1)
            {
                $duracao_contrato="1 dia";
            }
            if($duracao_contrato==30)
            {
                $duracao_contrato="1 mês";
            }
            if($duracao_contrato==180)
            {
                $duracao_contrato="6 meses";
            }
            if($duracao_contrato==365)
            {
                $duracao_contrato="1 ano";
            }
            if($duracao_contrato==730)
            {
                $duracao_contrato="2 anos";
            }

            echo("<tr>
            <td>$cod_contrato</td>
            <td>$local_servico</td>
            <td>$data_servico</td>
            <td>$horario_servico</td>
            <td>$preco</td>
            <td>$funcionario</td>
            <td>$tipo_servico</td>
            <td>$duracao_contrato</td>
            <td><a href='editar_contrato.php?cod_contrato=$cod_contrato'><img src='imagem/editar.png' width='20px'></a></td>
            </tr>");
        }
      
        if(isset($_SESSION["adm"]) == 1)
        {
            $comando = $pdo -> prepare("SELECT * FROM usuario");
    
            $comando -> execute();
            $resultado = $comando->fetchAll();
            foreach($resultado as $linha)
            {
                $cod_usuario=$linha["cod_usuario"];
                $nome=$linha["nome"];
                $sobrenome=$linha["sobrenome"];
                $email=$linha["email"];
                $senha=$linha["senha"];
                $telefone=$linha["telefone"];
                $cpf=$linha["cpf"];
                $data_nascimento=$linha["data_nascimento"];
            echo("
            <div>Usuários</div>

            <table border='2'>
            <tr>
                <td>Código</td>
                <td>Nome</td>
                <td>Sobrenome</td>
                <td>Email</td>
                <td>Senha</td>
                <td>Telefone</td>
                <td>CPF</td>
                <td>Data de Nascimento</td>
            </tr>
            <tr>
            <td>$cod_usuario</td>
            <td>$nome</td>
            <td>$sobrenome</td>
            <td>$email</td>
            <td></td>
            <td>$telefone</td>
            <td>$cpf</td>
            <td>$data_nascimento</td>
            <td><a href='editar_usuario.php?cod_usuario=$cod_usuario'><img src='imagem/editar.png' width='20px'></a></td>
            </tr>");
        }
    }
        ?>
    
    </table>
    
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
  window.open("cadastro.php", "_self");
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

    inputImage.src = "<?php echo('../imagem/teste.jpg');?>";
crop(inputImage.src, 1/2)
</script>
</html>
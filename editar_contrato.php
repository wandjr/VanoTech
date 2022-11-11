<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible">
    <title>Editar Contrato</title>
    <link rel="stylesheet" href="vanotech.css" />
    <link href='https://fonts.googleapis.com/css?family=Volkhov' rel='stylesheet'>
</head>

<style>

</style>

<body>  

<form action="atualizar_contrato.php" method="POST">

<div>Local do Serviço</div>
<select name="local_servico">
    <object>MN Contabilidade (Joinville SC)</object>
</select>

<div>Data do Serviço</div>
<input type="date" name="data_servico">

<div>Horário do Serviço</div>
<input type="time" name="horario_servico">

<input type="submit">
</form>

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo IMC</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>

<?php

$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$media = ($nota1 + $nota2) / 2;

echo "<h1 class='text-center'>Resultado</h1>";

if($media < 4.0){
    echo "<input type='text' class='form-control text-center cool-4 mx-auto' value=" . $media . ">";
    echo "<h3 class='text-center'>Reprovado</h3>";
}else if($media >= 4.0 and $media < 6.0){
    echo "<input type='text' class='form-control text-center cool-4 mx-auto' value=" . $media . ">";
    echo "<h3 class='text-center'>Exame Final</h3>";
}else{
    echo "<input type='text' class='form-control text-center cool-4 mx-auto' value=" . $media . ">";
    echo "<h3 class='text-center'>Aprovado</h3>";
}


?>


</body>

</html>
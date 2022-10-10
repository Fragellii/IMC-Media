<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <?php

    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $imc = $peso/pow($altura,2);
    echo "<h1 class='text-center'>Resultado</h1>";
    if($imc<17){
        echo "<input type='text' class='form-control text-center  col-4 mx-auto' value=".$imc .">";
        echo "<h3 class='text-center'>Muito abaixo do peso</h3>";
    }elseif($imc >= 17 and $imc < 18.49){
        echo "<input type='text' class='form-control text-center  col-4 mx-auto' value=".$imc .">";
        echo "<h3 class='text-center'>Abaixo do peso</h3>";
    }elseif($imc >= 18.5 and $imc < 24.99){
        echo "<input type='text' class='form-control text-center  col-4 mx-auto' value=".$imc .">";
        echo "<h3 class='text-center'>Peso Normal</h3>";
    }elseif($imc >= 25 and $imc < 29.99){
        echo "<input type='text' class='form-control text-center  col-4 mx-auto' value=".$imc .">";
        echo "<h3 class='text-center'>Acima do peso</h3>";
    }elseif($imc >= 30 and $imc < 34.99){
        echo "<input type='text' class='form-control text-center  col-4 mx-auto' value=".$imc .">";
        echo "<h3 class='text-center'>Obesidade I</h3>";
    }elseif($imc >= 35 and $imc < 39.99){
        echo "<input type='text' class='form-control text-center  col-4 mx-auto' value=".$imc .">";
        echo "<h3 class='text-center'>Obesidade II (severa)</h3>";
    }else{
        echo "<input type='text' class='form-control text-center  col-4 mx-auto' value=".$imc .">";
        echo "<h3 class='text-center'>Obesidade III (mórbida)</h3>";
    }

    ?>
</body>
</html>
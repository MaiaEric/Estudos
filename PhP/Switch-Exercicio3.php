<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="text-center">
    <h1>Bem-Vindo Cliente</h1>
    <h2>Por favor insira o codigo do seu pedido</h2>
    </div>
    <form action = Switch-Exercicio3.php method = "post">
    Insira o codigo aqui: <input type="text" name="cod"><br>
<input type = "submit" class="btn btn-warning top-0">

<div class="border border-danger text-success w-75 p-3 h-50 d-inline-block fs-3 text-center container-sm">

<?php
    $nome= $_POST["cod"];
    switch ($nome){
    case "100";
echo "<br>O seu produto vai ser: Cachorro Quente<br> E custará: R$5,00";
break;
    case "101";
echo "<br>O seu produto vai ser: Hamburguer<br> E custará: R$7,00";
    break;
    case "102";
echo "<br>O seu produto vai ser: Misto Quente<br> E custará: R$4,00";
    break;
    case "103";
    echo "<br>O seu produto vai ser: Super Burgão<br> E custará: R$13,00";
        break;
        case "104";
        echo "<br>O seu produto vai ser: Refrigerante<br> E custará: R$4,00";
            break;
            case "105";
            echo "<br>O seu produto vai ser: Sundae<br> E custará: R$7,00";
                break;
}
?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
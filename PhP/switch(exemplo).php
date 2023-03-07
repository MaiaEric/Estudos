<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>switch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exemplo 1</h1>
    <form action = switch(exemplo).php method = "post">
    Informe o nome do usuario: <input type="text" name="opr1"><br>
<input type = "submit" class="btn btn-warning top-0">

<div class="border border-primary text-danger w-75 p-3 h-50 d-inline-block fs-2 text-center">

<?php
    $nome= $_POST["opr1"];
    switch ($nome){
    case "Jailson";
echo "<br>Operação desejada será:soma";
break;
    case "Melane";
echo "<br>Operação desejada será:subtração";
    break;
}
?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
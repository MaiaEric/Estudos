<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="text-center">
    <h1>Area do Treinador</h1>
    <h2>Aguardando a idade dos atletas</h2>
    </div>
    <form action = Switch-Exercicio4.php method = "post">
    Insira a idade aqui para indicar a categoria: <input type="text" name="idade"><br>
<input type = "submit" class="btn btn-warning top-0">

<div class="border border-danger text-success w-75 p-3 h-50 d-inline-block fs-3 text-center container-sm">

<?php
    $nome= $_POST["idade"];
    switch ($nome){
    case $nome>=5 && $nome<=10;
echo "<br>A Categoria do seu atleta será: Infantil";
break;
    case $nome>=11 && $nome<=15;
echo "<br>A Categoria do seu atleta será: Juvenil";
    break;
    case $nome>=16 && $nome<=20;
echo "<br>A Categoria do seu atleta será: Júnior";
    break;
    case $nome>=21 && $nome<=25;
    echo "<br>A Categoria do seu atleta será: Profissional";
    break;
}
?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
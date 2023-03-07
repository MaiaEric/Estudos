<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>While</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercicio 2</h1>
    <form action="While-Exercicio2.php" method="post">
<label>Insira o numero 10:
<input type="text" name= "num">
</form>
<div class="container-lg border border-warning fs-5 p-3 mb-2 bg-warning text-dark">
<div class="d-inline p-0 text-bg-info opacity-45">
<?php
    $num= $_POST["num"];
    while ($num<=20){
echo "<br>O numero digitado é ", $num, ". E seu dobro/triplo é: ",$dob,"/",$tri, "<br>";
$num=$num+1;
$dob=$num*2;
$tri=$num*3;
}
echo "finalizado!";
?>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
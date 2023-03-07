<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Questão 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <form action="Questao4.php" method="post">
    <div class = "fs-1 container-md border border-success">
<label>Informe um valor menor que 80:
</div>
<br>
<input type="text" name="num" placeholder="Ex.:45">
<br>
</form>
<div class="shadow-lg rounded">
<div class = "border border-warning container-lg bg-info fs-2 border border-4">
<?php
    $num= $_POST["num"];
    while ($num<=120){
echo "N°: ", $num, "<br>";
$num=$num+5;
}

?>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
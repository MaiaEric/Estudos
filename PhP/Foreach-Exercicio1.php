<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Foreach</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercicio 1</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <form action="Foreach-Exercicio1.php" method="post">
<label>Informe os ultimos três salários de Jason: <br>
<input type="text" name= "num1"><br>
<input type="text" name= "num2"><br>
<input type="text" name= "num3"><br><br>
<input type ="submit">
</form>
<?php
$sal1=$_POST["num1"];
$sal2=$_POST["num2"];
$sal3=$_POST["num3"];
$salarios = array($sal1, $sal2, $sal3);
foreach ($salarios as $valor){
echo "O valor dos salários são: <br>";
echo "$valor <br>";}
?> 
</body>
</html>
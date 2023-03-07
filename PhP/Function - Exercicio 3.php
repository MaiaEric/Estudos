<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Função</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercicio 3</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <form action="Function - Exercicio 3.php" method="post">
<label>Insira um numero:
<input type="text" name= "num1"><br><br>
<label>Insira outro numero:
<input type="text" name= "num2"><br>
<input type ="submit">
</form>
    <?php
    $num1= $_POST["num1"];
    $num2= $_POST["num2"];
    function sub($num1,$num2){
        $tot=$num1*$num2;
        return $tot;
        }
        echo "A multiplicação entre os dois valores é: ";
       echo sub ($num1, $num2)
?> 
</body>
</html>
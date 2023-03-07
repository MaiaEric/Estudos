<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>min e max</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercicio 1</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <?php
    $notas1 = ("5, 7, 10, 9, 3");
    $notas2 = ("8, 6, 4, 2, 9.5");
   echo "<br> As notas de Genoveva em Linguagem de Programação este semestre foram: <br>". $notas1;
   echo "<br> As notas de Teobaldo em Linguagem de Programação este semestre foram: <br>". $notas2;
   echo"<br> a nota minima que Teobaldo tirou foi <br>";
echo min(8, 6, 4, 2, 9.5);
echo"<br> a nota maxima que Genoveva tirou foi <br>";
echo max(5, 7, 10, 9, 3);
$preços = ("250, 150, 70, 120");
echo "<br> Os preços do tenis que Bartolomeu pesquisou foram: <br>". $preços;
echo"<br> O menor valor é o de: <br>";
echo min(250, 150, 70, 120);
echo"<br> O maior valor é o de: <br>";
echo max(250, 150, 70, 120);
  ?>
</body>
</html>
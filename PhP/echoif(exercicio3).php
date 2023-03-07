<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 3 (Echo if)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

<form action = echoif(exercicio3).php method = "post">

Informe a 1° Nota : <input type="text" name="1not"><br>
Informe a 2° Nota : <input type="text" name="2not"><br>
<input type = "submit">
<div class = "border border-dark text-center">
    <?php
$total=$_POST['1not'+ '2not'];
$media=$total/2;
        $temperatura = $_POST['temp'];
        if ($temperatura>39){
            echo "<br> Febre Alta";
        }else if($temperatura>=37 && $temperatura<=38){
            echo "<br> Febre";
        }else {
          echo "<br> Sem Febre";
        }

    ?>
</div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
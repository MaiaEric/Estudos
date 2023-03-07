<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 4 (Echo if)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

<form action = echoif(exercicio4).php method = "post">

Informe a temperatura indicada : <input type="text" name="temp"><br>

<input type = "submit">
<div class = "border border-warning text-center">
    <?php
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
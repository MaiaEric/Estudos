<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 1 (Echo if)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

<form action = echoif(exercicio1).php method = "post">

Informe um salario : <input type="text" name="sal"><br>

<input type = "submit">
<div class = "border border-success text-center">
    <?php

        $salario = $_POST["sal"];
        if ($salario<900){
            echo "<br> O individuo é um estagiario";
        }else if($salario>3000){
            echo "<br> O individuo é um funcionario";
        } else {
          echo"<br> O individuo é um Trainee";
        }

    ?>
</div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
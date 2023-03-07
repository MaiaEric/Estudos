<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 2 (Echo if)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

<form action = echoif(exercicio2).php method = "post">

Informe o valor da consulta : <input type="text" name="consulta"><br>

<input type = "submit">
<div class = "border border-warning text-center">
    <?php
        $consulta = $_POST["consulta"];
        if ($consulta< 100 && $consulta=100){
            echo "<br> A consulta é popular";
        }else if($consulta>250){
            echo "<br> A consulta + revisão";
        } else {
          echo"<br> A consulta é simples";
        }

    ?>
</div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
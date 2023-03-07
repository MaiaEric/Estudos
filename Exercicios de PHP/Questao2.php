<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Questão 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

<form action = Questao2.php method = "post">

Informe o numero de jogadores : <input type="text" name="num"><br>

<br><input type = "submit"><br>
<div class="container-md">
<div class = "border border-warning text-center text-warning bg-dark">
    <?php
        $j = $_POST["num"];
        if ($j=0 || $j<=1){
            echo "<br> Não forma equipes";
        }else if($j>=2 || $j<=4){
            echo "<br> Equipe formada com sucesso <br> Capitão da Equipe: Levi";
        } else{
            echo "<br> Valor invalido";
        }
    ?>
</div> 
</div>   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
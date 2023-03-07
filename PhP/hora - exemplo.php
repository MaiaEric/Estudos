<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exericio 1 (hora)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercicio 1</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <?php
setlocale(LC_TIME, 'pt-BR', 'pt-BR.utf-8', 'pt-BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
echo ("A data de hoje é:<br>");
echo strftime('%A, %d de %B de %Y', strtotime('today'));
echo ("<br><br>Não importa quanto tempo você tem, é como você usa");
echo("<br>A quantidade de caracetere da frase a cima é de:<br>");
echo strlen("A quantidade de caracetere da frase a cima é de:");
echo("<br>E a quantidade de palavras é de:<br>");
echo str_word_count("A quantidade de caracetere da frase a cima é de:");
    ?>
    </body>
    </html>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
      <h1>Informações do aluno</h1>
    <form action = "pag1 to pag2(cadastroaluno).php" method = "post">
<input type="text" name="nomaluno" placeholder="Nome do aluno"><br>
<input type="text" name="matricula" placeholder="N° da matricula"><br>
<input type="text" name="Datnasc" placeholder="Data de nascimento"><br>
<input type="text" name="nomrespon" placeholder="Nome do responsavel"><br>
<input type="text" name="cid" placeholder="Cidade"><br>
<input type = "submit" value="Enviar">
</form><br><br>

      <h2>Informações do Funcionario</h2>
<form action = "pag1 to pag2(cadastrofuncionario).php" method = "post">
<input type="text" name="nomfunc" placeholder="Nome do funcionario"><br>
<input type="text" name="matricula" placeholder="N° da matricula"><br>
<input type="text" name="Datnasc" placeholder="Data de nascimento"><br>
<input type="text" name="funcao" placeholder="Função do funcionario"><br>
<input type = "submit" value="Enviar">
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
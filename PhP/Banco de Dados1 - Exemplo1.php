<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exemplo 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
  <br><br>
  <div class="col-md-4"></div>
  <div class="col-md-4">
  <h3>Faça sua Inscrição</h3>
  <br>

  <form action ="Banco de Dados3 - Exemplo1.php" method="post" id="formRegistro">
<br>
<div class="form-group">
titulo: <input type = "text" class="form-control"  name="titulo"><br>
autor: <input type = "text" class="form-control"  name="autor" ><br>
editora: <input type = "text" class="form-control" name="editora" ><br>
ano: <input type = "date" class="form-control" name="ano" ><br>
pagina: <input type = "text" class="form-control" name="pagina" ><br>
preço: <input type = "text" class="form-control" name="preco" ><br>
<button type = "submit" class="btn btn-primary form-control">Inscreva-se</button>
</div>
</form>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>

</body>
<?php

require_once("Banco de Dados2 - Exemplo1.php");
$titulo = $_POST["titulo"];
$autor= $_POST["autor"];
$editora = $_POST["editora"];
$ano = $_POST["ano"];
$pagina = $_POST["pagina"];
$preco = $_POST["preco"];
$objDb = new db();
$link = $objDb -> conecta_mysql();

$sql = "insert into tb_livraria(titulo, autor, editora, ano, pagina, preco) values ('$titulo', '$autor', '$editora','$ano', '$pagina', '$preco')";

        if(mysqli_query($link, $sql)){
            echo "livro registrado com sucesso";
        } else{
            echo "erro ao registrar o livro";
        }
?>
<?php

require_once("Banco de dados (Dream Garden) - Conexão.php");
$nome = $_POST["nome"];
$email= $_POST["email"];
$senha = $_POST["senha"];
$objDb = new db();
$link = $objDb -> conecta_mysql();

$sql = "insert into tb_perfil(nome, email, senha) values ('$nome', '$email', '$senha')";
        if(mysqli_query($link, $sql)){
            echo "<script>alert('Cadastro realizado!');location.href='index.html';</script>";
        } else{
            echo "Erro ao registrar o perfil";
        }
?>
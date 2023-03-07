<?php

require_once("Questão 2(Conexão).php");
$nome = $_POST["nome"];
$idade= $_POST["idade"];
$dep = $_POST["departamento"];
$objDb = new db();
$link = $objDb -> conecta_mysql();

$sql = "insert into tb_funcionarios(nome, idade, departamento) values ('$nome', '$idade', '$dep')";
        if(mysqli_query($link, $sql)){
            echo "Funcionario registrado com sucesso";
        } else{
            echo "erro ao registrar o Funcionario";
        }
?>
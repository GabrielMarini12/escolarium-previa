<?php 
    include("bd/bd.php");

    $email = $_POST["email"];
    $nome = $_POST["name"];
    $sobrenome = $_POST["lastname"];
    $senha = $_POST["password"];

    $sql = "insert into pessoas(nome, sobrenome, email, senha) values ('${nome}','${sobrenome}','${email}','${senha}');";

    mysqli_query($conexao, $sql);
    include("bd/bdClose.php");
    
    header("location: livros.php");
?>
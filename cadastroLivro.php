<?php 
    include("bd/bd.php");

    $nome = $_POST["name"];
    $genero = $_POST["gender"];
    $autor = $_POST["autor"];
    $ano = $_POST["year"];
    $idDono = "2";

    $sql = "insert into livros(nome_livro, genero, autor, ano, dono_id) values ('${nome}','${genero}','${autor}',${ano}, ${idDono});";

    mysqli_query($conexao, $sql);
    include("bd/bdClose.php");
    
    header("location: livros.php");
?>
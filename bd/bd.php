<?php

    $nomeServidor = "localhost";
    $usuario = "julia";
    $senha = "Julia@2010";
    $banco = "escolarium";

    $conexao = new mysqli($nomeServidor, $usuario, $senha, $banco);

    if($conexao->connect_error) {
        die("Erro de conexão com o banco de dados " .$conexao->connect_error);
    }

?>
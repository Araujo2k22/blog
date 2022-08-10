<?php

function conecta() : mysqli
{
    $servidor = 'localhost';
    $banco = 'blog';
    $port = 3307;
    $usuario = 'root';
    $senha = '';
    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco, $port);

    if(!$conexao){
        echo 'Error: Não foi possível conectar ao MySql.' . PHP_EQL;
        echo 'Debugging errno: ' . mysqli_connect_errno() . PHP_EQL;
        echo 'Debugging error: ' . mysqli_connect_error() . PHP_EQL;
        return null;
    } 
    return $conexao;
}

function desconecta($conexao)
{
    mysqli_close($conexao);
}
?>
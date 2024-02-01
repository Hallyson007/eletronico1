<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'eletronico';
$port = '3306';

// Estabelecendo a conexão
$conexao = mysqli_connect($hostname, $username, $password, $database, $port);

// Verificando a conexão
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
echo "Conexão bem-sucedida";
?>

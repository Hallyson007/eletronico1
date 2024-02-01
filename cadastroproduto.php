<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $produto = $_POST['produto'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];
    $estoque = $_POST['estoque'];
    $preco = $_POST['preco'];

    $sql = "INSERT INTO produtos (produto, descricao, categoria, estoque, preco) VALUES ('$produto', '$descricao', '$categoria', $estoque, $preco)";

    if ($conexao->query($sql) === TRUE) {
        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conexao->error;
    }

    $conexao->close();
}


header('Location: formproduto.php');

?>

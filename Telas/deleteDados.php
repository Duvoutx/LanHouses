<?php
session_start();
$nome_servidor = "db4free.net";
$nome_usuario = "lanhouses";
$senha_banco = "lanhouses";
$nome_banco = "lanhouse";
// Criando conexão
$conecta = new mysqli($nome_servidor, $nome_usuario, $senha_banco, $nome_banco);
// Verificar conexão
if ($conecta->connect_error) {
    die("Conexão falhou: " . $conecta->connect_error . "<br>");
}

// Verificar se o ID foi recebido
if (isset($_GET['IDCliente'])) {
    $id = $_GET['IDCliente'];

    // Apagar registro
    $sql = "DELETE FROM Cliente WHERE IDCliente = $id";
    if ($conecta->query($sql) === TRUE) {
        echo "Registro apagado com sucesso<br>";
        header("Location:index.html");
    } else {
        echo "Erro ao apagar o registro: " . $conecta->error . "<br>";
    }
} else {
    echo "ID não recebido";
}

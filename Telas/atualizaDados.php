<?php
session_start();
$nome_servidor = "db4free.net";
$nome_usuario = "lanhouses";
$senha_banco = "lanhouses";
$nome_banco = "lanhouse";

//Criando conexão
$conecta = new mysqli($nome_servidor, $nome_usuario, $senha_banco, $nome_banco);
//Verificar conexão
if ($conecta->connect_error) {
    die("Conexão falhou: " . $conecta->connect_error . "<br>");
}

$nome = $_POST['Nome'];
$senha = $_POST['senha'];
$email = $_POST['Email'];
$IDCliente = $_POST['IDCliente'];

$sql = "UPDATE Cliente SET senha='$senha' ,Nome='$nome' WHERE Email='$email'";
if ($conecta->query($sql) === TRUE) {

    header("Location:login.html");
    exit();
} else {
    echo "Erro ao atualizar o registro: " . $conecta->error;
}

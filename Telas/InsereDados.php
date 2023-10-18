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

//Recebe Usuarios

$name = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$sql = "INSERT INTO Cliente (Nome,Email,senha) values ('$name','$email','$senha')";
if ($conecta->query($sql) === true) {
    header("Location:Login.html");
    exit();
} else {
    echo "Erro ao criar Cliente" . $conecta->error;
}

<?php
session_start();

$nome_servidor = "db4free.net";
$nome_usuario = "lanhouses";
$senha_banco = "lanhouses";
$nome_banco = "lanhouse";

$login = $_POST['Nome'];
$senha = $_POST['senha'];

//Criando conexão
$conecta = new mysqli($nome_servidor, $nome_usuario, $senha_banco, $nome_banco);
//Verificar conexão
if ($conecta->connect_error) {
    die("Conexão falhou: " . $conecta->connect_error . "<br>");
}

$sql = "SELECT * FROM Cliente WHERE Nome = '$login' AND senha = '$senha'";
$result = $conecta->query($sql);
// Verifica se o usuário foi encontrado no banco de dados
if ($result->num_rows >= 1) {
    // Armazena o ID do usuário na sessão
    $_SESSION['Nome'] = $login;
    $_SESSION['senha'] = $senha;
    // Redireciona para a página inicial após o login bem-sucedido
    header('Location: Gerencia.php');
} else {
    session_unset(); //remove todas as variáveis de sessão
    session_destroy(); //destroi a sessão
    echo "<script> 
                alert('Login ou senha incorreto');
                window.location.href = 'login.html';
            </script>";
}

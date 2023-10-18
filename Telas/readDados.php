<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: white;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        td a {
            text-decoration: none;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn.edit {
            background-color: #008CBA;
        }

        .btn.delete {
            background-color: #f44336;
        }
    </style>
</head>

<body>
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

    $sql = "SELECT IDCliente, Nome, Email FROM Cliente";
    $result = $conecta->query($sql);
    $qtd = $result->num_rows;

    if ($qtd > 0) {
        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<td>Id</td>';
        echo '<td>Nome</td>';
        echo '<td>Email</td>';
        echo '<td>Ações</td>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        while ($linha = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $linha["IDCliente"] . "</td>";
            echo "<td>" . $linha["Nome"] . "</td>";
            echo "<td>" . $linha["Email"] . "</td>";
            echo "<td>
                <button onclick=\"location.href='editaDados.html'\" class=\"btn btn-danger\">Editar</button>
                <button onclick=\"excluirDados()\" class=\"btn btn-danger\">Excluir</button>
                </td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "0 results";
    }

    $conecta->close();
    ?>
    <script>
        function excluirDados() {
            var id = prompt('Insira o ID para poder excluir:'); 
            if (id) {
               
                var url = 'deleteDados.php?IDCliente=' + encodeURIComponent(id); 
                window.location.href = url; 
            }
        }
    </script>
</body>

</html>
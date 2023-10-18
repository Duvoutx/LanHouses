<!doctype html>
<html lang="pt-br" data-bs-theme="auto">

<head>
    <?php
    session_start(); //Inicia uma nova sessão ou resume uma sessão existente
    if ((!isset($_SESSION['Nome']) == true) and (!isset($_SESSION['senha']) == true)) {
        session_unset(); //remove todas as variáveis de sessão
        echo "<script>
                    alert('Esta página só pode ser acessada por usuário logado');
                    window.location.href = 'exemplo.html';
                    </script>";
    }
    $logado = $_SESSION['Nome'];
    ?>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title>Fale com a gente</title>

    <link rel="stylesheet" type="text/css" href="Css/Contato.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Contato.css">
</head>

<body>

    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check" viewBox="0 0 16 16">
            <title>Check</title>
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
    </svg>

    <div class="container py-3">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="indexLogado.php" class="d-flex align-items-center link-body-emphasis text-decoration-none">
                    <span class="fs-4">Lan House's</span>
                </a>

                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">

                    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="indexLogado.php">Preços</a>
                    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="maquinasLogado.php">Maquinas</a>
                    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="Gerencia.php>">Gerenciar</a>
                    <a class="py-2 link-body-emphasis text-decoration-none" href="logout.php">Sair</a>
                </nav>
            </div>
        </header>


    </div>
    <div class="col-md-6">

        <div class="wow fadeInUp" data-wow-delay="0.2s">
            <form>
                <div class="row g-3" class="form-container">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="nome" placeholder="Nome Completo">
                            <label for="nome">Seu Nome Aqui</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                            <label for="email">Seu E-mail Aqui</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="assunto" placeholder="Assunto">
                            <label for="assunto">Seu Assunto Aqui</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Deixe sua mensagem aqui" id="menssagem" style="height: 150px"></textarea>
                            <label for="mensagem">Sua Mensagem Aqui</label>

                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" type="submit">Enviar Mensagem</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>
    <Style>
        * {
            margin: 0%;
            padding: 0%;
            box-sizing: 0;
        }

        body {
            width: 100vw;
            height: 100vh;
            background-image: url(img/nuvens.jpg);
        }
    </Style>
</body>

</html>
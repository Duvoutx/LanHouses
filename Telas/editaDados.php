<!doctype html>

<html lang="en">

<head>
<?php
    session_start();
    if ((!isset($_SESSION['Nome']) == true) and (!isset($_SESSION['senha']) == true)) {
        session_unset();
        echo "<script>
                    alert('Esta página só pode ser acessada por usuário logado');
                    window.location.href = 'exemplo.html';
                    </script>";
    }
    $logado = $_SESSION['Nome'];
    ?>

    <title>Lan House's</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <style>
        body {
            background-image: url(img/nuvens.jpg);
        }
    </style>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h1 class="mb-4"><span class="text-primary text-uppercase"> </span></h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img" style="background-image: url(img/carousel-1.jpg);"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Edite seu cadastro</h3>
                                </div>

                            </div>
                            <form action="atualizaDados.php" class="signin-form" method="post">
                                <div class="form-group mt-3">
                                    <label class="form-control-placeholder" for="Nome">Novo Nome de Usuario</label>
                                    <input type="text" class="form-control" name="Nome" required>

                                </div>
                                <div class="form-group mt-3">
                                    <label class="form-control-placeholder" for="senha">Nova Senha</label>
                                    <input type="text" class="form-control" name="senha" required>

                                </div>
                                <div class="form-group">
                                    <label class="form-control-placeholder" for="Email">Email Original</label>
                                    <input id="password-field" type="text" class="form-control" name="Email" required>

                                </div>

                                <div class="form-group">
                                    <button type="submit"
                                        class="form-control btn btn-primary rounded submit px-3">Entrar</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Lembrar de mim
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </form>
                           <marquee> <a class="py-2 link-body-emphasis text-decoration-none" href="readDados.php">Apagar
                                conta</a> </marquee>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</body>

</html>
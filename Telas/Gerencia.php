<!doctype html>
<html lang="pt-br" data-bs-theme="auto">

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
    <script src="../assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title>Gerenciamento</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/grid/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="cronometro.css" rel="stylesheet">
</head>

<body class="py-4">
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
                    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="maquinasLogado.php">Maquinas</a>
                    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="contactLogado.php">Contato</a>
                    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="editaDados.php">Editar dados</a>
                    <a class="py-2 link-body-emphasis text-decoration-none" href="logout.php">Sair</a>
                </nav>
            </div>
            <main>
                <link href="Botao.css" rel="stylesheet">
                <div class="container">
                    <h1>Gerenciamento</h1>
                    <div class="row mb-3 text-center">
                        <div class="col-4 themed-grid-col">
                            <form class='container mt-5 mb-5' name="form_main1">
                                <H2>BAIA 1/XBOX</H2>
                                <div class='row mb-5 d-flex justify-content-center'>
                                    <div class='col-md-6 d-flex justify-content-center fs-1 border border-warning border-5 numbers'>
                                        <span id="hour1">00</span>
                                        <span>:</span>
                                        <span id="minute1">00</span>
                                        <span>:</span>
                                        <span id="second1">00</span>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="col d-flex justify-content-center p-0">
                                        <button class='btn btn-success btn-lg' type="button" name="start1">
                                            <label for="start1">Começar</label>
                                            <i class="fa fa-play fs-1" aria-hidden="true"></i>
                                        </button>
                                        <button class='btn btn-danger btn-lg me-4 ms-4' type="button" name="pause1">
                                            <label for="pause1">Pausar</label>
                                            <i class="fa fa-pause fs-1" aria-hidden="true"></i>
                                        </button>
                                        <button class='btn btn-primary btn-lg' type="button" name="reset1">
                                            <label for="reset1">Resetar</label>
                                            <i class="fa fa-undo fs-1" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-4 themed-grid-col">
                            <form class='container mt-5 mb-5' name="form_main2">
                                <H2>BAIA 2/XBOX</H2>
                                <div class='row mb-5 d-flex justify-content-center'>
                                    <div class='col-md-6 d-flex justify-content-center fs-1 border border-warning border-5 numbers'>
                                        <span id="hour2">00</span>
                                        <span>:</span>
                                        <span id="minute2">00</span>
                                        <span>:</span>
                                        <span id="second2">00</span>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="col d-flex justify-content-center p-0">
                                        <button class='btn btn-success btn-lg' type="button" name="start2">
                                            <label for="start2">Começar</label>
                                            <i class="fa fa-play fs-1" aria-hidden="true"></i>
                                        </button>
                                        <button class='btn btn-danger btn-lg me-4 ms-4' type="button" name="pause2">
                                            <label for="pause2">Pausar</label>
                                            <i class="fa fa-pause fs-1" aria-hidden="true"></i>
                                        </button>
                                        <button class='btn btn-primary btn-lg' type="button" name="reset2">
                                            <label for="reset2">Resetar</label>
                                            <i class="fa fa-undo fs-1" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-4 themed-grid-col">
                            <form class='container mt-5 mb-5' name="form_main3">
                                <H2>BAIA 3/XBOX</H2>
                                <div class='row mb-5 d-flex justify-content-center'>
                                    <div class='col-md-6 d-flex justify-content-center fs-1 border border-warning border-5 numbers'>
                                        <span id="hour3">00</span>
                                        <span>:</span>
                                        <span id="minute3">00</span>
                                        <span>:</span>
                                        <span id="second3">00</span>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="col d-flex justify-content-center p-0">
                                        <button class='btn btn-success btn-lg' type="button" name="start3">
                                            <label for="start3">Começar</label>
                                            <i class="fa fa-play fs-1" aria-hidden="true"></i>
                                        </button>
                                        <button class='btn btn-danger btn-lg me-4 ms-4' type="button" name="pause3">
                                            <label for="pause3">Pausar</label>
                                            <i class="fa fa-pause fs-1" aria-hidden="true"></i>
                                        </button>
                                        <button class='btn btn-primary btn-lg' type="button" name="reset3">
                                            <label for="reset3">Resetar</label>
                                            <i class="fa fa-undo fs-1" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-4 themed-grid-col">
                            <form class='container mt-5 mb-5' name="form_main4">
                                <H2>BAIA 1/PS5</H2>
                                <div class='row mb-5 d-flex justify-content-center'>
                                    <div class='col-md-6 d-flex justify-content-center fs-1 border border-warning border-5 numbers'>
                                        <span id="hour4">00</span>
                                        <span>:</span>
                                        <span id="minute4">00</span>
                                        <span>:</span>
                                        <span id="second4">00</span>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="col d-flex justify-content-center p-0">
                                        <button class='btn btn-success btn-lg' type="button" name="start4">
                                            <label for="start4">Começar</label>
                                            <i class="fa fa-play fs-1" aria-hidden="true"></i>
                                        </button>
                                        <button class='btn btn-danger btn-lg me-4 ms-4' type="button" name="pause4">
                                            <label for="pause4">Pausar</label>
                                            <i class="fa fa-pause fs-1" aria-hidden="true"></i>
                                        </button>
                                        <button class='btn btn-primary btn-lg' type="button" name="reset4">
                                            <label for="reset4">Resetar</label>
                                            <i class="fa fa-undo fs-1" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-4 themed-grid-col">
                            <form class='container mt-5 mb-5' name="form_main5">
                                <H2>BAIA 2/PS5</H2>
                                <div class='row mb-5 d-flex justify-content-center'>
                                    <div class='col-md-6 d-flex justify-content-center fs-1 border border-warning border-5 numbers'>
                                        <span id="hour5">00</span>
                                        <span>:</span>
                                        <span id="minute5">00</span>
                                        <span>:</span>
                                        <span id="second5">00</span>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="col d-flex justify-content-center p-0">
                                        <button class='btn btn-success btn-lg' type="button" name="start5">
                                            <label for="start5">Começar</label>
                                            <i class="fa fa-play fs-1" aria-hidden="true"></i>
                                        </button>
                                        <button class='btn btn-danger btn-lg me-4 ms-4' type="button" name="pause5">
                                            <label for="pause5">Pausar</label>
                                            <i class="fa fa-pause fs-1" aria-hidden="true"></i>
                                        </button>
                                        <button class='btn btn-primary btn-lg' type="button" name="reset5">
                                            <label for="reset5">Resetar</label>
                                            <i class="fa fa-undo fs-1" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-4 themed-grid-col">
                            <form class='container mt-5 mb-5' name="form_main6">
                                <H2>BAIA 3/PS5</H2>
                                <div class='row mb-5 d-flex justify-content-center'>
                                    <div class='col-md-6 d-flex justify-content-center fs-1 border border-warning border-5 numbers'>
                                        <span id="hour6">00</span>
                                        <span>:</span>
                                        <span id="minute6">00</span>
                                        <span>:</span>
                                        <span id="second6">00</span>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="col d-flex justify-content-center p-0">
                                        <button class='btn btn-success btn-lg' type="button" name="start6">
                                            <label for="start6">Começar</label>
                                            <i class="fa fa-play fs-1" aria-hidden="true"></i>
                                        </button>
                                        <button class='btn btn-danger btn-lg me-4 ms-4' type="button" name="pause6">
                                            <label for="pause6">Pausar</label>
                                            <i class="fa fa-pause fs-1" aria-hidden="true"></i>
                                        </button>
                                        <button class='btn btn-primary btn-lg' type="button" name="reset6">
                                            <label for="reset6">Resetar</label>
                                            <i class="fa fa-undo fs-1" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-4 themed-grid-col">
                            <form class='container mt-5 mb-5' name="form_main7">
                                <H2>BAIA 1/PC</H2>
                                <div class='row mb-5 d-flex justify-content-center'>
                                    <div class='col-md-6 d-flex justify-content-center fs-1 border border-warning border-5 numbers'>
                                        <span id="hour7">00</span>
                                        <span>:</span>
                                        <span id="minute7">00</span>
                                        <span>:</span>
                                        <span id="second7">00</span>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="col d-flex justify-content-center p-0">
                                        <button class='btn btn-success btn-lg' type="button" name="start7">
                                            <label for="start7">Começar</label>
                                            <i class="fa fa-play fs-1" aria-hidden="true"></i>
                                        </button>
                                        <button class='btn btn-danger btn-lg me-4 ms-4' type="button" name="pause7">
                                            <label for="pause7">Pausar</label>
                                            <i class="fa fa-pause fs-1" aria-hidden="true"></i>
                                        </button>
                                        <button class='btn btn-primary btn-lg' type="button" name="reset7">
                                            <label for="reset7">Resetar</label>
                                            <i class="fa fa-undo fs-1" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-4 themed-grid-col">
                            <form class='container mt-5 mb-5' name="form_main8">
                                <H2>BAIA 2/PC</H2>
                                <div class='row mb-5 d-flex justify-content-center'>
                                    <div class='col-md-6 d-flex justify-content-center fs-1 border border-warning border-5 numbers'>
                                        <span id="hour8">00</span>
                                        <span>:</span>
                                        <span id="minute8">00</span>
                                        <span>:</span>
                                        <span id="second8">00</span>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="col d-flex justify-content-center p-0">
                                        <button class='btn btn-success btn-lg' type="button" name="start8">
                                            <label for="start8">Começar</label>
                                            <i class="fa fa-play fs-1" aria-hidden="true"></i>
                                        </button>
                                        <button class='btn btn-danger btn-lg me-4 ms-4' type="button" name="pause8">
                                            <label for="pause8">Pausar</label>
                                            <i class="fa fa-pause fs-1" aria-hidden="true"></i>
                                        </button>
                                        <button class='btn btn-primary btn-lg' type="button" name="reset8">
                                            <label for="reset8">Resetar</label>
                                            <i class="fa fa-undo fs-1" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-4 themed-grid-col">
                            <form class='container mt-5 mb-5' name="form_main9">
                                <H2>BAIA 3/PC</H2>
                                <div class='row mb-5 d-flex justify-content-center'>
                                    <div class='col-md-6 d-flex justify-content-center fs-1 border border-warning border-5 numbers'>
                                        <span id="hour9">00</span>
                                        <span>:</span>
                                        <span id="minute9">00</span>
                                        <span>:</span>
                                        <span id="second9">00</span>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="col d-flex justify-content-center p-0">
                                        <button class='btn btn-success btn-lg' type="button" name="start9">
                                            <label for="start9">Começar</label>
                                            <i class="fa fa-play fs-1" aria-hidden="true"></i>
                                        </button>
                                        <button class='btn btn-danger btn-lg me-4 ms-4' type="button" name="pause9">
                                            <label for="pause9">Pausar</label>
                                            <i class="fa fa-pause fs-1" aria-hidden="true"></i>
                                        </button>
                                        <button class='btn btn-primary btn-lg' type="button" name="reset9">
                                            <label for="reset9">Resetar</label>
                                            <i class="fa fa-undo fs-1" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </main>
            <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                const cronometros = {};

                function iniciarCronometro(nome) {
                    cronometros[nome] = setInterval(() => {
                        atualizarCronometro(nome);
                    }, 1000);
                }

                function pausarCronometro(nome) {
                    clearInterval(cronometros[nome]);
                }

                function resetarCronometro(nome) {
                    clearInterval(cronometros[nome]);
                    document.getElementById(`hour${nome}`).innerText = '00';
                    document.getElementById(`minute${nome}`).innerText = '00';
                    document.getElementById(`second${nome}`).innerText = '00';
                }

                function atualizarCronometro(nome) {
                    const hour = parseInt(document.getElementById(`hour${nome}`).innerText);
                    const minute = parseInt(document.getElementById(`minute${nome}`).innerText);
                    const second = parseInt(document.getElementById(`second${nome}`).innerText);

                    let newSecond = second + 1;
                    let newMinute = minute;
                    let newHour = hour;

                    if (newSecond === 60) {
                        newSecond = 0;
                        newMinute += 1;
                    }

                    if (newMinute === 60) {
                        newMinute = 0;
                        newHour += 1;
                    }

                    document.getElementById(`hour${nome}`).innerText = formatNumber(newHour);
                    document.getElementById(`minute${nome}`).innerText = formatNumber(newMinute);
                    document.getElementById(`second${nome}`).innerText = formatNumber(newSecond);
                }

                function formatNumber(number) {
                    return number >= 10 ? number : `0${number}`;
                }

                document.querySelector('[name="start1"]').addEventListener('click', () => {
                    pausarCronometro('1');
                    iniciarCronometro('1');
                });

                document.querySelector('[name="pause1"]').addEventListener('click', () => {
                    pausarCronometro('1');
                });

                document.querySelector('[name="reset1"]').addEventListener('click', () => {
                    resetarCronometro('1');
                });

                document.querySelector('[name="start2"]').addEventListener('click', () => {
                    pausarCronometro('2');
                    iniciarCronometro('2');
                });

                document.querySelector('[name="pause2"]').addEventListener('click', () => {
                    pausarCronometro('2');
                });

                document.querySelector('[name="reset2"]').addEventListener('click', () => {
                    resetarCronometro('2');
                });

                document.querySelector('[name="start3"]').addEventListener('click', () => {
                    pausarCronometro('3');
                    iniciarCronometro('3');
                });

                document.querySelector('[name="pause3"]').addEventListener('click', () => {
                    pausarCronometro('3');
                });

                document.querySelector('[name="reset3"]').addEventListener('click', () => {
                    resetarCronometro('3');
                });
                document.querySelector('[name="start4"]').addEventListener('click', () => {
                    pausarCronometro('4');
                    iniciarCronometro('4');
                });

                document.querySelector('[name="pause4"]').addEventListener('click', () => {
                    pausarCronometro('4');
                });

                document.querySelector('[name="reset4"]').addEventListener('click', () => {
                    resetarCronometro('4');
                });
                document.querySelector('[name="start5"]').addEventListener('click', () => {
                    pausarCronometro('5');
                    iniciarCronometro('5');
                });

                document.querySelector('[name="pause5"]').addEventListener('click', () => {
                    pausarCronometro('5');
                });

                document.querySelector('[name="reset5"]').addEventListener('click', () => {
                    resetarCronometro('5');
                });
                document.querySelector('[name="start6"]').addEventListener('click', () => {
                    pausarCronometro('6');
                    iniciarCronometro('6');
                });

                document.querySelector('[name="pause6"]').addEventListener('click', () => {
                    pausarCronometro('6');
                });

                document.querySelector('[name="reset6"]').addEventListener('click', () => {
                    resetarCronometro('6');
                });
                document.querySelector('[name="start7"]').addEventListener('click', () => {
                    pausarCronometro('7');
                    iniciarCronometro('7');
                });

                document.querySelector('[name="pause7"]').addEventListener('click', () => {
                    pausarCronometro('7');
                });

                document.querySelector('[name="reset7"]').addEventListener('click', () => {
                    resetarCronometro('7');
                });
                document.querySelector('[name="start8"]').addEventListener('click', () => {
                    pausarCronometro('8');
                    iniciarCronometro('8');
                });

                document.querySelector('[name="pause8"]').addEventListener('click', () => {
                    pausarCronometro('8');
                });

                document.querySelector('[name="reset8"]').addEventListener('click', () => {
                    resetarCronometro('8');
                });
                document.querySelector('[name="start9"]').addEventListener('click', () => {
                    pausarCronometro('9');
                    iniciarCronometro('9');
                });

                document.querySelector('[name="pause9"]').addEventListener('click', () => {
                    pausarCronometro('9');
                });

                document.querySelector('[name="reset9"]').addEventListener('click', () => {
                    resetarCronometro('9');
                });
            </script>
            <style>
                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }

                body {
                    background-size: 140%;
                    background-image: url(img/nuvens.jpg);
                }
            </style>
</body>

</html>
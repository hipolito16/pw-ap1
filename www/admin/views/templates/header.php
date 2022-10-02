<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login</title>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/script.js"></script>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/icofont.min.css">
</head>

<body>
<header class="p-3 text-center">
    <h1>Área Administrativa</h1>
</header>

<div class="container-fluid">
    <div class="row">
        <nav class="p-3 col-md-3">
            <h2>Menu</h2>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="?controller=main&action=home">Home</a>
                </li>
                <?php if ($_SESSION['user']['admin'] == 1): ?>
                <li class="nav-item">
                    <a class="nav-link" href="?controller=user&action=register">Cadastrar Clientes</a>
                </li>
                <?php endif ?>
                <li class="nav-item">
                    <a class="nav-link" href="?controller=user&action=listClients">Listar Clientes</a>
                </li>
            </ul>
        </nav>
        <section class="p-3 col-md-9">
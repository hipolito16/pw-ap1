<!DOCTYPE html>
<html>
<head>
    <title>Login Área Administrativa</title>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
            integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
            integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>
<body>
<form class="form-login" action="?controller=user&action=validateLogin" method="post">
    <div class="login-card card">
        <div class="card-header">
            <h1>Área de Login</h1>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Login</label>
                <input type="text" class="form-control mt-1 <?= !isset($_SESSION['errorClass1']) ? '' : $_SESSION['errorClass1'] ?>"
                       name="userName" placeholder="Digite o usuário"
                       value="<?= !isset($_SESSION['userName']) ? '' : $_SESSION['userName'] ?>">
                <div class="alert alert-warning <?= !isset($_SESSION['errorClass1']) ? 'd-none' : '' ?>" role="alert"><?= $_SESSION['errorMsg1'] ?></div>
            </div>
            <div class="form-group mt-2">
                <label>Senha</label>
                <input type="password" class="form-control mt-1 <?= !isset($_SESSION['errorClass2']) ? '' : $_SESSION['errorClass2'] ?>"
                       name="password" placeholder="Digite sua senha"
                       value="<?= !isset($_SESSION['password']) ? '' : $_SESSION['password'] ?>">
                <div class="alert alert-warning <?= !isset($_SESSION['errorClass2']) ? 'd-none' : '' ?>" role="alert"><?= $_SESSION['errorMsg2'] ?></div>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-lg btn-success">Login</button>
            <a class="btn btn-lg btn-secondary" href="../index.php">Voltar ao Site</a>
        </div>
    </div>
</form>
<?php require_once('views/templates/messages.php') ?>
</body>
</html>


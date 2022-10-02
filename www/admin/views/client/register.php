<?php require_once('views/templates/messagesRegister.php') ?>
<style>
    form>button {
        margin-top: 10px;
    }

    div>label {
        margin-right: 10px;
    }
</style>

<h1>Formulário de Cadastro</h1>
<form action="?controller=user&action=registerClient2" method="post" class="form-register">
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Nome" minlength="3" maxlength="50" required>
    </div>
    <div class="form-group mt-2">
        <label for="phone">Telefone</label>
        <input type="text" class="form-control" name="phone" placeholder="Telefone" minlength="8" maxlength="50" required>
    </div>
    <div class="form-group mt-2">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email"minlength="10" maxlength="100" required>
    </div>
    <div class="form-group mt-2">
        <label for="address">Endereço</label>
        <input type="text" class="form-control" name="address" placeholder="Endereço" minlength="10" maxlength="100" required>
    </div>
    <button class="btn btn-primary mt-3">Enviar</button>
    <div <?= !isset($success) ? 'class="d-none"' : 'class="alert alert-success" role="alert"' ?>>Usuário Cadastrado com Sucesso!</div>
    <div <?= !isset($failed) ? 'class="d-none"' : 'class="alert alert-danger" role="alert"' ?>>Erro ao Cadastrar!</div>
</form>
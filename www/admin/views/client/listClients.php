<h1>Lista de Clientes</h1>
<table class="table table-striped">
    <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>E-mail</th>
        <th>Endereço</th>
        <th>Ações</th>
    </tr>
    <?php foreach($arrayClients as $client): ?>
        <tr>
            <td><?=$client['name']?></td>
            <td><?=$client['phone']?></td>
            <td><?=$client['email']?></td>
            <td><?=$client['address']?></td>
            <td>
                <a href="?controller=user&action=detailsClient&id=<?= $client['idClient'] ?>"><i class="icofont-info-circle"></i></a>
                <?php if ($_SESSION['user']['admin'] == 1): ?>
                <a href="?controller=user&action=deleteClient&id=<?= $client['idClient'] ?>"><i class="icofont-ui-delete"></i></a>
                <?php endif ?>
            </td>
        </tr>
    <?php endforeach ?>
</table>
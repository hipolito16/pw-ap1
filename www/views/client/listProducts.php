<h1>Lista de Produtos</h1>
<table class="table table-striped">
    <tr>
        <th>ID Produto</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Descrição</th>
        <th>ID Categoria</th>
    </tr>
    <?php
        foreach($arrayProducts as $products):
    ?>
    <tr>
        <td><?=$products['idProduct']?></td>
        <td><?=$products['name']?></td>
        <td><?=$products['price']?></td>
        <td><?=$products['description']?></td>
        <td><?=$products['idCategory']?></td>
    </tr>
    <?php
        endforeach
    ?>

</table>
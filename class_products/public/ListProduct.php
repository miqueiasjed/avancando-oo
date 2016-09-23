<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Description</td>
    </tr>
    <?php foreach($list as $product): ?>
        <tr>
            <td><?=$product['id']?></td>
            <td><?=$product['nome']?></td>
            <td><?=$product['descricao']?></td>
        </tr>
    <?php endforeach; ?>
</table>
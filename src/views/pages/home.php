<?php $render('header'); ?>
<div class="container">
    <h1>Home</h1>

    <table class="table table-hover">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Açõessssss</th>
        </tr>
        </thead>
        <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <th scope="row"><?= $user['id']; ?></th>
                        <td><?= $user['name']; ?></td>
                        <td><?= $user['email']; ?></td>
                        <td class="text-right">
                            <a href="<?= $base; ?>/user/<?= $user['id']; ?>/editar" class="btn btn-info btn-sm">EDITAR</a>
                            <a href="<?= $base; ?>/user/<?= $user['id']; ?>/excluir" class="btn btn-danger btn-sm"
                               onclick="return confirm('Tem cereza que quer excluir <?= $user['name']; ?>')">EXCLUIR</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php $render('footer'); ?>



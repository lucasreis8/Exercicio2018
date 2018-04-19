

    <table>

        <thead>

            <th>#</th>
            <th>Nome categoria</th>

        </thead>
        <th><a href="../controladores/categorias.php?acao=inserir">s</a></th>
        <tbody>

        <?php foreach ($categorias as $categoria): ?>

        <tr>


            <td><?= $categoria->getId() ?></td>
            <td><a href="?acao=show&id=<?= $categoria->getId()?>">
                    <?= $categoria->getNome() ?>

                </a>
            </td>


        </tr>
        <?php endforeach; ?>
        </tbody>


    </table>

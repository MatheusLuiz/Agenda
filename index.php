<?php

include_once("templates/header.php");

?>

<div class="container">

    <?php if (isset($printMsg) && $printMsg != '') : ?>

        <p id="msg"><?= $printMsg ?></p>

    <?php endif; ?>

    <h1 id="main-title"> Agenda de Contatos</h1>


    <?php if (count($contato) > 0) : ?>

        <table class="table" id="contatos-table">
            <thead id="contatos-thead">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nome</th>
                    <th scope="col">sobrenome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">telefone</th>
                    <th scope="col">Edição</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contato as $contato) : ?>
                    <tr>
                        <td scope="row" class="col-id"><?= $contato["id"]; ?></td>
                        <td scope="row"><?= $contato["nome"]; ?></td>
                        <td scope="row"><?= $contato["sobrenome"]; ?></td>
                        <td scope="row"><?= $contato["email"]; ?></td>
                        <td scope="row"><?= $contato["telefone"]; ?></td>
                        <td class="actions">

                            <a href="<?php $BASE_URL ?>show.php?id=<?= $contato["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
                            <a href="<?php $BASE_URL ?>edit.php?id=<?= $contato["id"] ?>"><i class="far fa-edit edit-icon"></i></a>
                            <form class="delete-form"action="<?php $BASE_URL ?>config/precess.php" method="POST">
                                <input type="hidden" name="type" value="deletar">
                                <input type="hidden" name="id" value="<?= $contato["id"]?>">
                                <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                            </form>

                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>

    <?php else : ?>

        <p id="empty-list-text"> Ainda não há contatos para a sua agenda, <a href="<?php $BASE_URL ?>create.php">Click aqui para adicionar</a></p>

    <?php endif; ?>

</div>


<?php

include_once("templates/footer.php");

?>

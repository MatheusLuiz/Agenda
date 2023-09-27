<?php

include_once("templates/header.php");

?>

<div class="container">
    <?php include_once("templates/voltarbtn.html"); ?>
    <h1 id="main-title">Editar Contato</h1>
    <form id="edit-form" action="<?php $BASE_URL ?>config/precess.php" method="POST">

        <input type="hidden" name="type" value="edita">
        <input type="hidden" name="id" value="<?= $id ?>">

        <div class="form-group">
            <label for="nome">Nome do contato</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" value="<?= $contato["nome"] ?>" required>
        </div>
        <div class="form-group">
            <label for="sobrenome">Sobrenome do contato</label>
            <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Digite o sobrenome" value="<?= $contato["sobrenome"] ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email do contato</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Digite o email" value="<?= $contato["email"] ?>" required>
        </div>
        <div class="form-group">
            <label for="telefone">telefone do contato</label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone" value="<?= $contato["telefone"] ?>" required>
        </div>
        <div class="form-group">
            <label for="observacao">Observações</label>
            <textarea type="text" class="form-control" id="observacao" name="observacao" placeholder="Digite uma observação para este contato" rows="5"><?= $contato["observacao"] ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>

</div>

<?php

include_once("templates/footer.php");

?>
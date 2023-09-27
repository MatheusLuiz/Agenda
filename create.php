<?php

include_once("templates/header.php");

?>

<div class="container">
    <?php include_once("templates/voltarbtn.html"); ?>
    <h1 id="main-title">Criar Novo Contato</h1>
    <form id="create-form" action="<?php $BASE_URL ?>config/precess.php" method="POST">

        <input type="hidden" name="type" value="Criar">
        <div class="form-group">
            <label for="nome">Nome do contato</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" required>
        </div>
        <div class="form-group">
            <label for="sobrenome">Sobrenome do contato</label>
            <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Digite o sobrenome" required>
        </div>
        <div class="form-group">
            <label for="email">Email do contato</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Digite o email" required>
        </div>
        <div class="form-group">
            <label for="telefone">telefone do contato</label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone" required>
        </div>
        <div class="form-group">
            <label for="observacao">Observações</label>
            <textarea type="text" class="form-control" id="observacao" name="observacao" placeholder="Digite uma observação para este contato" rows="5"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

</div>

<?php

include_once("templates/footer.php");

?>
<?php

include_once("templates/header.php");

?>
    <div class="container" id="view-contact-container">
        <?php include_once("templates/voltarbtn.html");?>
        <h1 id="main" class="title">
            <?=$contato["nome"] ?>
        </h1>
        <p class="bold">Telefone:</p>
        <p><?=$contato["telefone"] ?></p>
        <p class="bold">Email:</p>
        <p><?=$contato["email"] ?></p>
        <p class="bold">Observacão:</p>
        <p><?=$contato["observacao"] ?></p>
    </div>

<?php

include_once("templates/footer.php");

?>
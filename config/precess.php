<?php


session_start();

include_once("db.php");
include_once("url.php");



$data = $_POST;

if (!empty($data)) {

    //Criar Contato - ok

    if ($data["type"] === "Criar") {
        $nome = $data["nome"];
        $sobrenome = $data["sobrenome"];
        $email = $data["email"];
        $telefone = $data["telefone"];
        $observacao = $data["observacao"];


        $query = "INSERT INTO contatos (nome,sobrenome,email,telefone,observacao) VALUES(:nome, :sobrenome, :email, :telefone, :observacao)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":sobrenome", $sobrenome);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":telefone", $telefone);
        $stmt->bindParam(":observacao", $observacao);

        try {

            $stmt->execute();
            $_SESSION["msg"] = "Contato criado com sucesso";

        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo "Erro: $error";
        }

        //Deleta o contato - ok 

    }  else if($data["type"] === "deletar"){

        $id = $data["id"];
        $query = "DELETE FROM contatos WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);

        try {

            $stmt->execute();
            $_SESSION["msg"] = "Contato excluído com sucesso";

        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo "Erro: $error";
        }

        //edita o contato
    } else if($data["type"] === "edita") {

        $nome = $data["nome"];
        $sobrenome = $data["sobrenome"];
        $email = $data["email"];
        $telefone = $data["telefone"];
        $observacao = $data["observacao"];
        $id = $data["id"];
       

        $query = "UPDATE contatos
                SET nome = :nome, sobrenome = :sobrenome, email = :email, telefone = :telefone, observacao = :observacao
                WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":sobrenome", $sobrenome);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":telefone", $telefone);
        $stmt->bindParam(":observacao", $observacao);

        try {

            $stmt->execute();
            $_SESSION["msg"] = "Contato atualizado com sucesso";

        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    }

       // vai para a página Home

       header("location:" . $BASE_URL .  "../index.php");


} else {

    $id;

    if (!empty($_GET)) {
        $id = $_GET["id"];
    }


    // retorna o dados de um contato
    if (!empty($id)) {
        $query = "SELECT * FROM contatos where id= :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam("id", $id);

        $stmt->execute();
         
        $contato = $stmt->fetch();

    } else {

        //retorna todos os contatos

        $query = "SELECT * FROM contatos";

        $stmt = $conn->prepare($query);

        $stmt->execute();

        $contato = $stmt->fetchAll();
    }
}

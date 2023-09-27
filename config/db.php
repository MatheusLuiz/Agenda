<?php

    $host = "127.0.0.1";
    $dbname = "projeto";
    $user = "root";
    $passwd = "12345678";

    try {

        $conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $passwd);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
    } catch(PDOException $e) {
        $error = $e->getMessage();
        echo "Erro: $error";
    }
    

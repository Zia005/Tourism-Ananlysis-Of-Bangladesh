<?php

    $host = "localhost";
    $user = "u557179196_ahad";
    $pass = "l5Le8M0ZquRe";
    $db = "u557179196_cure";

    $handler;

    $dbConnection = true;

    try {            
        $handler = new PDO("mysql:host={$host};dbname={$db}", $user, $pass);
        $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $exc) {
        $dbConnection = false;
    }
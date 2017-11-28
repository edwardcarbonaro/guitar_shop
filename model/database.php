<?php
    $dsn = 'mysql:host=sql.njit.edu;dbname=ejc23';
    $username = 'ejc23';
    $password = 'carabao74';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
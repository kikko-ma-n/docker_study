<?php
    try {
        $dsn = 'mysql:host=db;dbname=appdb;';
        $db = new PDO($dsn, 'appuser', 'password');

        $sql = 'SELECT version();';
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        var_dump($result);
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }

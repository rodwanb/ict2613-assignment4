<?php
    $dsn = 'mysql:host=localhost;dbname=school_db';
    $username = 'app_user';
    $password = 'vsn3/dI!!4tfHkD8';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('view/error.php');
        exit();
    }
?>
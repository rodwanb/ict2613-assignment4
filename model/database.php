<?php
    $dsn = 'mysql:host=sql106.infinityfree.com;dbname=if0_37068446_school_db;';
    $username = 'if0_37068446';
    $password = 'l8A2Zb4SPRkCN92';

//    $dsn = 'mysql:host=localhost;dbname=school_db';
//    $username = 'app_user';
//    $password = 'vsn3/dI!!4tfHkD8';
    
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('view/error.php');
        exit();
    }
?>
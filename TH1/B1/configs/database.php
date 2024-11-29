<?php
    // Cái này là kết nối db
    //PDO - PHP Data Object
    define('DATABASE_SERVER', 'localhost');
    define('DATABASE_USER', 'hung');
    define('DATABASE_PASSWORD', '123456');
    define('DATABASE_NAME', 'flowers');
    $connection = null;
    try {
        $connection =  new PDO(
            "mysql:host=".DATABASE_SERVER.";dbname=".DATABASE_NAME, 
            DATABASE_USER, DATABASE_PASSWORD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";    
    } catch(PDOException $e) {
        // echo "Connection failed: " . 
        $e->getMessage();
        $connection = null;
    }
?>
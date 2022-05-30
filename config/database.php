<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'username');
    define('DB_PASS', '*******');
    define('DB_NAME', 'dbname');

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if($conn->connect_error)
    {
        die('Connection Failed ' . $conn->connect_error);
    }

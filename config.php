<?php
    define('HOST','localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'foodstock');

 $conn = new mysqli(HOST, USER, PASS);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$conn->query("CREATE DATABASE IF NOT EXISTS `" . BASE . "`");
if (!$conn->select_db(BASE)) {
    die("Error selecting database: " . $conn->error);
}
?>
<?php

include  "functions.php";
$dns = "mysql:host=localhost;dbname=not_app";
$user = "root";
$password = "";
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"
);/// For Arabic


try {
    $connect = new PDO($dns, $user, $password, $option);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    cors();

} catch (PDOException $e) {

    echo $e->getMessage();
}

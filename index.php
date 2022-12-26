<?php
include "connect.php";


$stmt = $connect->prepare("SELECT * FROM `users`");

$stmt->execute();
$datsa=$stmt->fetchAll(PDO::FETCH_ASSOC);

$count = $stmt->rowCount();

if ($connect = 0) {
    print_r(json_encode(array("state" => "fail")));

} else {
    print_r(json_encode(array("state" => "Sucsess",$datsa),JSON_PRESERVE_ZERO_FRACTION));
}

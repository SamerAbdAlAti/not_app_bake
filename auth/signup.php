<?php
include "../connect.php";
$username = postData("username");
$email = postData("email");
$password = postData("password");


$statement = $connect->prepare("INSERT INTO `users`( `username`, `email`, `password`) VALUES ('$username','$email','$password')");

$statement->execute();

$signupCount = $statement->rowCount();


if ($signupCount > 0) {

    echo json_encode(
        array("state" => "success",
            "add_user" => $username,
            "add_email" => "$email",
            "set_password" => "success",
        ));
} else {

    echo json_encode(array("state" => "fail to add $username"));

}

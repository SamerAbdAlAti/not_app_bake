<?php
include "../connect.php";

$signUpLang = postData("signUpLang");
$username = postData("username");
$email = postData("email");
$password = postData("password");

//count_chars()

/// Check If there email in db
$checkExistingEmail = $connect->prepare("SELECT * FROM `users` WHERE  email='$email'");
// run last quiry
$checkExistingEmail->execute();

$dataEmail = $checkExistingEmail->fetchAll(PDO::FETCH_ASSOC);

$isEmailExiste = count($dataEmail);

if ($isEmailExiste == 0) {


    $signUpStmt = $connect->prepare("INSERT INTO `users`( `username`, `email`, `password`) VALUES ('$username','$email','$password')");

    $signUpStmt->execute();

    $signupCount = $signUpStmt->rowCount();


    if ($signupCount > 0) {

        echo json_encode(
            langSuccess($signUpLang, $usernamem, $email),  );
    } else {

        echo json_encode(array("state" => "fail to add $username"));

    }
} else {

    echo json_encode(langFail($signUpLang));
}

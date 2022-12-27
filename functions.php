<?php


function langSuccess($lang = "en", $username, $email)
{
    if ($lang == "en") {
        return array(
            array(
                "state" => "success",
                "message" => "SignUp Success",
                "add_user" => "$username",
                "add_email" => "$email",
                "set_password" => "success",
            )
        );
    } else if ($lang = "ar") ;
    {

        return array(
            array(
                "الحالة" => "العملية ناجحة",
                "message" => "تم التسجيل بنجاح",
                "add_user" => "$username",
                "add_email" => "$email",
                "set_password" => "العملية ناجحة",
            )
        );
    }
}

function langFail($langF = "en")
{
    if ($langF = "en") {
        return array(
            array(
                "state" => "Fail",
                "message" => "Fail SignUp",
                "add_user" => null,
                "add_email" => null,
                "set_password" => "success",
            )
        );
    } else if ($lang = "ar") ;
    {

        return array(
            array(
                "الحالة" => "العملية غير ناجحة",
                "message" => "فشل التسجيل",
                "add_user" => null,
                "add_email" => null,
                "set_password" => "العملية غير ناجحة",
            )
        );
    }
}


function postData($postName)
{

    return htmlspecialchars(strip_tags($_POST[utf8_encode($postName)]));
}


function getData($getName)
{

    return htmlspecialchars(strip_tags($_GET[utf8_encode($getName)]));
}

function cors()
{

    // Allow from any origin
    if (isset($_SERVER['HTTP_ORIGIN'])) {
        // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
        // you want to allow, and if so:
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');    // cache for 1 day
    }

    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            // may also be using PUT, PATCH, HEAD etc
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

        exit(0);
    }


}

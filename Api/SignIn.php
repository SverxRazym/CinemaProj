<?php
function signAp()
{
    if (!empty($_POST["login"])) {
        session_start();
        header("HTTP/1.1 201");
        header("Content-Type: application/json");
        $_SESSION["login"] = $_POST["login"];
        echo json_encode([
            "log" => $_SESSION['login']
        ]);
        /* session_name('Global');
         session_id('TEST');
         $_SESSION['login']=$_POST['login'];
         session_start();
         session_write_close();*/
    } else {
        header("HTTP/1.1 404 not found");
        header("Content-Type: application/json");

        echo json_encode([
            "er" => "312"
        ]);
    }
}
function exitAp(){
    session_start();
    header("HTTP/1.1 205");
    header("Content-Type: application/json");
    unset($_SESSION["login"]);
    echo json_encode([
        "log" => $_SESSION["login"]
    ]);
}
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    session_start();
    header("HTTP/1.1 205");
    header("Content-Type: application/json");
    unset($_SESSION["login"]);
    echo json_encode([
        "log" => $_SESSION["login"]
    ]);
}
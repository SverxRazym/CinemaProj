<?php
include_once("../DataBase/dbQuery.php");
if (logAuth($_POST["Login"],$_POST["Password"])) {
    session_start();
    header("HTTP/1.1 201");
    header("Content-Type: application/json");
    $_SESSION["login"] = $_POST["Login"];
    echo json_encode([
        "log" => $_SESSION['login']
    ]);
} else {
    header("HTTP/1.1 404 not found");
    header("Content-Type: application/json");
}

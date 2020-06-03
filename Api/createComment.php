<?php
include_once("../DataBase/dbQuery.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    loadComment($_POST["user"],$_POST['comment'],$_POST["room"]);
    header("Content-Type: application/json");
    header("HTTP/1.1 201");
}

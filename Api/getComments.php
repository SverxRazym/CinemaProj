<?php
include_once("../DataBase/dbQuery.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){

    header("Content-Type: application/json");
    header("HTTP/1.1 201");
        echo json_encode(getComments($_POST["numRoom"]));
}

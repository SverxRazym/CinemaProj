<?php
include_once("../DataBase/dbQuery.php");
if(reg($_POST["Login"],$_POST["Password"],$_POST["Email"])){
    header("Content-Type: application/json");
    header("HTTP/1.1 201");
} else {
    header("Content-Type: application/json");
    header("HTTP/1.1 404 not found");
}

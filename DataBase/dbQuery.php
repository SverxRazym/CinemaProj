<?php
include_once("BaseDB.php");
function logAuth($login, $password)
{
    // check data
    $query = "SELECT * FROM info where login = '$login' AND password = '$password'";
    $res = mysqli_fetch_row(exQuery($query));
    return $res[0];
}

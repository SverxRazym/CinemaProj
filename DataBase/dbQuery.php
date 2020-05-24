<?php
include_once("BaseDB.php");
function logAuth($login, $password)
{
    // check data
    $query = "SELECT * FROM Cinema_Users where Login = '$login' AND Password = '$password'";
    $res = mysqli_fetch_row(exQuery($query));
    return $res[0];
}

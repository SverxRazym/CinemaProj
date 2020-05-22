<?php
function exQuery($query)
{
    $dbCon = new mysqli("localhost", "root", "", "cinemaBlog");
    if ($dbCon->connect_error) {
        die("Con er: " . $dbCon->connect_error);
    }
    $res = mysqli_query($dbCon, $query);
    mysqli_close($dbCon);
    return $res;
}


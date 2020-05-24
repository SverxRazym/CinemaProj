<?php
function exQuery($query)
{
    $dbCon = new mysqli("exploer.beget.tech", "exploer_wp1", "Z2y5cL&6", "exploer_wp1");
    if ($dbCon->connect_error) {
        die("Con er: " . $dbCon->connect_error);
    }
    $res = mysqli_query($dbCon, $query);
    mysqli_close($dbCon);
    return $res;
}


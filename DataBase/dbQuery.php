<?php
include_once("BaseDB.php");
function logAuth($login, $password)
{
    // check data
    $query = "SELECT * FROM Cinema_Users 
    where Login = '$login' 
    AND Password = '$password'";
    $res = mysqli_fetch_row(exQuery($query));
    return $res[0];
}

function reg($login,$pas,$email){
    $query = "INSERT INTO `Cinema_Users`( `Login`, `Password`, `Email`, `Role`) VALUES ('$login','$pas','$email','user')";
    if(exQuery($query)){
        return true;
    }
    return false;
}

function getComments($num){
    $query = "SELECT * FROM `comments` where Room='$num'";
    $arr = [];
    $res = exQuery($query);
    while ($row = mysqli_fetch_array($res)){
        array_push($arr,$row);
    }
    return $arr;
}

function loadComment($user,$text,$room){
    $date = date("Y-m-d");
    $query = "INSERT INTO `comments`(`User`, `Date`, `Text`, `Room`) VALUES ('$user','$date','$text','$room')";
    exQuery($query);
}
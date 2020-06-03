<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Cinema</title>
</head>
<body>
<!--Header-->
<?php include_once("form/header.php"); ?>
<!--Main content-->
<div class="container-fluid">
    <div class="row headPage">
        <h3 id="nameRoom" class="mx-auto">Название комнаты</h3>
    </div>
    <div class="row  managePanel">
        <form class="mx-auto">
            <div class="form-group">
                <input type="text" name="Password" class="form-control" id="urlVideo" >
            </div>
            <div class="invalid-feedback" id="invalidSignIn">
            </div>
            <div class="form-group mx-auto">
                <button type="button" class="btn btn-light btn-lg btn-block" id="btnSendVideo">Добавить</button>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 mx-auto">
            <div class="embed-responsive embed-responsive-16by9 text-center">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/GT77G1loHsI" allowfullscreen id="frameVideo"></iframe>
            </div>
        </div>
    </div>
    <div id="comment">
        <div class="row col-6 mx-auto">
            <div class="input-group">
                <input id="inputComment" type="text" class="form-control" aria-label="Text input with radio button">
                <div class="input-group-prepend">

                    <button type="button" class="btn btn-primary" id="btnToSendCom">Отправить</button>
                </div>
            </div>
        </div>

        <div id="contComment" class="container mx-auto">
        </div>
    </div>
</div>

<!--Footer        -->
<?php
include_once("form/includeForms.php");
?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--Parser        -->
<script src="js/contentCreate.js" type="module"></script>
<script src="js/pageScripts.js" type="module"></script>
</body>
</html>
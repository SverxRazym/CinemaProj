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
<?php include_once("form/header"); ?>
<!--Main content-->
<div class="container-fluid">
    <div class="row headPage">
        <h3 id="name" class="mx-auto">Название комнаты</h3>
    </div>
    <div class="row  managePanel">
        <form class="mx-auto">
            <div class="form-group">
                <input type="text" name="Password" class="form-control" id="PassSignIn" >
            </div>
            <div class="invalid-feedback" id="invalidSignIn">
            </div>
            <div class="form-group mx-auto">
                <button type="button" class="btn btn-light btn-lg btn-block">Submit</button>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 mx-auto">
            <div class="embed-responsive embed-responsive-16by9 text-center">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/GT77G1loHsI" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!--    <iframe width="922" height="576" src="https://www.youtube.com/embed/GT77G1loHsI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
    <div id="comment">
        <div class="row"></div>
        <div class="row"></div>
        <div class="row"></div>
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
<script src="js/contentCreate.js"></script>

</body>
</html>
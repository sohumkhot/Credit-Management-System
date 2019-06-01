<?php
  if(!isset($_SERVER['HTTP_REFERER']))
  {
    header('location:index.php'); 
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transfer Failed.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="cred.ico" type="image/x-icon"/>
    <div class="jumbotron"><div class="text-center">
      <img src="cred.ico" class="rounded" alt="Website Logo"width="100px"height="100px">
    </div>
    <center><h1><b>Credit Management System</b><h1><h5>Developed By <b>Sohum Khot</b></h5></center></div>
  </head>

  <body>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <div align="center" class="container">
      <h2><p class="bg-danger"><b>Transfer Failed: Insufficient Credit Balance.</b></p></h2><br>
    </div>
    <center><div><a href="index.php" class="btn btn-dark" role="button">Go to Home Page</a></div></center>
  </body>
</html>
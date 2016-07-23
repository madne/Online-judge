<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href='css/style.css'>
  <script src="js/main.js"></script>
</head>
<body>
	<div class="jumbotron">
			
<?php 
session_start();
if(isset($_POST['disconnect'])){
  session_destroy();
}
if( ! isset($_SESSION['userId'])){
echo '<div class="col-md-11"></div>
      <div class="col-md-1" style="position:fixed;top:6px;right:6px;  ">
      <form action="login.php">
        <button class="btn btn-default" type="submit">Sign in </button>
      </form>
      </div>

        <h1 align="center">online judge</h1>
    </div>';
}
else{
  //simply echo his name to show that he is connected and a disconnect button
  $id = $_SESSION['userId'];
  $name = $_SESSION['userName'];
  $nb = $_SESSION['nbVisit'];
  echo "<h4 class='special-font-small' style='position:absolute;top:0;'>Welcome $name. This is your visit number $nb </h4>";
  //diconnect button:
  echo '<div class="col-md-11"></div>
      <div class="col-md-1" style="position:fixed;top:6px;right:6px;  ">
      <form action="" method="post">
        <button class="btn btn-default" name="disconnect">Disconnect</button>
      </div>

        <h1 align="center">online judge</h1>
    </div>';
}
?>
      
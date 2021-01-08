<?php
session_start();
require '../db_connection.php';
// CHECK USER IF LOGGED IN
if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){

$user_email = $_SESSION['user_email'];
$get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
$userData =  mysqli_fetch_assoc($get_user_data);

}else{
header('Location: https://www.robertmochel.com/index.php');
exit;
}
?>
<!-- The actual site --> 


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Images</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">  
    <link ref="stylesheet" type="text/css" href="app.css">  
    <script src="https://kit.fontawesome.com/8412f3701b.js"></script>

  <!-- <style type="text/css">
    body { padding-top: 70px; }
    .jumbotron {
      color: #2c6d50;
      background: #ecf0f1;

    }
    .navbar-inverse {
      background: #2c6d50;
      color: white;
    }
    .navbar-inverse .navbar-brand, .navbar-inverse a{
      color:white;
    }
    .navbar-inverse .navbar-nav>li>a {
      color: white;
    } 

  </style> -->

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
				<a href="../home.php" class="navbar-brand"><span class="glyphicon glyphicon-sunglasses"></span> DIVING</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-nav-demo">
				<ul class="nav navbar-nav">
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Sign Up</a></li>
					<li><a href="#">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>

  <div class="container">

  <div class="jumbotron">
    <h1><i class="fas fa-swimmer"></i></span> The Beach and Diving Gallery </h1>
    <p>A serios of diving and beach images...</p> 
  </div>

    <div class="row">
      <div class="col-lg-4 col-sm-6">
        <div class="thumbnail">
          <img src="https://images.unsplash.com/photo-1496737018672-b1a6be2e949c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1782&q=80">
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="thumbnail">
          <img src="https://images.unsplash.com/photo-1480983783547-8e5b4561a3b4?ixlib=rb-1.2.1&auto=format&fit=crop&w=2691&q=80">
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="thumbnail">
          <img src="https://images.unsplash.com/photo-1485237254814-0003b25e5672?ixlib=rb-1.2.1&auto=format&fit=crop&w=1778&q=80">
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="thumbnail">
          <img src="https://images.unsplash.com/photo-1471857445670-6568fa196c9c?ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60">
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="thumbnail">
          <img src="https://images.unsplash.com/photo-1548058306-aaa096bebe96?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1353&q=80">
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="thumbnail">
          <img src="https://images.unsplash.com/photo-1544552866-112f7e46923f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1351&q=80">
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="thumbnail">
          <img src="https://images.unsplash.com/photo-1546754110-8e430dd01293?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80">
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="thumbnail">
          <img src="https://images.unsplash.com/photo-1554283231-de01aab7c2a3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80">
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="thumbnail">
          <img src="https://images.unsplash.com/photo-1542454520-7455ce6eb991?ixlib=rb-1.2.1&auto=format&fit=crop&w=1353&q=80">
        </div>
      </div>
  </div>

<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
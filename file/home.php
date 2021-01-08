<?php
session_start();
require 'db_connection.php';
// CHECK USER IF LOGGED IN
if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){

$user_email = $_SESSION['user_email'];
$get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
$get_code = mysqli_query($db_connection, "SELECT code FROM 'users'");
$userData =  mysqli_fetch_assoc($get_user_data);
$the_code = mysqli_fetch_assoc($get_code);

}else{
header('Location: logout.php');
exit;
}
?>
<!DOCTYPE html>
<html lang="">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Web Developer Home page</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    >
  <link rel="stylesheet" href="main.css">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css" media="all" type="text/css">
<title>Home</title>
</head>

<body>

<?php 

    $is_approved = $userData['is_approved'];
    if($is_approved == 0) {
        echo ' <div class="container seeAdmin"><br><br><h4><b>You are not approved yet,  please contact the  <a href="logout.php">Admin </a> web site.
        </div></b></h4>';
    exit;
    };

?>
<div class="container">
<h1>Hello, <?php echo $userData['username'];?></h1>
<h4>Your code is:  <?php echo $userData['code'];?></h4>


			<p>The  purpose of this test page, is to show that these files and 
				pages are secured. Feel free to open  any of the other sites, and note 
				that they will only work on the browser you are currently using.</p>


			<p><a href="boot/image.php">Dive Images in php</a></p>
			<p><a href="boot/image.html">Dive Images</a></p>
			<p><a href="scuba/index.php">Scuba Tour</a></p>
			<p><a href="to-do-list/index.php">To Do List</a></p>
			<p><a href="all-api" target="_blank">4 types for API </a></p>

      <?php 
        $code = strtoupper($userData['code']);
        
				if ($code == 'AA') { echo'
					<p> Since your code is ' , $code ,', you will have access to the  <a href="https://aaflagler.org/" target="_blank">AA Flageler </a> web site.</p>';
				}
					
				?>
			<p><a href="test.php">Test Page</a></p>

			<a href="logout.php">Logout</a>

		</div>
</div>
</body>
</html>
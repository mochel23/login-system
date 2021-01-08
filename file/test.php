<?php
session_start();
require 'db_connection.php';
// CHECK USER IF LOGGED IN
if (isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])) {

	echo 'Connected successfully<br>';

	$user_email = $_SESSION['user_email'];
	$get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
	$userData =  mysqli_fetch_assoc($get_user_data);

	$code = $_SESSION['code'];
	$sql = "SELECT code FROM users WHERE code = '$code'";
	$result = mysqli_query($db_connection, $sql);
	$row = mysqli_fetch_all($result);

	echo $row['code'];
} else {
	header('Location: logout.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css" media="all" type="text/css">
	<title>Home</title>
	<style>
		a,
		a:visited {
			color: #0000EE;
		}

		a:hover {
			color: #EE0000;
		}
	</style>
</head>

<body>
	<div class="container">
		<h1>Hello, <?php echo $userData['username']; ?></h1>
		<h1>code, <?php echo $userData['code']; ?></h1>

		<nav class="navtop">
			<!-- <div>
				<h1>Data and Contact</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div> -->
		</nav>
		<div class="content">

			<p>Welcome back, <?php echo $userData['username']; ?>!</p>
			<p> the purpose of this page is to show that this is a protected page.</p>


			<a href="home.php">Home</a>

			<div class="col-md-auto">
				<hr class="light-100">

				<!-- <h6>2019 &copy; robert-mochel.com</h6>  -->
				<h6>&copy; 2018
					<script>
						new Date().getFullYear() > 2018 && document.write("-" + new Date().getFullYear());
					</script>,
					robert-mochel.com.</h6>
			</div>
		</div>
	</div>
</body>

</html>
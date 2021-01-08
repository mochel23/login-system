<?php
session_start();
require 'file/db_connection.php';
require 'file/login.php';
// IF USER LOGGED IN
if(isset($_SESSION['user_email'])){
header('Location: file/home.php');
exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - robert-mochel.com</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="file/style.css" media="all" type="text/css">
</head>

<body>
    <div class="container-fluid">
<div class="inline">
        <div class="one"><img src="logo/MyLogo.png" class="logo" width="15%" alt="logo"></div>
    </div>
  
<form action="" class="subForm justify-content-center" method="post">
<h2>User Login</h2>


<label for="email"><b>Email</b></label>
<input type="email" placeholder="Enter email" id="email" name="user_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>

<label for="password"><b>Password</b></label>
<input type="password" placeholder="Enter password" id="password" name="user_password" required>

<?php echo "<p style='color: red;'>".$error_message."</p>";?>

<input type="submit" value="login" class="sendBtn" >

<a href="file/signup.php"><input type="button" value="Create an account" class="sendBtn"></a>

<a href="reset-password/"><input type="button" value="Forgot your password" class="sendBtn"></a>


</form>
</div>
</body>
</html>

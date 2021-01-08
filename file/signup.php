<?php 
session_start();
require 'db_connection.php';
require 'insert_user.php';
// IF USER LOGGED IN
if(isset($_SESSION['user_email'])){
header('Location: home.php');
exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up - robert-mochel.com</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="style.css" media="all" type="text/css">
</head>

<body>
 <div class="container-fluid">  
<div class="inline">
        <div class="one"><img src="../logo/MyLogo.png" class="logo" width="15%" alt="logo"></div>
        <!-- <h4 class="two center">Contact the <a href="mailto:rmi@robert-mochel.com">admin</a> for more information </h4> -->
    </div>
<form action="" class="subForm"method="post">
<h2>Create an account</h2>



<label for="username"><b>Username</b></label>
<input type="text" placeholder="Enter username" id="username" name="username" required>

<label for="email"><b>Email</b></label>
<input type="email" placeholder="Enter email" id="email" name="user_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>

<label for="code"><b>Code</b></label>
<input type="text" placeholder="Enter code" id="code" name="code">


<label for="password"><b>Password</b></label>
<input type="password" placeholder="Enter password" id="password" name="user_password" minlength="8" required>

<input type="submit" value="Sign up" class="sendBtn">



<?php
if(isset($success_message)){
echo '<div class="success_message">'.$success_message.'</div>'; 
}
if(isset($error_message)){
echo '<div class="error_message">'.$error_message.'</div>'; 
}
?>
<a href="../index.php"><input type="button" value="Login" class="sendBtn"></a>
</form>

</div> 
</body></html>
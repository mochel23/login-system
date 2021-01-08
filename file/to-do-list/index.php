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

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My To Do List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assests/css/todos.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
    <script src="assests/js/todos.js"></script>
    <script src="assests/js/lib/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div id="container">
        <h1><a href="../home.php">My To-Do List</a> <div class="another"><i class="fas fa-plus"></i></div></h1>
        <input type="text" placeholder="Add ToDo">
        <ul>
            <li><span><i class="fas fa-trash-alt"></i></span> Rent Reg</li>
            <li><span><i class="fas fa-trash-alt"></i></span> BC</li>
            <li><span><i class="fas fa-trash-alt"></i></span> cash for tipping</li>
        </ul>
    </div>
    
    <script src="assests/js/todos.js"></script>
</body>
</html>
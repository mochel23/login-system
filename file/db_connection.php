<?php
$db_connection = mysqli_connect("localhost","mochel23_login","Queen#2468","mochel23_login_registration");
// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<?php

if(isset($_POST['username']) && isset($_POST['user_email']) && isset($_POST['user_password'])){

// CHECK IF FIELDS ARE NOT EMPTY

if(!empty(trim($_POST['username'])) && !empty(trim($_POST['user_email'])) && !empty($_POST['user_password'])){



// Escape special characters.
$username = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['username']));
$code = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['code']));

$user_email = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_email']));

//IF EMAIL IS VALID
if (filter_var($user_email, FILTER_VALIDATE_EMAIL)) {  



// CHECK IF EMAIL IS ALREADY REGISTERED

$check_email = mysqli_query($db_connection, "SELECT `user_email` FROM `users` WHERE user_email = '$user_email'");

if(mysqli_num_rows($check_email) > 0){    
$error_message = "This Email Address is already registered. Please Try another.";
}
else{
// IF EMAIL IS NOT REGISTERED
/* -- 

ENCRYPT USER PASSWORD USING PHP password_hash function 
LEARN ABOUT PHP password_hash - http://php.net/manual/en/function.password-hash.php

-- */

$user_hash_password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);





// INSER USER INTO THE DATABASE

$insert_user = mysqli_query($db_connection, "INSERT INTO `users` (username, user_email,code,  user_password) VALUES ('$username', '$user_email', '$code', '$user_hash_password')");
// Sedn a message to Admin to approve
$get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
$userData =  mysqli_fetch_assoc($get_user_data);
$email = $userData['user_email'];
$pwd = $userData['user_password'];
$to      = 'rmi@robert-mochel.com';
$subject = 'Log In website';
$message = 'There is a new user ' . $email .' on the mysqli';
$headers = array(
    'From' => 'rmi@robert-mochel.com',
    'Reply-To' => $email,
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);
// end of the request


if($insert_user === TRUE){
$success_message = "Thanks! You have signed up.  The Admin will need to approve your login...";
}
else{
$error_message = "Oops! something wrong.";
}

}    

}
else {
// IF EMAIL IS INVALID
$error_message = "Invalid email address";
}

}
else{
// IF FIELDS ARE EMPTY

$error_message = "Please fill in all the required fields.";

}

}

?>
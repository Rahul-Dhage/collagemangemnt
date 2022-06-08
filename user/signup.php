<?php

session_start();
$exist = FALSE;
$_SESSION['logged_in'] = FALSE; // setting by default to false 
require("conn.php"); // importing connection object


$logs = [];
$phone = mysqli_real_escape_string($link, $_POST['phone']);
$name = mysqli_real_escape_string($link, $_POST['name']);
$email = mysqli_real_escape_string($link, $_POST['email']);

$pass = $_POST['password'];
$cpass = $_POST['c_password'];

if ($pass != $cpass) {
     
    $logs = [
      "status" => "error",
      'massage' => "Password do not matches"
    ];
} else {
 // moving towards checking data if password mathces;

  $enc_pass = password_hash($cpass , PASSWORD_BCRYPT);
  $key = bin2hex(openssl_random_pseudo_bytes(16));
  $query = "INSERT INTO `user` ( `name`, `phone`,`email` , `password` , `pass_key`) VALUES ('$name', '$phone', '$email' , '$enc_pass' , '$key')";
  $execute = mysqli_query($link, $query);
if ($execute) {

  $_SESSION['logged_in'] = true;
  $_SESSION['user_id'] = $email;

  $logs = [
    "status" => "success",
    'massage' => 'Your account has been created , redirecting to home....'
  ];

} else {

  
  $logs = [
    "status" => "error",
    'massage' => "Email address already exists"
  ];
}

}

echo (json_encode($logs));

?>
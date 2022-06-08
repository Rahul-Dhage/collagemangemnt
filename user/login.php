<?php
session_start();
$exist = FALSE;
$_SESSION['logged_in'] = FALSE;
require("conn.php");   // connection object

$logs = [];

$email = $_POST['email'];
  
  $pass = $_POST['password'];

  $query = "SELECT * FROM user WHERE email = '$email' ";

  $execute = mysqli_query($link, $query);
  $valid = mysqli_num_rows($execute);
  if ($valid) {
$data = mysqli_fetch_assoc($execute);
$hash = $data['password'];

if(password_verify($pass , $hash) === true){
  
    $_SESSION['logged_in'] = true;
    $_SESSION['user_id'] = $email;

  $logs = [
    "status" => "success",
    'massage' => 'Successfully logged in  , redirecting to home....'
  ];

}else{
  
  $logs = [
    "status" => "error",
    'massage' => "Email and Phone number do not match ."
  ];
}
    
  } else {
    
  $logs = [
    "status" => "error",
    'massage' => "Email address is not registered ."
  ];
  }
  echo (json_encode($logs));
  ?>


<?php
session_start();
$user = $_SESSION['user_id'];
require('../user/conn.php');
$name = mysqli_real_escape_string($link , $_POST['name']);
$pf = mysqli_real_escape_string($link , $_POST['proffesion']);
$contact = mysqli_real_escape_string($link , $_POST['contact']);
$email =  mysqli_real_escape_string($link , $_POST['email']);
$address = mysqli_real_escape_string($link , $_POST['address']);
$summary = mysqli_real_escape_string($link , $_POST['summary']);

$check = 'select * from user where email = "'.$email.'"';
$run = mysqli_query($link , $check);

if(mysqli_num_rows($run)){
    $query = "update personal set name ='$name' , contact = '$contact', email = '$email', address  = '$address', summary = '$summary' , proffession = '$pf' ";
}else{
    $query = "INSERT INTO personal ( `name`, `contact`, `email` , `address` , `summary`, `proffession`) VALUES ( '$name', '$contact', '$email', '$address' , '$summary' , '$pf') ";
}

$run = mysqli_query($link , $query);
if($run){
    $res = [
        "status" => "success",
        "msg" => "Your Personal details has been saved successfully , redirecting to academic section"
    ]; 

}
else{
    $res = [
        "status" => "failed",
        "msg" => "Something went wrong :)"
    ]; 
}

echo json_encode($res);
//mysqli_error($link);

?>
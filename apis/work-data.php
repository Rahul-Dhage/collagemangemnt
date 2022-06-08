<?php
session_start();
require('../user/conn.php');
$user = $_SESSION['user_id'];
$count = number_format($_POST['work_count']);

for($i = 0 ; $i <= $count ; $i++){
    $desig = mysqli_real_escape_string($link , $_POST['desig'.$i]);
    $organisation = mysqli_real_escape_string($link , $_POST['org'.$i]);
    $starton =  mysqli_real_escape_string($link , $_POST['workstart'.$i]);
    $endon = mysqli_real_escape_string($link , $_POST['workend'.$i]);

    if(isset($_POST['working'. $i])){
        $endon = "Currently working";
    }
    $query = "INSERT INTO work_data ( desig , organization , starton , endon , user) VALUES ( '$desig',  '$organisation','$starton' ,  '$endon' , '$user') ";
    
    $run = mysqli_query($link , $query);
}
if($run){
    $res = [
        "status" => "success",
        "msg" => "Your work details has been saved successfully, redirecting to skills section"
    ]; 

}
else{
    $res = [
        "status" => "failed",
        "msg" => "Something went wrong :)"
    ]; 
}

echo json_encode($res);
?>
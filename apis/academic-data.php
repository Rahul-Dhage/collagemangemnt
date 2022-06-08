<?php
session_start();
require('../user/conn.php');
$user = $_SESSION['user_id'];
$count = $_POST['academic_count'];

for($i = 0 ; $i <= $count ; $i++){
    $ed = mysqli_real_escape_string($link , $_POST['education'.$i]);
    $year = mysqli_real_escape_string($link , $_POST['year'.$i]);
    $board =  mysqli_real_escape_string($link , $_POST['board'.$i]);
    $mark = mysqli_real_escape_string($link , $_POST['marks'.$i]);
    $query = "INSERT INTO academic ( qualification, board, year, marks , user) VALUES ( '$ed', '$board', '$year', '$mark' , '$user') ";
    
    $run = mysqli_query($link , $query);
}
if($run){
    $res = [
        "status" => "success",
        "msg" => "Your Academic details has been saved successfully, redirecting to skills section"
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
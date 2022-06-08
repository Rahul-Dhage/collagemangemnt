<?php
include("./components/header.php");

session_start();
require("user/conn.php");
if(!isset($_SESSION['user_id'])){
 header('location: login.php');
 die();
}else{
    $user = $_SESSION['user_id'];
$count = number_format($_POST['skill_count']);

for($i = 0 ; $i <= $count ; $i++){
    $skill= mysqli_real_escape_string($link , $_POST['skill'.$i]);
    $level = mysqli_real_escape_string($link , $_POST['level'.$i]);
    
    $query = "INSERT INTO skill ( skill, level , user) VALUES ( '$skill', '$level' , '$user') ";
    
    $run = mysqli_query($link , $query);
    if($run){
         $msg2 = "Your Skill details has been saved successfully :)";
    }
        else {  $msg2 = "Something went wrong , king fill skill again . :(";
    }
 
    echo mysqli_error($link);
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./styles/form.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>choose template</title>
</head>
<body>
    <?php echo '<h4 class="msg">' . $msg2 . '</h4>'; ?>
<main class="container-fluid">
    
       
    <div class="flex-container">
        <a href='./user/cv.php?temp=0' class="card">
            
                <img class="img-temp" src="cv-temp.jpg" alt="CV template">
             
            <div class="card-title-it">
                <p><strong>Build your professional CV</strong></p>
            </div>
</a>
        <a href='./user/cv.php?temp=1' class="card">
            
                <img class="img-temp" src="cv-temp.jpg" alt="CV template">
             
            <div class="card-title-it">
                <p><strong>Build your professional CV</strong></p>
            </div>
</a>
        <a href='./user/cv.php?temp=2' class="card">
            
                <img class="img-temp" src="cv-temp.jpg" alt="CV template">
             
            <div class="card-title-it">
                <p><strong>Build your professional CV</strong></p>
            </div>
</a>

    </div>

</main>

    
    <?php
include("./components/footer.php");
?>
<style>
body{
    min-height  :100vh;
}
</style>
</body>
</html>

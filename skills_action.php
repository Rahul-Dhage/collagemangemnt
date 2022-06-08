<?php

require('user/conn.php');
$count = $_POST['skill_count'];
echo $count;
for($i = 0 ; $i <= $count ; $i++){
    $skill= mysqli_real_escape_string($link , $_POST['skill'.$i]);
    $level = mysqli_real_escape_string($link , $_POST['level'.$i]);
    
    $query = "INSERT INTO skill ( skill, level) VALUES ( '$skill', '$level') ";
    
    $run = mysqli_query($link , $query);
    if($run){
       echo  $msg2 = "Your Skill details has been saved successfully :)";
    }
        else { echo $msg2 = "Something went wrong , king fill skill again . :(";
    }
    echo $msg2;
    echo mysqli_error($link);
}

?>
<?php 
    $link =  mysqli_connect("localhost", "root" , "", "cv");
    if(!$link){
    				echo "Connection failed !";
                    echo mysqli_connect_error();
    }

?>
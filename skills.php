<?php

session_start();
require("user/conn.php");
if(!isset($_SESSION['user_id'])){
 header('location: login.php');
 die();
}

?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     
     <link rel="stylesheet" href="./styles/form.css">
     <link rel="stylesheet" href="./styles/home.css">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>skills  : buildCV</title>
 </head>
 <body>
     <?php
     include("./components/header.php");
    
     ?>
     <main>
         <h2 class="heading">Create a beutyful resume/CV with us by simply feeling this easy form</h2>
         <small>You can always edit this and can make changes as per requirement  once you save this  form </small>
         <form action="choose_template.php" method="post" autocomplete="off">
           <div class="progress-bar">
               <ul>
                   <li class='current'>1. Personal details</li>
                   <li class='current'>2. Academic details</li>
                   <li class='current'>3. Work-History </li>
                   <li class='current'>4. Skills </li>
               </ul>
           </div>
         <span class="scroll-down">Step 3</span>
          
            <!-- adding skills to cv -->

            <section class="skills">
                <h4 class="sub-heading">Add skills</h4>
                <div class="inputs">

                    <h4 class="label">Skill </h4>
                    <input required type="text" name="skill0" placeholder="eg . Photoshop ">

                    <h4 class="label">Skill level: </h4>
                    <select  required name="level0" id="">
                        <option value="begineer">Beginner</option>
                        <option value="intermediate">Intermediate</option>
                        <option value="advanced">Advanced</option>
                    </select>
                     <h2 class="addmore skill"> Add more </h2>
                </div>
                <input type="hidden" value='0' name="skill_count" class='tracker'>
            </section>
            <button  class='submit sub-heading' type="submit">Submit data</button>
        </form>
     </main>
     </div>
     <script src="./javascript/form.js" defer></script>
    </body>
    </html>
    <?php include("components/footer.php"); ?>
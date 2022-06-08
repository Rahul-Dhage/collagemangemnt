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
     <title>Details : buildCV</title>
 </head>
 <body>
     <?php
     include("./components/header.php");
    
     ?>
     <main>
     <div class="modal modal--closed">
         <div class="modal--body success warn">
             <h4 class="modal--body__text">
                
             </h4>
         </div>
     </div>
         <h2 class="heading">Create a beutyful resume/CV with us by simply feeling this easy form</h2>
         <small>You can always edit this and can make changes as per requirement  once you save this  form </small>
         <form  method="post" autocomplete="off">
           <div class="progress-bar">
               <ul>
                   <li class='current'>1. Personal details</li>
                   <li class='current'>2. Academic details</li>
                   <li>3. Work-History </li>
                   <li>3. Skills </li>
               </ul>
           </div>
         <span class="scroll-down">Step 2</span>
            <section class="education">
                <h4 class="sub-heading">Academic details</h4>
                <div class="inputs">

                    <h4 class="label">Qualification : </h4>
                    <input required type="text" name="education0" placeholder="BTech (cse) ">

                    <h4 class="label">Completed on : </h4>
                    <input required type="text" name="year0"  placeholder=" eg. 2018">
                    
                    <h4 class="label">Board/Univercity : </h4>
                    <input required type="text" name="board0" placeholder=" DBatu lonere ">
                    
                    <h4 class="label">Passing marks (CGPA/Percentage) </h4>
                    <input required type="text" name="marks0"  placeholder=" eg. 9.1">
                    
                    <h2 class="addmore"> Add more </h2>
                </div>
                <input type="hidden" value='0' name="academic_count" class='tracker'>
            </section>
           
            <button  class='submit sub-heading' type="submit">Submit data</button>
        </form>
     </main>
     <script src="./javascript/form.js" defer></script>
     <script src="./javascript/academic-data-form.js" defer></script>
     <?php include("components/footer.php"); ?>
 </body>
 </html>
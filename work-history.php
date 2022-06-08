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
     <title> Work history : buildCV</title>
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
                   <li class='current'>3. Work-History </li>
                   <li>4. Skills </li>
               </ul>
           </div>
         <span class="scroll-down">Step 2</span>
            <section class="works">
                <h4 class="sub-heading">Work histroy</h4>
                <div class="inputs">

                    <h4 class="label">Designation : </h4>
                    <input required type="text" name="desig0" placeholder="Senior developer">

                    <h4 class="label">Organization : </h4>
                    <input required type="text" name="org0"  placeholder="Microsoft">
                    
                    <h4 class="label">started on  : </h4>
                    <input required type="date" name="workstart0" placeholder="">
                    
                    <h4 class="label">Ended on : </h4>
                    <input required type="date" name="workend0"  placeholder="">
                    <span class='check-box'>

                        <input type="checkbox" name="working0" id='labelcw'>
                        <label for="labelcw">Currently working</label>
</span>
                    
                    <h2 class="addmore work"> Add more </h2>
                </div>
                <input type="hidden" value='0' name="work_count" class='tracker'>
            </section>
           
            <button  class='submit sub-heading' type="submit">Submit data</button>
        </form>
     </main>
     <script src="./javascript/work.js" defer></script>
     <script src="./javascript/work-data-form.js" defer></script>
     <?php include("components/footer.php"); ?>
 </body>
 </html>